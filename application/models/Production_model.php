<?php
class Production_model extends MY_Model {

    public function __construct() {
		parent::__construct();
		$this->load->helper('date');
    }
    
    public function getMember($account_name) {
        $q = "SELECT * FROM member WHERE account_name = ? AND is_deleted = 0";
        return $this->db->query($q, array($account_name))->row_array();
    }
    
    public function createMember($data) {
        $referral_exist = true;
        while($referral_exist == true) {
            $referral_code = strtoupper(passwordGen(6));
            if($this->general_model->count('member', array('referral_code' => $referral_code, 'is_deleted' => 0)) == 0) {
                $referral_exist = false;
            }
        }
        
        $this->db->insert('member', array(
            'created_at' => now(),
            'account_name' => $data['account_name'],
            'password' => hashPw($data['password']),
            'referral_code' => $referral_code,
            'sponsor_id' => $data['sponsor_id'],
            'sponsor_upline_ids' => $data['sponsor_upline_ids'],
            'sponsor_lvl' => $data['sponsor_lvl'],
            'fname' => $data['fname'],
            'ic' => $data['ic'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'created_by' => AN(),
        ));
        
        return $this->db->insert_id();
    }
    
    public function getAllDownlines($account_name) {
        $q = "SELECT date(created_at) as created_at, account_name, sponsor_id, total_sales, rank FROM member WHERE (sponsor_id = ? OR sponsor_upline_ids like ?) AND is_deleted = 0";
        return $this->db->query($q, array($account_name, '%,'.$account_name.',%'))->result_array();
    }
    
    public function getDownlineCount($account_name) {
        $q = "SELECT count(id) as count FROM member WHERE (sponsor_id = ? OR sponsor_upline_ids like ?) AND is_deleted = 0";
        $result = $this->db->query($q, array($account_name, '%,'.$account_name.',%'))->row();
        
        return $result->count;
    }
    
    public function getDirectDownline($account_name) {
        $q = "SELECT * FROM member WHERE sponsor_id = ? AND is_deleted = 0";
        return $this->db->query($q, array($account_name))->result_array();
    }
    
    public function getDirectDownlineCount($account_name) {
        $q = "SELECT count(id) as count FROM member WHERE sponsor_id = ? AND is_deleted = 0";
        $result = $this->db->query($q, array($account_name))->row();
        
        return $result->count;
    }
    
    public function getAllAN() {
        $q = "SELECT account_name FROM member WHERE is_deleted = 0 AND ic_status = 1";
        return $this->db->query($q)->result_array();
    }
    
    public function getAllMembers() {
        $q = "SELECT account_name, fname, mobile, ic, created_at, cash_wallet FROM member WHERE is_deleted = 0";
        return $this->db->query($q)->result_array();
    }
    
    // account_name, account_name_2, wallet_type, amount, description, description2, tx_type, sub_tx_type
    public function walletTransaction($data) {
        if(!isset($data['account_name_2'])) {
            $data['account_name_2'] = '';
        }
        if(!isset($data['remark'])) {
            $data['remark'] = '';
        }
        
        $member = $this->production_model->getMember($data['account_name']);
        $this->general_model->update('member', $member['id'], array($data['wallet_type'] => $member[$data['wallet_type']] + $data['amount']));
        
        $this->general_model->create('wallet_transaction', array(
            'created_at' => now(),
            'account_name' => $data['account_name'],
            'account_name_2' => $data['account_name_2'],
            'wallet_type' => $data['wallet_type'],
            'amount' => $data['amount'],
            'description' => $data['description'],
            'description2' => $data['description2'],
            'transaction_type' => $data['tx_type'],
            'sub_transaction_type' => $data['sub_tx_type'],
            'is_approved' => 1,
            'approved_at' => now(),
            'approved_by' => isset($_SESSION['account_name']) ? AN() : 'system', 
            'created_by' => isset($_SESSION['account_name']) ? AN() : 'system',
            'remark' => $data['remark']
        ));
        
        return true;
    }
    
    public function getDownlinePendingOrder($account_name) {
        $q = "SELECT sum(quantity) as quantity 
            FROM stock_order so 
            INNER JOIN member m ON m.account_name = so.account_name 
            WHERE so.is_approved = 0
            AND so.is_rejected = 0
            AND so.is_deleted = 0
            AND m.is_deleted = 0
            AND (m.sponsor_id = ? OR m.sponsor_upline_ids like ?)";
        $result = $this->db->query($q, array($account_name, '%,'.$account_name.',%'))->row();
        
        if($result->quantity > 0) {
            return $result->quantity;
        }
        return 0;
    }
    
    public function getFirstLevelSales($account_name) {
        $q = "SELECT * FROM member m WHERE m.is_deleted = 0 AND (m.sponsor_id = ? OR m.sponsor_upline_ids like ?) and own_sales > 0";
        return $this->db->query($q, array($account_name, '%,'.$account_name.',%'))->result_array();
    }
    
    public function getPendingDocument() {
        $q = "SELECT * FROM member WHERE ic_status != 2 AND bank_status != 2 AND (ic_status = 0 OR bank_status = 0) AND ic_file_path <> '' AND bank_file_path <> '' AND is_deleted = 0";
        return $this->db->query($q)->result_array();
    }
    
    public function checkRanking($account_name) {
        $rank = $this->general_model->find('rank', array('is_deleted' => 0));
        
        $member = $this->getMember($account_name);
        foreach($rank as $r) {
            if($member['total_sales'] < $r['uprank_limit']) {
                continue;
            }
            
            $eligibleRank = $r['id'];
            $price = $r['price'];
            break;
        }
        
        if($eligibleRank > $member['rank']) {
            $this->general_model->create('rank_change_history', array(
                'created_at' => now(),
                'account_name' => $member['account_name'],
                'from_rank' => $member['rank'],
                'to_rank' => $eligibleRank,
                'created_by' => AN()
            ));
            
            $this->general_model->update('member', $member['id'], array(
                'rank' => $eligibleRank,
                'current_price' => $price
            ));
        }
        
        return true;
    }
    
    public function payCommission($data) {
        $str = "";
        foreach(explode(',', $data['sponsor_upline_ids']) as $key => $value) {
            $str .= "'".$value."',";
        }
        $str = rtrim($str, ",");
        
        $q = "SELECT account_name, current_price FROM member WHERE account_name IN ($str) AND is_deleted = 0 order by sponsor_lvl desc";
        $uplines = $this->db->query($q)->result_array();
        
        $previousPrice = $data['price'];
        foreach($uplines as $upline) {
            if($upline['current_price'] >= $previousPrice) {
                continue;
            }
            
            $comm = ($previousPrice - $upline['current_price'])*$data['quantity'];
            
            $details = array(
                'account_name' => $upline['account_name'],
                'account_name_2' => $data['account_name'],
                'wallet_type' => 'cash_wallet',
                'amount' => $comm,
                'description' => 'payout_commission',
                'description2' => "Commission Payout",
                'tx_type' => 'payout',
                'sub_tx_type' => 'commission',
                'remark' => 'OR-'.$data['orderId']
            );
            
            $this->walletTransaction($details);
            
            $previousPrice = $upline['current_price'];
            $finalUpline = $upline['account_name'];
        }
        
        return $finalUpline;
    }
    
    public function getUplineDetails() {
        $q = "SELECT sponsor_id, count(id) as downline FROM member WHERE is_deleted = 0 GROUP BY sponsor_id";
        return $this->db->query($q)->result_array();
    }
    
    public function getMembersDetails() {
        $q = "SELECT account_name, own_sales, total_sales, rank, date(created_at) as created_at FROM member WHERE is_deleted = 0";
        return $this->db->query($q)->result_array();
    }
    
    public function getSales() {
        $q = "SELECT date(approved_at) as date, sum(quantity) as quantity FROM stock_order WHERE is_approved = 1 AND is_rejected = 0 AND is_deleted = 0 GROUP BY date(approved_at)";
        return $this->db->query($q)->result_array();
    }
}
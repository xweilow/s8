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
            'current_price' => $data['current_price'],
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
            AND (so.account_name = ? OR m.sponsor_id = ? OR m.sponsor_upline_ids like ?)";
        $result = $this->db->query($q, array($account_name, $account_name, '%,'.$account_name.',%'))->row();
        
        if($result->quantity > 0) {
            return $result->quantity;
        }
        return 0;
    }
    
    public function getFirstLevelSales($account_name) {
        $q = "SELECT * FROM member m WHERE m.is_deleted = 0 AND m.sponsor_id = ? and own_sales > 0";
        return $this->db->query($q, array($account_name))->result_array();
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
            if($value == '') {
                continue;
            }
            $str .= "'".$value."',";
        }
        $str = rtrim($str, ",");
        
        $finalUpline = '';
        if($str != '') {
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
        $q = "SELECT date(approved_at) as date, sum(total_price) as total_price FROM stock_order WHERE is_approved = 1 AND is_rejected = 0 AND is_deleted = 0 GROUP BY date(approved_at)";
        return $this->db->query($q)->result_array();
    }
    
    public function getTopSales() {
        $q = "SELECT own_sales FROM member WHERE is_deleted = 0 AND own_sales > 0 GROUP BY own_sales ORDER BY own_sales desc LIMIT 5";
        $salesAmount = $this->db->query($q)->result_array();
        
        $str = '';
        if(sizeof($salesAmount) > 0) {
            foreach($salesAmount as $amount) {
                $str .= $amount['own_sales'].',';
            }
        }
        $str = rtrim($str, ',');
        
        $result = [];
        
        if($str != '') {
            $q = "SELECT created_at, account_name, rank, own_sales, total_sales FROM member WHERE own_sales in ($str) AND is_deleted = 0 ORDER BY own_sales DESC";
            $members = $this->db->query($q)->result_array();

            if(sizeof($members) > 0) {
                $oriSales = $members[0]['own_sales'];
                $count = 0;
                foreach($members as $member) {
                    if($count >= 5 && $member['own_sales'] < $oriSales) {
                        break;
                    }

                    $result[] = $member;
                    $count++;
                    $oriSales = $member['own_sales'];
                }
            }
        }
        
        return $result;
    }
    
    public function getMemberCount($interval) {
        $today = date('Y-m-d');
        $result = $this->db->query("SELECT count(id) as total FROM member where created_at > DATE_ADD(?, INTERVAL - $interval)", array($today))->row();
        if($result->total > 0)
			return $result->total;

		return 0;
    }
    
    public function getTotalSales($interval) {
        $today = date('Y-m-d');
        $result = $this->db->query("SELECT sum(total_price) as total FROM stock_order where is_approved = 1 AND is_deleted = 0 AND approved_at > DATE_ADD(?, INTERVAL - $interval)", array($today))->row();
        if($result->total > 0)
			return $result->total;

		return 0;
    }
    
    public function getTotalCommission($interval) {
        $today = date('Y-m-d');
        $result = $this->db->query("SELECT sum(amount) as total FROM wallet_transaction where description = 'payout_commission' AND is_approved = 1 AND is_deleted = 0 AND approved_at > DATE_ADD(?, INTERVAL - $interval)", array($today))->row();
        if($result->total > 0)
			return $result->total;

		return 0;
    }
    
    public function getTotalWr($interval) {
		$today = date('Y-m-d');
        $result = $this->db->query("SELECT sum(amount) as total FROM withdrawal_request where is_approved = 1 AND approved_at > DATE_ADD(?, INTERVAL - $interval) AND is_deleted = 0", array($today))->row();
        if($result->total > 0)
			return $result->total;

		return 0;
	}
    
    public function getSalesByDate() {
        $today = date('Y-m-d');
        $q = "SELECT dayname(date(approved_at)) as date, sum(total_price) as sales FROM stock_order WHERE is_approved = 1 AND is_deleted = 0 AND approved_at > DATE_ADD(?, INTERVAL - 1 WEEK) GROUP BY date(approved_at)";
        return $this->db->query($q, array($today))->result_array();
    }
    
    public function getMemberListing($data) {
        $cond = '';
        if(isset($data['account_name'])) {
            $cond .= " AND account_name like '%$data[account_name]%'";
        }
        if(isset($data['sponsor_id'])) {
            $cond .= " AND sponsor_id = '$data[sponsor_id]'";
        }
        if(isset($data['rank'])) {
            $cond .= " AND rank = '$data[rank]'";
        }
        if(isset($data['fname'])) {
            $cond .= " AND fname like '%$data[fname]%'";
        }
        if(isset($data['ic'])) {
            $cond .= " AND ic like '%$data[ic]%'";
        }
        if(isset($data['is_login_locked'])) {
            $cond .= " AND is_login_locked = 1";
        }
        if(isset($data['is_wr_locked'])) {
            $cond .= " AND is_wr_locked = 1";
        }
        
        $q = "SELECT * FROM member WHERE is_deleted = 0 $cond";
        return $this->db->query($q)->result_array();
    }
    
    public function getMonthlyReportSales() {
        $q = "SELECT year(approved_at) as year, month(approved_at) as month, sum(quantity) as quantity, sum(total_price) as total_price, count(id) as count FROM stock_order WHERE is_approved = 1 AND is_rejected = 0 AND is_deleted = 0 GROUP BY year(approved_at), month(approved_at)";
        return $this->db->query($q)->result_array();
    }
    
    public function getMonthlyReportWr() {
        $q = "SELECT year(approved_at) as year, month(approved_at) as month, sum(amount) as amount, count(id) as count FROM withdrawal_request WHERE is_approved = 1 AND is_rejected = 0 AND is_deleted = 0 GROUP BY year(approved_at), month(approved_at)";
        return $this->db->query($q)->result_array();
    }
}
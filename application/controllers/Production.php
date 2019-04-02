<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Production extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('production_model');
        $this->load->model('general_model');
    }
    
    public function createOrder() {
        $this->checkPrivilege(1);
        
        $member = $this->production_model->getMember(AN());
        
        $current_rank = $this->general_model->get('rank', $member['rank']);
        $price = $current_rank['price'];
        
        if($member['rank'] < 4) {
            $next_rank = $this->general_model->get('rank', $member['rank'] + 1);
            $limit = $next_rank['uprank_limit'] - $member['total_sales'];
            if($this->input->post('quantity') > $limit) {
                $this->fail("Exceed Purchase Limit");
            }
        }
        
        $receiptFile = "";
        if(!empty($_FILES["receipt"]["type"])){
            $receiptFile = $this->uploadFile("receipt", "receipt");
        }
        if($this->input->post("delivery_type") != 1 && $this->input->post("delivery_type") != 2) {
            $this->fail("Invalid Delivery Option");
        }
        
        $receiver = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('receiver');
        $mobile = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('mobile');
        $addressline1 = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('addressline1');
        $addressline2 = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('addressline1');
        $city = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('city');
        $postcode = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('postcode');
        $state = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('state');
        $country = $this->input->post("delivery_type") != 2 ? '' : $this->input->post('country');
        
        $total_price = $this->input->post('quantity')*$price;
        
        $this->general_model->create('stock_order', array(
            'created_at' => now(),
            'account_name' => AN(),
            'quantity' => $this->input->post('quantity'),
            'price' => $price,
            'total_price' => $total_price,
            'receipt_file_path' => $receiptFile,
            'delivery_option' => $this->input->post("delivery_type"),
            'receiver' => $receiver,
            'mobile' => $mobile,
            'addressline1' => $addressline1,
            'addressline2' => $addressline2,
            'city' => $city,
            'postcode' => $postcode,
            'state' => $state,
            'country' => $country
        ));
        
        $this->success("Order Created");
    }
    
    public function updateWalletAmount() {
        $this->checkPrivilege(3);
        
        $account_name = trim(strtolower($this->input->post('account_name')));
        $member = $this->production_model->getMember($account_name);
        if(sizeof($member) == 0) {
            $this->fail("Member Not Found");
        }
        if($this->input->post('type') != "deposit" && $this->input->post('type') != "deduct") {
            $this->fail("Invalid Transaction Type");
        }
        if($this->input->post('amount') <= 0) {
            $this->fail("Please Input Valid Positive Amount");
        }
        
        $amount = $this->input->post('amount');
        $description = 'deposit';
        $description2 = 'Company Deposit';
        if($this->input->post('type') == "deduct") {
            $amount *= -1;
            $description = 'deduct';
            $description2 = 'Company Deduct';
        }
        
        $data = array(
            'account_name' => $account_name,
            'wallet_type' => 'cash_wallet',
            'amount' => $amount,
            'description' => $description,
            'description2' => $description2,
            'tx_type' => 'IO',
            'sub_tx_type' => $description,
            'remark' => $this->input->post('remark')
        );
        
        $this->production_model->walletTransaction($data);
        
        $this->success("Transaction Success");
    }
    
    public function createWithdrawal($pass = '') {
        if($pass != 'guyabihau981425') {
            return false;
        }
        if(date('t') != date('d')) {
            echo "Today Not Last Day Of Month La!";
            return false;
        }
        
        ini_set('max_execution_time', 30000);
        
        $cronjobId = $this->general_model->create('cronjob_withdrawal', array('created_at' => now()));
        $total_member = 0;
        $total_amount = 0;
        
        $members = $this->general_model->find('member', array('cash_wallet >' => 0, 'is_wr_locked' => 0, 'is_deleted' => 0));
        foreach($members as $member) {
            $data = array(
                'account_name' => $member['account_name'],
                'wallet_type' => 'cash_wallet',
                'amount' => $member['cash_wallet']*(-1),
                'description' => 'withdrawal',
                'description2' => "Withdrawal",
                'tx_type' => 'IO',
                'sub_tx_type' => 'withdrawal'
            );

            $this->production_model->walletTransaction($data);
            
            $this->general_model->create('withdrawal_request', array(
                'created_at' => now(),
                'account_name' => $member['account_name'],
                'wallet_type' => 'cash_wallet',
                'amount' => $member['cash_wallet'],
                'withdrawal_fee' => 0,
                'b_name' => $member['bank_name'],
                'b_acc_num' => $member['bank_account_number'],
                'b_acc_name' => $member['bank_account_name'],
                'b_swift' => $member['bank_swift_code'],
                'b_branch_add' => $member['branch_address'],
                'created_by' => 'cronjob'
            ));
            
            $total_member++;
            $total_amount += $member['cash_wallet'];
        }
        
        $this->general_model->update('cronjob_withdrawal', $cronjobId, array(
            'total_member' => $total_member,
            'total_amount' => $total_amount,
            'updated_at' => now()
        ));
        
        echo "Done";
    }
    
    public function updateWithdrawalStatus() {
        $this->checkPrivilege(3);
        
        $request = $this->general_model->get('withdrawal_request', $this->input->post('id'));
        if(sizeof($request) == 0) {
            $this->fail("Invalid Request");
        }
        if($request['is_approved'] == 1 || $request['is_rejected'] == 1) {
            $this->fail("Request Has Been Processed Before");
        }
        
        $action = $this->input->post('action');
        if($action != 'approve' && $action != 'reject') {
            $this->fail("Invalid Action");
        }
        
        if($action == 'approve') {
            $uploadedFile = '';
            if(!empty($_FILES["bank_stat"]["type"])){
                $uploadedFile = $this->uploadFile("bank_stat", "bank_stat");
            }

            $this->general_model->update('withdrawal_request', $request['id'], array(
                'is_approved' => 1,
                'approved_by' => AN(),
                'approved_at' => now(),
                'bank_stat' => $uploadedFile,
                'remark' => $this->input->post('remark')
            ));
        } else if($action == 'reject') {
            $data = array(
                'account_name' => $request['account_name'],
                'wallet_type' => 'cash_wallet',
                'amount' => $request['amount'],
                'description' => 'withdrawal_refund',
                'description2' => "Withdrawal Refund",
                'tx_type' => 'IO',
                'sub_tx_type' => 'withdrawal_refund',
                'remark' => 'WR-'.$request['id']
            );

            $this->production_model->walletTransaction($data);
            
            $this->general_model->update('withdrawal_request', $request['id'], array(
                'is_rejected' => 1,
                'rejected_by' => AN(),
                'rejected_at' => now(),
                'remark' => $this->input->post('remark')
            ));
        }
        
        $this->success("Request Has Been Processed");
    }
    
    public function rejectOrder() {
        $this->checkPrivilege(3);
        
        $order = $this->general_model->get('stock_order', $this->input->post('id'));
        if(sizeof($order) == 0) {
            $this->fail("Invalid Request");
        }
        if($order['is_approved'] == 1 || $order['is_rejected'] == 1) {
            $this->fail("Order Has Been Processed Before");
        }
        
        $this->general_model->update('stock_order', $order['id'], array(
            'is_rejected' => 1,
            'rejected_by' => AN(),
            'rejected_at' => now(),
            'remark' => $this->input->post('remark')
        ));
        
        $this->success("Order Has Been Processed");
    }
    
    public function completeOrder() {
        $this->checkPrivilege(3);
        
        $order = $this->general_model->get('stock_order', $this->input->post('id'));
        if(sizeof($order) == 0) {
            $this->fail("Invalid Request");
        }
        if($order['is_approved'] != 1) {
            $this->fail("Invalid Request");
        }
        if($order['is_completed'] == 1) {
            $this->fail("Order Has Been Processed Before");
        }
        
        $this->general_model->update('stock_order', $order['id'], array(
            'is_completed' => 1,
            'completed_by' => AN(),
            'completed_at' => now()
        ));
        
        $this->success("Order Has Been Processed");
    }
    
    public function updateOrder() {
        $this->checkPrivilege(3);
        
        $order = $this->general_model->get('stock_order', $this->input->post('id'));
        if(sizeof($order) == 0) {
            $this->fail("Invalid Request");
        }
        if($order['is_approved'] != 1) {
            $this->fail("Invalid Request");
        }
        if($order['is_completed'] == 1) {
            $this->fail("Order Has Been Processed Before");
        }
        
        $this->general_model->update('stock_order', $order['id'], array(
            'track_num' => $this->input->post('track_num'),
            'courier_name' => $this->input->post('courier_name')
        ));
        
        $this->success("Info Updated");
    }
    
    public function approveOrder() {
        $this->checkPrivilege(3);
        
        $order = $this->general_model->get('stock_order', $this->input->post('id'));
        if(sizeof($order) == 0) {
            $this->fail("Invalid Request");
        }
        if($order['is_approved'] == 1 || $order['is_rejected'] == 1) {
            $this->fail("Order Has Been Processed Before");
        }
        
        // **************************
        // Update Own Sales
        // **************************
        $member = $this->production_model->getMember($order['account_name']);
        $this->general_model->update('member', $member['id'], array(
            'own_sales' => $member['own_sales'] + $order['quantity'],
            'total_sales' => $member['total_sales'] + $order['quantity']
        ));
        
        // **************************
        // Update Sponsor Sales
        // **************************
        $sponsor = $this->production_model->getMember($member['sponsor_id']);
        $this->general_model->update('member', $sponsor['id'], array(
            'total_sales' => $sponsor['total_sales'] + $order['quantity']
        ));
        
        // **************************
        // Check Self Ranking
        // **************************
        $this->production_model->checkRanking($member['account_name']);
        
        // **************************
        // Check Sponsor Ranking
        // **************************
        if($sponsor['account_name'] != '') {
            $this->production_model->checkRanking($sponsor['account_name']);
        }
        
        // **************************
        // Pay Commission
        // **************************
        $data = array(
            'quantity' => $order['quantity'],
            'account_name' => $member['account_name'],
            'price' => $order['price'],
            'orderId' => $order['id'],
            'sponsor_upline_ids' => $member['sponsor_upline_ids']
        );
        $deliverPayoutUpline = $this->production_model->payCommission($data);
        
        // **************************
        // Deduct Delivery Fee
        // **************************
        if($order['delivery_option'] == 2) {
            $deliverPayoutUpline = $deliverPayoutUpline == '' ? $member['account_name'] : $deliverPayoutUpline;
            $data = array(
                'account_name' => $deliverPayoutUpline,
                'account_name_2' => $member['account_name'],
                'wallet_type' => 'cash_wallet',
                'amount' => ($order['quantity']/10)*10*(-1),
                'description' => 'fee',
                'description2' => "Delivery Fee",
                'tx_type' => 'fee',
                'sub_tx_type' => 'delivery',
                'remark' => 'OR-'.$order['id']
            );

            $this->production_model->walletTransaction($data);
        }
        
        // **************************
        // Approve Order
        // **************************
        $this->general_model->update('stock_order', $order['id'], array(
            'is_approved' => 1,
            'approved_by' => AN(),
            'approved_at' => now(),
            'remark' => $this->input->post('remark')
        ));
        
        $this->success("Order Has Been Processed");
    }
    
    public function getNews() {
        $this->checkPrivilege(3);
        
        $news = $this->general_model->get('news', $this->input->post('id'));
        if(sizeof($news) == 0) {
            $this->fail("News Not Found");
        }
        
        $this->success($news);
    }
    
    public function deleteNews() {
        $this->checkPrivilege(3);
        
        $news = $this->general_model->get('news', $this->input->post('id'));
        if(sizeof($news) == 0) {
            $this->fail("News Not Found");
        }
        
        $this->general_model->update('news', $news['id'], array('is_deleted' => 1));
        $this->success("Deleted");
    }
    
    public function editNews() {
        $this->checkPrivilege(3);
        
        $news = $this->general_model->get('news', $this->input->post('id'));
        if(sizeof($news) == 0) {
            $this->fail("News Not Found");
        }
        
        $this->general_model->update('news', $news['id'], array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        ));
        $this->success("Updated");
    }
    
    public function addNews() {
        $this->checkPrivilege(3);
        
        $this->general_model->create('news', array(
            'created_at' => now(),
            'type' => 'default',
            'language' => 'english',
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        ));
        $this->success("News Created");
    }

    public function onImageUpload() {
        if ($_FILES['file']['name']) {
            if (!is_dir("./uploads")){
                mkdir("./uploads");
            }
            if (!is_dir("./uploads/news")){
                mkdir("./uploads/news");
            }
            if (!$_FILES['file']['error']) {
                $name = md5(rand(100, 1000));
                $ext = explode('.', $_FILES['file']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = './uploads/news/' . $filename; //change this directory
                $location = $_FILES["file"]["tmp_name"];
                move_uploaded_file($location, $destination);
                // echo base_url().'uploads/document/' . $filename;//change this URL
                $this->success(base_url().'uploads/news/' . $filename);
            }
            else
            {
              $this->fail('Your upload triggered the following error:  '.$_FILES['file']['error']);
            }
        }
    }
}
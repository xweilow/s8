<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('production_model');
        $this->load->model('general_model');
        
        if($this->uri->segment(2) != 'login') {
            if(!isset($_SESSION['account_name']) || !isset($_SESSION['user_privilege'])) {
                unset($_SESSION['account_name']);
                unset($_SESSION['user_privilege']);
                refreshFunc('panel/login');
            }
            if($_SESSION['user_privilege'] != 1) {
                unset($_SESSION['account_name']);
                unset($_SESSION['user_privilege']);
                refreshFunc('panel/login');
            }
        
            $this->data = $this->production_model->getMember($_SESSION['account_name']);
            if(sizeof($this->data) == 0) {
                unset($_SESSION['account_name']);
                unset($_SESSION['user_privilege']);
                refreshFunc('panel/login');
            }
            
            if($this->uri->segment(2) != 'orders' && $this->data['own_sales'] == 0) {
                refreshFunc('panel/orders');
            }
        }
    }
    
    public function index() {
        $this->data['title'] = 'Panel';
        
        $this->data['downlineCount'] = $this->production_model->getDownlineCount(AN());
        $this->data['totalComm'] = $this->general_model->sum('wallet_transaction', array('account_name' => AN(), 'description' => 'payout_commission', 'is_approved' => 1, 'is_deleted' => 0), 'amount');
        $this->data['news'] = $this->general_model->first('news', array('type' => 'default', 'language' => 'english', 'is_deleted' => 0));
        $this->data['rankDetails'] = array_reverse($this->general_model->find('rank', array('id <' => 5)));
        foreach($this->data['rankDetails'] as $key => $value) {
            if($this->data['rankDetails'][$key]['uprank_limit'] == 0) {
                $percentage = 100;
            } else {
                $percentage = ($this->data['total_sales']/$this->data['rankDetails'][$key]['uprank_limit'])*100;
            }
            $this->data['rankDetails'][$key]['percentage'] = $percentage > 100 ? number_format(100, 2) : number_format($percentage, 2);
        }
        $this->data['rankDetails'] = array_reverse($this->data['rankDetails']);
        
    	$this->loadPage('panel', $this->data);
    }
    
    public function login(){
        $this->load->view('login');
    }
    
    public function profile() {
        $this->data['title'] = 'Profile';
    	$this->loadPage('profile', $this->data);
    }
    
    public function registration() {
        $this->data['title'] = 'Account Registration';
        $this->loadPage('registration', $this->data);
    }
    
    public function genealogy() {
        $this->data['title'] = 'Genealogy';
        $this->data['downlines'] = $this->production_model->getAllDownlines(AN());
        $this->loadPage('genealogy', $this->data);
    }
    
    public function orders() {
        $this->data['title'] = 'New Order';

        $currentRank = $this->general_model->get('rank', $this->data['rank']);
        $this->data['price'] = $currentRank['price'];

        if($this->data['rank'] >= 4) {
            $this->data['limit'] = "1000000";
        } else {
            $nextRank = $this->general_model->get('rank', $this->data['rank'] + 1);
            $this->data['limit'] = $nextRank['uprank_limit'] - $this->data['total_sales'];
        }

        $this->data['pendingOrder'] = $this->general_model->count('stock_order', array('account_name' => AN(), 'is_approved' => 0, 'is_rejected' => 0, 'is_deleted' => 0));
        $this->data['downlinePendingOrder'] = $this->production_model->getDownlinePendingOrder(AN());

        $this->loadPage('order', $this->data);
    }
    
    public function reports($page = '') {
        if($page == 'orders') {
            $this->data['title'] = 'Order History';
            $this->data['records'] = $this->general_model->find('stock_order', array('account_name' => AN(), 'is_deleted' => 0));
            $this->loadPage('report_orders', $this->data);
        } else if($page == 'wallet') {
            $this->data['title'] = 'Wallet History';
            $this->data['transactions'] = $this->general_model->find('wallet_transaction', array('account_name' => AN(), 'is_approved' => 1, 'is_deleted' => 0));
            $this->data['total'] = 0;
            foreach($this->data['transactions'] as $key => $value) {
                $this->data['total'] += $value['amount'];
            }
            $this->loadPage('report_wallet', $this->data);
        } else if($page == 'withdrawal') {
            $this->data['title'] = 'Withdrawal History';
            $this->data['records'] = $this->general_model->find('withdrawal_request', array('account_name' => AN(), 'is_deleted' => 0));
            $this->loadPage('report_withdrawal', $this->data);
        } else if($page == 'sales') {
            $this->data['title'] = 'First Level Sales History';
            $this->data['downlines'] = $this->production_model->getFirstLevelSales(AN());
            $this->loadPage('report_sales', $this->data);
        }
    }

    public function resetpw(){
        $this->load->view('resetpw');
    }

    public function signup(){
        $this->load->view('signup');
    }

    private function loadPage($page = "panel", $data = array()) {
        $data['menu'] = $this->load->view('templates/side_nav_member.php', $data, TRUE);
		$this->load->view('templates/header', $data);
		$this->load->view('member/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('production_model');
        $this->load->model('general_model');
        
        if($this->uri->segment(2) != 'login') {
            if(!isset($_SESSION['account_name']) || !isset($_SESSION['user_privilege'])) {
                unset($_SESSION['account_name']);
                unset($_SESSION['user_privilege']);
                refreshFunc('board/login');
            }
            if($_SESSION['user_privilege'] != 3) {
                unset($_SESSION['account_name']);
                unset($_SESSION['user_privilege']);
                refreshFunc('board/login');
            }
        
            $this->data = $this->general_model->first('admin', array('account_name' => $_SESSION['account_name'], 'is_deleted' => 0));
            if(sizeof($this->data) == 0) {
                unset($_SESSION['account_name']);
                unset($_SESSION['user_privilege']);
                refreshFunc('board/login');
            }
        }
    }
    
    public function members($page = '', $id = '') {
        if($page == 'registration') {
            $this->data['title'] = 'Account Registration';
            $this->data['members'] = $this->production_model->getAllAN();
            $this->loadPage('registration', $this->data);
        } else if($page == 'password') {
            $this->data['title'] = 'Update Password';
            $this->data['members'] = $this->production_model->getAllMembers();
            $this->loadPage('password_change', $this->data);
        } else if($page == 'wallet') {
            $this->data['title'] = 'Update Wallet';
            $this->data['members'] = $this->production_model->getAllMembers();
            $this->loadPage('wallet_change', $this->data);
        } else if($page == 'genealogy') {
            $this->data['title'] = 'Genealogy';
            
            if($id == '') {
                $member = $this->general_model->get('member', 1);
            } else {
                $member = $this->production_model->getMember($id);
                if(sizeof($member) == 0) {
                    $_SESSION['errmsg'] = 'Upline ID Not Found';
                    $member = $this->general_model->get('member', 1);
                }
            }
            
            $this->data['members'] = $this->production_model->getAllMembers();
            $this->data['member'] = $member;
            $this->data['downlines'] = $this->production_model->getAllDownlines($member['account_name']);
            $this->data['directDownlines'] = $this->production_model->getDirectDownlineCount($member['account_name']);
            $this->loadPage('genealogy', $this->data);
        } else if($page == 'document') {
            $this->data['title'] = 'Docment Approval';
            $this->data['members'] = $this->production_model->getPendingDocument();
            $this->loadPage('document', $this->data);
        }
    }
    
    public function orders($page = '') {
        $this->data['title'] = 'Orders Management';
        
        if($page == 'pending') {
            $this->data['records'] = $this->general_model->find('stock_order', array('is_approved' => 0, 'is_rejected' => 0, 'is_deleted' => 0));
            $this->loadPage('order_pending', $this->data);
        } else if($page == 'approved') {
            $this->data['records'] = $this->general_model->find('stock_order', array('is_approved' => 1, 'is_rejected' => 0, 'is_deleted' => 0));
            $this->loadPage('order_approved', $this->data);
        } else if($page == 'rejected') {
            $this->data['records'] = $this->general_model->find('stock_order', array('is_approved' => 0, 'is_rejected' => 1, 'is_deleted' => 0));
            $this->loadPage('order_rejected', $this->data);
        }
    }
    
    public function withdrawal($page = '') {
        $this->data['title'] = 'Withdrawal Management';
        
        if($page == 'pending') {
            $this->data['records'] = $this->general_model->find('withdrawal_request', array('is_approved' => 0, 'is_rejected' => 0, 'is_deleted' => 0));
            $this->loadPage('withdrawal_pending', $this->data);
        } else if($page == 'approved') {
            $this->data['records'] = $this->general_model->find('withdrawal_request', array('is_approved' => 1, 'is_rejected' => 0, 'is_deleted' => 0));
            $this->loadPage('withdrawal_approved', $this->data);
        } else if($page == 'rejected') {
            $this->data['records'] = $this->general_model->find('withdrawal_request', array('is_approved' => 0, 'is_rejected' => 1, 'is_deleted' => 0));
            $this->loadPage('withdrawal_rejected', $this->data);
        }
    }
    
    public function news() {
        $this->data['title'] = 'News Management';
        $this->data['records'] = $this->general_model->find('news', array('is_deleted' => 0));
        $this->loadPage('news', $this->data);
    }
    
    public function reports($page = '', $param = '') {
        $this->data['title'] = 'Report';
        
        if($page == 'memberSales') {
            $this->data['allMembers'] = $this->production_model->getMembersDetails();
            $data = [];
            foreach($this->data['allMembers'] as $member) {
                $data[$member['account_name']] = array(
                    'ownSales' => $member['own_sales'],
                    'totalSales' => $member['total_sales'],
                    'rank' => getRank($member['rank']),
                    'created_at' => $member['created_at']
                );
            }
            
            $this->data['members'] = $this->production_model->getUplineDetails();
            foreach($this->data['members'] as $key => $value) {
                if($value['sponsor_id'] == '') {
                    unset($this->data['members'][$key]);
                    continue;
                }
                $this->data['members'][$key]['ownSales'] = $data[$value['sponsor_id']]['ownSales'];
                $this->data['members'][$key]['totalSales'] = $data[$value['sponsor_id']]['totalSales'];
                $this->data['members'][$key]['rank'] = $data[$value['sponsor_id']]['rank'];
                $this->data['members'][$key]['created_at'] = $data[$value['sponsor_id']]['created_at'];
            }
            
            $this->loadPage('report_member_sales', $this->data);
        } else if($page == 'ranking') {
            $this->data['members'] = $this->general_model->find('rank_change_history', array('is_deleted' => 0));
            $this->loadPage('report_ranking', $this->data);
        } else if($page == 'directSales') {
            if($param == '') {
                $member = $this->general_model->get('member', 1);
            } else {
                $member = $this->production_model->getMember($param);
                if(sizeof($member) == 0) {
                    $_SESSION['errmsg'] = 'Username Not Found';
                    $member = $this->general_model->get('member', 1);
                }
            }
            
            $this->data['members'] = $this->production_model->getAllMembers();
            $this->data['member'] = $member;
            $this->data['directDownlines'] = $this->production_model->getDirectDownline($member['account_name']);
            
            $this->loadPage('report_direct_sales', $this->data);
        } else if($page == 'commission') {
            $this->data['records'] = $this->general_model->find('wallet_transaction', array('description' => 'payout_commission', 'is_approved' => 1, 'is_deleted' => 0));
            if($param != '') {
                $member = $this->production_model->getMember($param);
                if(sizeof($member) == 0) {
                    $_SESSION['errmsg'] = 'Username Not Found';
                } else {
                    $this->data['member'] = $member;
                    $this->data['totalComm'] = $this->general_model->sum('wallet_transaction', array('account_name' => $member['account_name'], 'description' => 'payout_commission', 'is_approved' => 1, 'is_deleted' => 0), 'amount');
                    $this->data['records'] = $this->general_model->find('wallet_transaction', array('account_name' => $member['account_name'], 'description' => 'payout_commission', 'is_approved' => 1, 'is_deleted' => 0));
                }
            }
            
            $this->data['members'] = $this->production_model->getAllMembers();
            
            $this->loadPage('report_commission', $this->data);
        } else if($page == 'wallet') {
            $this->data['records'] = $this->general_model->find('wallet_transaction', array('is_approved' => 1, 'is_deleted' => 0));
            if($param != '') {
                $member = $this->production_model->getMember($param);
                if(sizeof($member) == 0) {
                    $_SESSION['errmsg'] = 'Username Not Found';
                } else {
                    $this->data['member'] = $member;
                    $this->data['records'] = $this->general_model->find('wallet_transaction', array('account_name' => $member['account_name'], 'is_approved' => 1, 'is_deleted' => 0));
                }
            }
            
            $this->data['members'] = $this->production_model->getAllMembers();
            
            $this->loadPage('report_wallet', $this->data);
        }
    }
    
    public function index() {
        $this->data['title'] = 'Board';
        
        $this->data['totalSales'] = $this->general_model->sum('stock_order', array('is_approved' => 1, 'is_deleted' => 0), 'quantity');
        $this->data['dailySales'] = $this->production_model->getSales();
        
    	$this->loadPage('board', $this->data);
    }
    
    public function login(){
        $this->load->view('adminlogin');
    }
    
    private function loadPage($page = "board", $data = array()) {
        $data['menu'] = $this->load->view('templates/side_nav_admin.php', $data, TRUE);
		$this->load->view('templates/header', $data);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
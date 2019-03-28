<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('general_model');
        $this->load->model('production_model');
    }
    
    public function login() {
        $account_name = trim($this->input->post('account_name'));
        $password = $this->input->post('password');
        
        $member = $this->production_model->getMember($account_name);
        if(sizeof($member) == 0) {
            refreshFunc('panel/login', "Username or password incorrect.");
        }
        
        $maxAttempt = 3;
        $loginAttempt = $this->auth_model->checkLoginAttemptCount($account_name);
        if($loginAttempt >= $maxAttempt) {
            refreshFunc('panel/login', "Your account is locked temporarily, please try again later.");
        }
        
        if(!verify($password, $member['password'])) {
            $this->auth_model->insertLog($member['account_name'], 0);
            $remainingAttempt = $maxAttempt - $loginAttempt - 1;
            
            if($remainingAttempt > 0) {
                refreshFunc('panel/login', "Remaining Attempt: ".$remainingAttempt);
            } else {
                refreshFunc('panel/login', "Your account is locked temporarily, please try again after 30 minutes.");
            }
        }
        
        if($member['is_login_locked'] == 1) {
            refreshFunc('panel/login', "Your account is locked.");
        }
        
        $this->auth_model->insertLog($member['account_name'], 1);
        $_SESSION['account_name'] = $member['account_name'];
        $_SESSION['user_privilege'] = 1;
        
        redirect(base_url().'panel', 'refresh'); 
    }
    
    public function adminLogin() {
        $account_name = trim($this->input->post('account_name'));
        $password = $this->input->post('password');
        
        $admin = $this->general_model->first('admin', array('account_name' => $account_name, 'is_deleted' => 0));
        if(sizeof($admin) == 0) {
            refreshFunc('board/login', "Username or password incorrect.");
        }
        
        if(!verify($password, $admin['password'])) {
            refreshFunc('board/login', "Password Incorrect");
        }
        
        $_SESSION['account_name'] = $admin['account_name'];
        $_SESSION['user_privilege'] = 3;
        
        redirect(base_url().'board', 'refresh'); 
    }
    
    public function logout() {
        $userPrivilege = $_SESSION['user_privilege'];
        
        unset($_SESSION['account_name']);
        unset($_SESSION['user_privilege']);
        
        if($userPrivilege == 1) {
            refreshFunc('panel/login');
        } else {
            refreshFunc('board/login');
        }
    }
}
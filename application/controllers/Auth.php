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
        if($member['is_active'] == 0) {
            refreshFunc('panel/login', "Your account is not activated.");
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
    
    public function activation($token) {
        $activation = $this->general_model->first('activation', array('token' => simplehash($token), 'is_deleted' => 0));
        if(sizeof($activation) == 0) {
            $_SESSION['errmsg'] = 'Sorry, Invalid URL';
            $this->load->view('activation');
            return;
        }
        
        $member = $this->production_model->getMember($activation['account_name']);
        $this->general_model->update('activation', $activation['id'], array('is_reset' => 1));
        $this->general_model->update('member', $member['id'], array('is_active' => 1));
        
        $this->load->view('activation');
    }
    
    public function forgetPassword() {
        $this->load->view('forgetpw');
    }
    
    public function createResetRequest() {
        if($this->input->post('email') == '') {
            refreshFunc('auth/forgetPassword', "Invalid Request.");
        }
        
        $member = $this->general_model->first('member', array('email' => $this->input->post('email'), 'is_deleted' => 0));
        if(sizeof($member) == 0) {
            refreshFunc('auth/forgetPassword', "Email not found.");
        }
        if($member['is_login_locked'] == 1) {
            refreshFunc('auth/forgetPassword', "Your account is locked.");
        }
        if($member['is_active'] == 0) {
            refreshFunc('auth/forgetPassword', "Your account is not activated.");
        }
        
        $code = passwordGen(4);
        $token = passwordGen(6);
        $data = array(
            'created_at' => now(),
            'account_name' => $member['account_name'],
            'token' => simplehash($token),
            'code' => $code
        );
        log_message('debug', $token);
        $this->general_model->create('reset_pw', $data);
        
        $data = array(
            'account_name' => $member['account_name'],
            'email' => $member['email'],
            'token' => $token,
            'code' => $code
        );
        $this->sendResetEmail($data);
        
        $_SESSION['successmsg'] = 'Reset Password Instruction Has Been Sent.';
        redirect(base_url().'auth/forgetPassword', 'refresh');
    }
    
    private function sendResetEmail($data) {
        $this->load->library('email');

        $fromEmail = 'admin@perfects8.com';
        $website = base_url();
        $link = base_url().'auth/resetPassword/'.$data['token'];
        
        $this->email->set_mailtype("html");
        $this->email->from($fromEmail, 'S-8');
        $this->email->to($data['email']);
        $this->email->subject('Reset Account Password');
        
        $html = "<br />Dear $data[account_name],<br>
				<br>
                We got a request to reset your S-8 login password. Please click this <a href='$link'>reset link</a> to proceed your password change. This link will be expired after 1 hour.
                <br />Verification Code: $data[code]
                <br /><br />
                If you ignore this message, your password won't be changed. If you didn't request a password reset, please let us know.
                <br /><br /><br />
                Sincerely, <br />
                S-8 Community<br />
                <br /><br /><br />
                Email: $fromEmail<br />
                Website: $website
                ";
        
        $this->email->message($html);
        
        if ($this->email->send()) {
	    	return true;
	    } else {
	    	log_message('debug', $this->email->print_debugger());
			return false;
	    }
    }
    
    public function resetPassword($token) {
        $this->data['is_valid'] = false;
        $request = $this->general_model->first('reset_pw', array('token' => simplehash($token), 'is_reset' => 0, 'is_deleted' => 0));
        if(sizeof($request) == 0) {
            $_SESSION['errmsg'] = 'Sorry, invalid URL';
            $this->load->view('resetpw', $this->data);
            return;
        }
        if(strtotime(now()) > strtotime($request['created_at']) + 3600) {
            $_SESSION['errmsg'] = 'Sorry, your link is expired';
            $this->load->view('resetpw', $this->data);
            return;
        } 
        
        $this->data['token'] = $token;
        $this->data['is_valid'] = true;
        $this->load->view('resetpw', $this->data);
    }
    
    public function proceedResetRequest() {
        if($this->input->post('token') == '' || $this->input->post('code') == '' ||  $this->input->post('password') == '' || $this->input->post('password2') == '') {
            $_SESSION['errmsg'] = 'Invalid request';
            redirect($this->input->server('HTTP_REFERER'), 'refresh');
        }
        
        $request = $this->general_model->first('reset_pw', array('token' => simplehash($this->input->post('token')), 'is_reset' => 0, 'is_deleted' => 0));
        if(sizeof($request) == 0) {
            $_SESSION['errmsg'] = 'Sorry, invalid URL';
            redirect($this->input->server('HTTP_REFERER'), 'refresh');
        }
        if(strtotime(now()) > strtotime($request['created_at']) + 3600) {
            $_SESSION['errmsg'] = 'Sorry, your link is expired';
            redirect($this->input->server('HTTP_REFERER'), 'refresh');
        }
        if($this->input->post('code') != $request['code']) {
            $_SESSION['errmsg'] = 'Verification code incorrect';
            redirect($this->input->server('HTTP_REFERER'), 'refresh');
        }
        if(strlen($this->input->post('password')) < 6) {
            $_SESSION['errmsg'] = 'Password must be at least 6 characters';
            redirect($this->input->server('HTTP_REFERER'), 'refresh');
        }
        if($this->input->post('password') != $this->input->post('password2')) {
            $_SESSION['errmsg'] = 'Please make sure password is repeated correctly';
            redirect($this->input->server('HTTP_REFERER'), 'refresh');
        }
        
        $member = $this->production_model->getMember($request['account_name']);
        if(sizeof($member) == 0) {
            $_SESSION['errmsg'] = 'Member not found';
            redirect($this->input->server('HTTP_REFERER'), 'refresh');
        }
        
        $this->general_model->update('reset_pw', $request['id'], array('is_reset' => 1));
        $this->general_model->update('member', $member['id'], array('password' => hashPw($this->input->post('password'))));
        
        $_SESSION['successmsg'] = 'Password Successfully Reset';
        redirect(base_url().'panel', 'refresh');
    }
}
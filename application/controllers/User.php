<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('general_model');
        $this->load->model('production_model');
    }
    
    public function updatePersonalInfo() {
        $this->checkPrivilege(1);
        
        $member = $this->production_model->getMember(AN());
        if($member['ic_status'] == 1) {
            $this->fail("Modification Is Not Allowed After Identity Verification");
        }
        if($member['bank_account_name'] != '') {
            if(trim(strtolower($this->input->post('fname'))) != strtolower($member['bank_account_name'])) {
                $this->fail("Bank Account Holder Must Match With Account Full Name");
            }
        }
        if($this->general_model->count('member', array('account_name <>' => AN(), 'ic' => $this->input->post('ic'), 'is_deleted' => 0)) > 0) {
            $this->fail("Same Identity Card Number Already Exists In System");
        }
        
        $uploadedFile = $member['ic_file_path'];
        if(!empty($_FILES["ic_file_path"]["type"])){
            $uploadedFile = $this->uploadFile("ic_file_path", "documents");
        }
        
        $this->general_model->update('member', $member['id'], array(
            'fname' => $this->input->post('fname'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'ic' => $this->input->post('ic'),
            'ic_file_path' => $uploadedFile,
            'ic_uploaded_at' => now(),
            'ic_status' => 0,
            'ic_remark' => ''
        ));
        
        $this->success("Personal Information Updated Successfully");
    }
    
    public function updateBankInfo() {
        $this->checkPrivilege(1);
        
        $member = $this->production_model->getMember(AN());
        if($member['bank_status'] == 1) {
            $this->fail("Modification Is Not Allowed After Bank Verification");
        }
        if(trim(strtolower($this->input->post('bank_account_name'))) != strtolower($member['fname'])) {
            $this->fail("Bank Account Holder Must Match With Account Full Name");
        }
        
        $uploadedFile = $member['bank_file_path'];
        if(!empty($_FILES["bank_file_path"]["type"])){
            $uploadedFile = $this->uploadFile("bank_file_path", "banks");
        }
        
        $this->general_model->update('member', $member['id'], array(
            'bank_account_name' => $this->input->post('bank_account_name'),
            'bank_account_number' => $this->input->post('bank_account_number'),
            'bank_name' => $this->input->post('bank_name'),
            'branch_address' => $this->input->post('branch_address'),
            'bank_swift_code' => $this->input->post('bank_swift_code'),
            'bank_file_path' => $uploadedFile,
            'bank_uploaded_at' => now(),
            'bank_status' => 0,
            'bank_remark' => ''
        ));
        
        $this->success("Bank Information Updated Successfully");
    }
    
    public function updateAddressInfo() {
        $this->checkPrivilege(1);
        
        $member = $this->production_model->getMember(AN());
        $this->general_model->update('member', $member['id'], array(
            'addressline1' => $this->input->post('addressline1'),
            'addressline2' => $this->input->post('addressline2'),
            'city' => $this->input->post('city'),
            'postcode' => $this->input->post('postcode'),
            'state' => $this->input->post('state'),
            'state' => $this->input->post('country')
        ));
        
        $this->success("Address Information Updated Successfully");
    }
    
    public function updatePassword() {
        $this->checkPrivilege(1);
        
        $member = $this->production_model->getMember(AN());
        if(!verify($this->input->post('curr_password'), $member['password'])) {
            $this->fail("Current Password Not Match");
        }
        
        $this->general_model->update('member', $member['id'], array('password' => hashPw($this->input->post('password'))));
        
        $this->success("Password Updated Successfully");
    }
    
    public function signUp() {
        $this->checkPrivilege(1);
        
        $account_name = trim(strtolower($this->input->post('account_name')));
        if($this->general_model->count('member', array('account_name' => $account_name, 'is_deleted' => 0)) > 0) {
            $this->fail("Username Has Been Used By Another User");
        }
        if($this->general_model->count('member', array('ic' => $this->input->post('ic'), 'is_deleted' => 0)) > 0) {
            $this->fail("Same Identity Card Number Already Exists In System");
        }
        
        if($_SESSION['user_privilege'] == 1) {
            $member = $this->production_model->getMember(AN());
            if($member['ic_status'] != 1) {
                $this->fail("New Account Registration Is Only Available After Identity Verification");
            }
        } else {
            $sponsor_id = trim(strtolower($this->input->post('sponsor_id')));
            $member = $this->production_model->getMember($sponsor_id);
            if(sizeof($member) == 0) {
                $this->fail("Invalid Sponsor ID");
            }
            if($member['ic_status'] != 1) {
                $this->fail("Sponsor ID Need To Be Verified To Register New Downline");
            }
        }
        
        $_POST['account_name'] = $account_name;
        $_POST['sponsor_id'] = $member['account_name'];
        $_POST['sponsor_lvl'] = $member['sponsor_lvl'] + 1;
        $_POST['sponsor_upline_ids'] = $member['sponsor_upline_ids'] == '' ? $member['account_name'].',' : $member['account_name'].','.$sponsor_member['sponsor_upline_ids'];
        
        $this->production_model->createMember($this->input->post());
        
        $this->success("New Account Registration Success");
    }
    
    public function checkAccountName() {
        if(sizeof($this->production_model->getMember($this->input->post('account_name'))) > 0 || strlen($this->input->post('account_name')) < 4 || strlen($this->input->post('account_name')) > 10) {
            $this->fail("");
        } else {
            $this->success("");
        }
    }
    
    public function adminUpdatePassword() {
        $this->checkPrivilege(3);
        
        $account_name = trim(strtolower($this->input->post('account_name')));
        $member = $this->production_model->getMember($account_name);
        if(sizeof($member) == 0) {
            $this->fail("Member Not Found");
        }
        
        $this->general_model->update('member', $member['id'], array('password' => hashPw($this->input->post('password'))));
        $this->general_model->create('password_change_history', array(
            'created_at' => now(),
            'account_name' => $account_name,
            'remark' => $this->input->post('remark'),
            'created_by' => AN()
        ));
        
        $this->success("Member's Password Updated Successfully");
    }
    
    public function updateMemberDocument() {
        $this->checkPrivilege(3);
        
        $member = $this->general_model->get('member', $this->input->post('id'));
        if(sizeof($member) == 0) {
            $this->fail("Invalid Action");
        }
        
        $document_type = $this->input->post('document_type');
        $action = $this->input->post('action');
        if($document_type != 'ic' && $document_type != 'bank') {
            $this->fail("Invalid Action");
        }
        if($action != 'approve' && $action != 'reject') {
            $this->fail("Invalid Action");
        }
        
        if($action == 'approve') {
            $status = 1;
        } else if($action == 'reject') {
            $status = 2;
        }
        
        $this->general_model->update('member', $member['id'], array(
            $document_type.'_status' => $status,
            $document_type.'_updated_at' => now(),
            $document_type.'_remark' => $this->input->post('remark')
        ));
        
        $this->success("Document Status Updated");
    }
    
}
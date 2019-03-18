<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }

    public function login(){
        $this->load->view('login');
    }

    public function resetpw(){
        $this->load->view('resetpw');
    }

    public function signup(){
        $this->load->view('signup');
    }

    public function index() {
    	$this->loadPage('dashboard');
    }

    private function loadPage($page = "dashboard", $data = array()) {
		$this->load->view('templates/header', $data);
		$this->load->view('member/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
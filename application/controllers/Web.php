<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('general_model');
        $this->load->model('web_model');
    }

	public function index()
	{
		$data['banners'] = $this->web_model->getBanners();
		$this->loadPage('index', $data);
	}

	public function about()
	{
		$this->loadPage('about');
	}

	public function productCert()
	{
		$this->loadPage('product-cert');
	}

	public function ingredients()
	{
		$this->loadPage('ingredients');
	}

	public function suitable()
	{
		$this->loadPage('suitable');
	}

	public function faq()
	{
		$this->loadPage('faq');
	}

	public function contact()
	{
		$this->loadPage('contact');
	}

	public function join()
	{
		$this->loadPage('join');
	}

	public function enquiry()
	{
		$this->general_model->create('web_enquiry', array(
            'fname' => $this->input->post('fname'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
			'created_at' => date('Y-m-d H:i:s'),
        ));
        
        $this->success(lang("contact_success"));
	}

	private function loadPage($page = "index", $data = array())
	{
		$data['page'] = $page;
		$this->load->view('web/templates/header.php', $data);
		$this->load->view('web/'.$page.'.php', $data);
		$this->load->view('web/templates/footer.php');
	}
}

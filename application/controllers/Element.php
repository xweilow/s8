<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Element extends MY_Controller {
	public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->loadPage('index');
    }

    public function alerts() {
        $data['js_to_load'] = "alert-data.js";
        $this->loadPage('alerts', $data);
    }

    public function accordion() {
        $this->loadPage('accordion');
    }

    public function buttons() {
        $this->loadPage('buttons');
    }

    public function cards() {
        $this->loadPage('cards');
    } 

    public function chat() {
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/chartjs/Chart.bundle.min.js"></script><script src="'.base_url().'assets/js/chartjs-util.js"></script><script src="'.base_url().'assets/js/chartjs-data.js"></script>';
        $this->loadPage('chat', $data);
    }

    public function chart() {
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/chartjs/Chart.bundle.min.js"></script><script src="'.base_url().'assets/js/chartjs-util.js"></script><script src="'.base_url().'assets/js/chartjs-data.js"></script>';
        $this->loadPage('chartjs', $data);
    }

    public function dashboard() {
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/apexchart/apexcharts.min.js"></script><script src="'.base_url().'assets/js/dashboard-02.js"></script>';
        $this->loadPage('page-dashboard', $data);
    }

    public function editor() {
        $data['additional_css'] = '<link rel="stylesheet" href="'.base_url().'assets/vendor/summernote/summernote-bs4.css"/>';
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/summernote/summernote-bs4.min.js"></script><script src="'.base_url().'assets/js/summernote-data.js"></script>';
        $this->loadPage('editor', $data);
    }

    public function icons() {
        $data['js_to_load'] = "icons-data.js";
        $this->loadPage('icons', $data);
    }

    public function jstree() {
        $data['additional_css'] = '<link rel="stylesheet" href="'.base_url().'assets/vendor/jstree/dist/themes/default/style.min.css">';
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/jstree/dist/jstree.min.js"></script><script src="'.base_url().'assets/js/jstree-data.js"></script>';
        $this->loadPage('jstree', $data);
    }

    public function login() {
        $this->load->view('element/page-login');
    }

    public function modals() {
        $data['js_to_load'] = "modal-data.js";
        $this->loadPage('modals', $data);
    }

    public function notification() {
        $data['js_to_load'] = "bootstrap-notify-data.js";
        $this->loadPage('notification', $data);
    }

    public function page404() {
        $this->load->view('element/page-404');
    }

    public function resetpw() {
        $this->load->view('element/page-resetpw');
    }

    public function status() {
        $this->load->view('element/page-status');
    }

    public function setting() {
        $data['js_to_load'] = 'setting-data.js';
        $this->loadPage('page-setting', $data);
    }

    public function signup() {
        $this->load->view('element/page-signup');
    }

    public function spinner() {
        $this->loadPage('spinner');
    }

    public function tabs() {
        $this->loadPage('tabs');
    }

    public function table1() {
        $this->loadPage('table1');
    }

    public function table2() {
        $data['additional_css'] = '<link rel="stylesheet" href="'.base_url().'assets/vendor/DataTables/datatables.min.css"><link rel="stylesheet" href="'.base_url().'assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">';
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/DataTables/datatables.min.js"></script><script src="'.base_url().'assets/js/datatable-data.js"></script>';
        $this->loadPage('table2', $data);
    }

    public function invoices() {
        $this->loadPage('invoices');
    }

    public function invoice() {
        $data['js_to_load'] = 'invoice-print.js';
        $this->loadPage('invoice', $data);
    }

    public function widget1() {
        $data['additional_js'] = "<script src='".base_url()."assets/vendor/apexchart/apexcharts.min.js'></script><script src='".base_url()."assets/js/widget-data.js'></script>";
        $this->loadPage('widget1', $data);
    }

    public function widget2() {
        $data['additional_css'] = '<link rel="stylesheet" href="'.base_url().'assets/vendor/trumbowyg/ui/trumbowyg.min.css">';
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/apexchart/apexcharts.min.js"></script><script src="'.base_url().'assets/vendor/trumbowyg/trumbowyg.min.js"></script><script src="'.base_url().'assets/js/widget-data.js"></script>';
        $this->loadPage('widget2', $data);
    }

    public function form1() {
        $this->loadPage('form1');
    }

    public function form2() {
        $this->loadPage('form2');
    }

    public function form3() {
        $data['additional_css'] = '<link rel="stylesheet" href="'.base_url().'assets/vendor/datedropper/datedropper.min.css"><link rel="stylesheet" href="'.base_url().'assets/vendor/dropzone/dropzone.css">';
        $data['additional_js'] = '<script src="'.base_url().'assets/vendor/timepicker/bootstrap-timepicker.min.js"></script><script src="'.base_url().'assets/vendor/datedropper/datedropper.min.js"></script><script src="'.base_url().'assets/vendor/dropzone/dropzone.js"></script><script src="'.base_url().'assets/vendor/jquery.mask/jquery.mask.min.js"></script><script src="'.base_url().'assets/js/form-data.js"></script>';
        $this->loadPage('form3', $data);
    }

    

    private function loadPage($page = "alerts", $data = array()) {
        $data['menu'] = $this->load->view('templates/side_nav_element.php', $data, TRUE);
		$this->load->view('templates/header', $data);
		$this->load->view('element/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
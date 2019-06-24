<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $accName = '';
        if(isset($_SESSION['account_name'])) {
            $accName = $_SESSION['account_name'];
        }

        if(!$this->session->has_userdata('lang')){
			$_SESSION['lang'] = 'english';
		} else if($_SESSION['lang'] != 'english' && $_SESSION['lang'] != 'simplified-chinese'){
			$_SESSION['lang'] = 'english';
        }
        
        if($this->session->has_userdata('lang')){
			$this->lang->load('web', $this->session->userdata('lang'));
		}
        
        log_message('debug', 'URI: '.$_SERVER['REQUEST_URI'].' by '.$accName.' P: '.json_encode($this->input->post(),JSON_UNESCAPED_UNICODE));
        $this->load->helper('LLC');
        $this->load->helper('language');
    }
    
    public function getRealIpAddr(){
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
	    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    } else {
            $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}
    
    public function success($data) {
        echo json_encode(array('status' => 1, 'data' => $data), JSON_UNESCAPED_UNICODE);
        die();
    }
    
    public function fail($data) {
        echo json_encode(array('status' => -1, 'data' => $data), JSON_UNESCAPED_UNICODE);
        die();
    }
    
    public function checkPrivilege($privilege) {
        if(isset($_SESSION['user_privilege'])) {
            if($_SESSION['user_privilege'] < $privilege) {
                $this->fail("Not Authorized For This Action");
            }
        } else {
            $this->fail("Not Authorized For This Action");
        }
    }
    
    public function uploadFile($uploadFile, $path) {
        if (!is_dir("./uploads")){
			mkdir("./uploads");
		}
		if (!is_dir("./uploads/".$path)){
			mkdir("./uploads/".$path);
		}
        
        $fileName = time().'_'.$_FILES[$uploadFile]['name'];
        $valid_extensions = array("jpeg", "jpg", "png", "pdf");
        $temporary = explode(".", $_FILES[$uploadFile]["name"]);
        $file_extension = end($temporary);
        if((($_FILES[$uploadFile]["type"] == "image/png") || ($_FILES[$uploadFile]["type"] == "image/jpg") || ($_FILES[$uploadFile]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            if(filesize($_FILES[$uploadFile]['tmp_name']) > 20000000) {
                $this->fail("Maximum File Size is 20000KB");
            }

            $sourcePath = $_FILES[$uploadFile]['tmp_name'];
            $targetPath = "uploads/".$path.'/'.$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                return $targetPath;
            } else {
                $this->fail("Error Uploading File");
            }
        } else {
            $this->fail("Invalid File Format");
        }
    }
    
    public function getRank($rank) {
        if($rank == 0) {
            return "Bronze";
        } else if($rank == 1) {
            return "Silver";
        } else if($rank == 2) {
            return "Gold";
        } else if($rank == 3) {
            return "Platinum";
        } else if($rank == 4) {
            return "Diamond";
        } else if($rank == 5) {
            return "Challenger";
        }
    }
}
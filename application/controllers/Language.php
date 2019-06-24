<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function set($language = 'english') {
        if ($language == 'english' || $language == 'simplified-chinese') {
            $this->session->set_userdata('lang', $language);
        }

        redirect($this->input->server('HTTP_REFERER'), 'refresh');
    }

    public function setlang($language = 'english') {
        if ($language == 'english') {
            $this->session->set_userdata('lang', $language);
        } else if ($language == 'simplified-chinese') {
            $this->session->set_userdata('lang', $language);
        }

        redirect($this->input->server('HTTP_REFERER'), 'refresh');
    }

}

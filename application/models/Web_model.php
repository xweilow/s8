<?php
class Web_model extends MY_Model {

    public function __construct() {
		parent::__construct();
		$this->load->helper('date');
    }

    public function getBanners() {
        $q = "SELECT * FROM web_banner WHERE is_visible = 1 AND is_deleted = 0 AND language = ? ORDER BY sort , created_at DESC";
        return $this->db->query($q, $_SESSION['lang'])->result_array();       
    }
}
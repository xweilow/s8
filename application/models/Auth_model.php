<?php
class Auth_model extends MY_Model {

    public function __construct() {
		parent::__construct();
    }
    
    public function checkLoginAttemptCount($account_name) {
        $q = "SELECT count(id) as count FROM login_log WHERE is_success = 0 AND account_name = ? AND type = 'member' AND created_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)";
        $result = $this->db->query($q, array($account_name))->row();
        
        return $result->count;
    }
    
    public function insertLog($account_name, $isSuccess) {
        $this->db->insert('login_log', array(
            'created_at' => now(),
            'account_name' => $account_name,
            'ip_address' => getRealIpAddr(),
            'is_success' => $isSuccess
        ));
        
        return true;
    }
}
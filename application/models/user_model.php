<?php

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = "users";
    }

	function _logged() {

		$uid = $this->session->userdata('uid');
		$email = $this->session->userdata('email');
		$hash = $this->session->userdata('hash');
		if($uid != false && $hash != false) {
			$sql = "SELECT password FROM users WHERE id = ?";
			$query = $this->db->query($sql, array($uid)); 
			$row = $query->row();
			if($hash == trim($row->password) ){
				return true;
			}
		}
		else {
			if(isset($_POST['email'], $_POST['password'])) {
				$sql = "SELECT id, email,  password FROM users WHERE email = ?";
				$query = $this->db->query($sql, array($_POST['email'])); 
				$row = $query->row();

				$hash = hash('sha256', $this->db->escape_str($_POST['email']).$this->db->escape_str($_POST['password']));
				if($hash == $row->password){
					$user_data = array(
						'uid'   => $row->id,
						'email' => $row->email,
						'hash'  => $hash
						);
					$uid = $this->session->set_userdata($user_data);
					return true;
				}
			}
		}
		return false;
	}
    function get_id($email) {
    	$sql  = "select id from users where email = ? ;";
    	if($result = $this->db->query($sql, array($email))) {
    		$row = $result->row();
    		return $row->id;
    	}

    	return false;	

    }

}
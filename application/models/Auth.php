<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Auth extends CI_Model {
	

	public function getUser($username, $password){
		$hasil = $this->db->query("select * from tb_user where username = '$username' and password = '$password'");
    	if($hasil->num_rows() > 0)
    	{
    		return true;
    	}
    	else{
    		return false;
    	}
    }
		/*
		$this->db->select('username, password');
		$this->db->from($this->table);
		if (!empty($username)) {
			$this->db->where('USERNAME', $username);
		}
		if (!empty($password)) {
			$this->db->where('PASSWORD', $password);
		}
		$result = $this->db->get();
		if ($result->num_rows() == 1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
		*/
}
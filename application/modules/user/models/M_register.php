<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/***************************************************************************************
NAME        : Class Product Model
PURPOSE     : functions for product list queries
REVISION    : -
***************************************************************************************/

Class M_register extends CI_Model {
    
    function getKecamatan() {
        $this->db->select('*');
        $this->db->from('tb_kecamatan');
        $hasil = $this->db->get();
        return $hasil->result();
    }

    function register($firstname,$lastname,$username,$email,$password){
    	$data = array(
    		'firstname' => $firstname,
    		'lastname' => $lastname,
    		'username' => $username,
    		'email' => $email,
    		'password' => $password,
    		);
    	$this->db->insert('tb_user',$data);
    }
}
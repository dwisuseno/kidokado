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
}
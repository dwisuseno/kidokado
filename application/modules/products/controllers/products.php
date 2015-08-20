<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index(){
		$this->load->view('halaman_produk');
	}

	
}
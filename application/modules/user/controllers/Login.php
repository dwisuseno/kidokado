<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user/auth');
		$this->load->helper("html");
     	$this->load->helper("form");
     	$this->load->helper("text");
	}
	public function index(){
		$this->do_auth();
	}

	public function do_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		if($this->auth->getUser($username, $password) == true){
			$newdata = array(
				'username'  => $username,
				'password'  => $password,
				'logged_in' => true
			);
			$this->session->set_userdata($newdata);
			redirect('product');
		}
		else
		{
			redirect('product');
		}
	}

	public function do_logout(){
		$this->session->sess_destroy();
		redirect('product');
	}
}
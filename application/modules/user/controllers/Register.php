<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->session;
		$this->load->model('auth');
        $this->load->model(array('M_register'));
        //$this->load->library('session');
	}

	public function index(){
		$data['navActive'] = 'Register';
		$data['content'] = 'user/v_register';
		$data['title'] = "Register";
		$data['kecamatan'] = $this->M_register->getKecamatan();
		$this->load->view('base/index', $data);
	}

	public function registering(){
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->M_register->register($firstname,$lastname,$username,$email,$password);
		redirect('product');
	}
}
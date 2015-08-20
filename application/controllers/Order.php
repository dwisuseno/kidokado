<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('product_model'));
    }
    
	public function index()
	{
        $data['navActive'] = "product"; //setting active navigation item
        $data['content'] = 'order_view'; //main content view
        
		$this->load->view('base/index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
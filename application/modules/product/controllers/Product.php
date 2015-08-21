<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('product_model'));
        $this->load->model('auth');
        $this->load->library('session');
    }
    
	public function index()
	{
        
        $data['navActive'] = 'product'; //setting active navigation item
        $data['content'] = 'product_view'; //main content view
        $data['title'] = 'Kidokado.com | Products';
        $data['items'] = $this->product_model->getItem(1, null, 0, 0)->result();
        
		$this->load->view('base/index', $data);
	}
    
    public function page_product($id) {
    
    }
    
    public function page_category($id) {
        
    }
    
    public function page_item($id) {
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	//	$this->load->model('home_model');
		$this->load->library('pagination');
	}
	


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$data['title']='Welcome to gemstone.';
		$data['meta_description']='Wecome to Gemstones';
		$data['meta_keywords']='gemstones,ruby,sphirate';
		$data['page']='home';
	//	$data['products']=$this->home_model->get_featured_products(1);//featured products
		//echo "<pre>";print_r($data['products']);
	//	$data['categories']= $this->home_model->get_categories(8);  // limit
		$this->load->view('template',$data);
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
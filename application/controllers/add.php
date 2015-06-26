<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

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

  var $data;
  
	public function index()
	{
	$this->load->helper('url');
		if($this->input->post('sub')!=null)
		{
		  $this->load->model('Product');
		  $id=$this->Product->add_product();
			
			redirect('index.php/shop/index/'.$id);
			
			
		}
		$this->load->helper('url');
		$this->load->view('add');
		

	}

	public function add_product()
	{
		echo $this->input->post('lastname');
	}
	

}

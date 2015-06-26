<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
  

		public function show($userId = 0)
	{

		$userId = (int)$userId;
		$this->load->library("UserFactory");
		$data = array(
			"users" => $this->userfactory->getUser($userId));
		$this->load->view("show_users", $data);
		}
		//$this->load->helper('url');
		//$this->load->view('shop');
	


	public function index()
	{
				echo 'This is the index!';

		//echo $this->uri->segment(3);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('welcome');

		//$this->load->view('home');
	}

		//public function shop()
	//{
		//$this->load->helper('url');
		//$this->load->view('shop');
	//}

		//public function profil()
		//{
		//	$this->load->helper('url');
			//$this->load->view('profil');
		//}


	//	public function login()
	//{
	//	$this->load->helper('url');
	//	$this->load->view('login');
	//}


		public function registration()
	{
		$this->load->helper('url');
		$this->load->view('registration');
	}

		//public function add()
	//{
		//$this->load->helper('url');
		//$this->load->view('add');
	//}


	public function test()
	{
				echo 'Test';

		//echo $this->uri->segment(3);
	}
}

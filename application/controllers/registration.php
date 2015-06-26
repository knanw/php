<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {



  var $data;
  
	public function index()
	{
		$this->load->helper('url');
		if($this->input->post('register-submit'))
		{
			$this->load->model('registrations');
			$this->registrations->add_user();
			//echo $this->input->post('lastname');
			//echo $this->input->post('firstname');
					//$this->load->view('registration');
			//exit;
		}
		$this->load->view('registration');

	}

	public function register_user()
	{
		echo $this->input->post('firstname');
	}


}
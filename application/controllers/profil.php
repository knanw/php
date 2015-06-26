<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
		if(!$this->session->userdata('session_id'))
		{
			redirect('index.php/login/index');
		}
		else
		{
			//$this->load->view('add');
			echo $this->session->userdata('session_id');
			//echo $data;
			$this->load->helper('url');
			$this->load->view('profil');
			//exit;
		}
		$this->load->helper('url');
		//$this->load->view('profil');

	}


}

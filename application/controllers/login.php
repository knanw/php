<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

		if($this->input->get('id'))
		{
			echo "<div class='message'>Your account has been created !</div>";
		}
		$this->load->helper('url');
		
		if($this->input->post('login-submit'))
		{
			$this->load->model('registrations');
			$answer=$this->registrations->login();
			if($answer!="unsuccessful")
			{
				$this->session->set_userdata('session_id',$answer);

				if($this->session->userdata('session_id'))
				{
					redirect('index.php/profil/index');  // we have to redirect to profile page because he is logged in
				}
			}
		}

		$this->load->view('login');

	}


}

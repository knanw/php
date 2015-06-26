<?php

/**
* Includes the user_model class as well as the required sub-classes
*@oackage codeingiter.application.models
*/

/**
* User_Model extends codeigniters base CI_Model to inherit all codeigniter magic!
* @author Wolfram Knan
*@package codeigniter.application.model
*/

class Registrations extends CI_Model
{
	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db=$this->load->database('default',true);
	}

	
	function add_user()
	{

			$this->load->library('form_validation');

		     $f = $this->input->post('firstname');
			 $l = $this->input->post('lastname');
			 $b = $this->input->post('birthdate');
			 $g = $this->input->post('gender');
			 $e = $this->input->post('email');
			$a = $this->input->post('address');
			$ci = $this->input->post('city');
			$z = $this->input->post('zip');
			$s = $this->input->post('state');
			$co = $this->input->post('country');
			$u = $this->input->post('username');
			$p = $this->input->post('password');

		$this->form_validation->set_rules('username', 'uname', 'required');
		$this->form_validation->set_rules('password', 'pword', 'required');
		$this->form_validation->set_rules('firstname', 'fname', 'required');
		$this->form_validation->set_rules('lastname', 'lname', 'required');

 		if($this->form_validation->run() == FALSE) {
		echo "<script type='text/javascript'>
		alert('Please Enter correct values format. Firstname, lastname, username and password are required.');
		</script>";
		//$this->load->view('registration');

				}else{
			$rs=array(
				'username'=>$u,
				'password'=>md5($p),
				'fname'=>$f,
				'lname'=>$l,
				'bdate'=>$b,
				'gender'=>$g,
				'email'=>$e,
				'address'=>$a,
				'city'=>$ci,
				'zip'=>$z,
				'state'=>$s,
				'country'=>$co
				);

			$this->db->insert("user",$rs);
		 $id=$this->db->insert_id();

		 redirect('index.php/login/index?id='.$id);
		 }
	}

	public function login()
	{

		     $us = $this->input->post('username');
			 $pas = md5($this->input->post('password'));

			 $this->db->select('*');
			 $this->db->from('user');
			 $this->db->where('username',$us);
			 $this->db->where('password',$pas);

			 $rs=$this->db->get();
			 if($rs->num_rows()>0)
			 {
			 	//print_r($rs->row_array());   to display data
			 	$data=$rs->row_array();

			 	return $data['id'];
			 }
			 else
			 {
			 	return "unsuccessful";
			 	
			 }

	}
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  var $data;
  
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome');
	}

	public function search(){
		data['query'] = $this->Books_model->get_search();
		$this->load->view('books', $data);
	}
	
function get_search() {
  $match = $this->input->post(‘search’);
  $this->db->like(‘bookname’,$match);
  $this->db->or_like(‘author’,$match);
  $this->db->or_like(‘characters’,$match);
  $this->db->or_like(‘synopsis’,$match);
  $query = $this->db->get(‘books’);
  return $query->result();
}
	

	public function test()
	{
				echo 'Test';
	}
}

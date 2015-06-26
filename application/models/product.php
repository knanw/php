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

class Product extends CI_Model
{
	/* A private variable to represent each column in the database */
	
	function __construct()
	{
		parent::__construct();
	}

	/**
			*ID
	**/

	/**
	* @return int [$this->_id] Return this objects ID
	*/
	
	function add_product()
	{
	  		 $name=$this->input->post('pname');
			 $cat=$this->input->post('category');
			 $pri=$this->input->post('price');
			 $prod=$this->input->post('product_url');
			 $pic=$this->input->post('picture_url');
			 
			 $rs=array(
				'pname'=>$name,
				'price'=>$pri,
				'category'=>$cat,
				'url'=>$prod,
				'pictureurl'=>$pic
				
				);

			$this->db->insert("product",$rs);
			$id=-1;
		 $id=$this->db->insert_id();
		 
		 return $id;
	}
	
	function fetch_products()
	{
		$query = $this->db->get('product');
		$data=array();
		$counter=0;
		foreach ($query->result() as $row)
		{
  			  $data[$counter][0]= $row->pname;
			  $data[$counter][1]= $row->price;
			  $data[$counter][2]= $row->category;
			  $data[$counter][3]= $row->url;
			  $data[$counter][4]= $row->pictureurl;
			  $counter++;
		}
		return $data;
	}

}

?>
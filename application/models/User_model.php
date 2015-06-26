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

class User_model extends CI_Model
{
	/* A private variable to represent each column in the database */
	private $_id;
	private $_username;
	private $_password;

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
	public function getId()
	{
		return $this->_id;
	}


	/**
	* @return int [$this->_id] Return this objects ID
	*/
	public function setId($value)
	{
		return $this->_id = $value;
	}

	/**
	* USERNAME
	**/

		/**
	* @return string [$this->_username] Return this objects username
	**/
	public function getUsername()
	{
		return $this->_username;
	}

	/**
	* @param string String to set this objects username to 
	**/
	public function setUsername($value)
	{
		$this->_username = $value;
	}

		/**
	* PASSWORD
	**/

		/**
	* @return string [$this->_password] Return this objects password
	**/
	public function getPassword()
	{
		return $this->_password;
	}

	/**
	* @param string String to set this objects password to 
	**/
	public function setPassword($value)
	{
		$this->_password = $value;
	}

	/**
	* Commit method, this will comment the entire object to the database
	**/

	public function commit()
	{
		$data = array(
			'username' => $this->_username,
			'password' => $this->_password
			);
		if($this->_id > 0 ){
			//We have an ID so we need to update this object because it is not new
			if($this->db->update("user", $data, array("id" => $this->_id)))
			{
				return true;
			}else{
				if($this->db->insert("user", $data)){
					//Now we can get the ID and update the newly created object
					$this->_id = $this->db->insert_id();
					return true;
				}
			}
			return false;
		}
	}

}

?>
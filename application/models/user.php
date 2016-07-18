<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			
		}

		public function login($username, $password)
		{
			$this -> db -> select('id_admin, username, password');
		   	$this -> db -> from('tb_admin');
		   	$this -> db -> where('username', $username);
		   	$this -> db -> where('password', MD5($password));
		   	$this -> db -> limit(1);

		   	$query = $this -> db -> get();
	 
		   	if($query -> num_rows() == 1)
		   	{
		    	return $query->result();
		   	}
		   	else
		   	{
		     	return false;
		   	}
		}
	}

?>
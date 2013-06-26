<?php

class User_model extends CI_Model
{
	public function get_user($user)
	{
		// var_dump($user);
		//this are the items by default
		// return $this->db->where('email', $user['email'])
		// 			->where('password', $user['password'])
		// 			->get("users")
		// 			->row();
		$sql = "SELECT *
						 FROM users
						 WHERE email = '{$user['email']}'
						 AND password = '{$user['password']}'";
		// die($sql);
		$query = $this->db->query($sql);
		$user_info = $query->row();
		return $user_info;
	}
	public function register_user($user)
	{
		return $this->db->insert("users", $user);
	
	}
}


?>
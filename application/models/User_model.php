<?php

class User_model extends CI_Model
{
	public function get_user($user)
	{
		$this->load->library('encrypt');

		// var_dump($user);
		//this are the items by default
		// return $this->db->where('email', $user['email'])
		// 			->where('password', $user['password'])
		// 			->get("users")
		// 			->row();
		$sql = "SELECT *
						 FROM users
						 WHERE email = '{$user['email']}'";
		// die($sql);
		$query = $this->db->query($sql);
		$user_info = $query->row();
		if(count($user_info)>0)
		{
			$password = $this->encrypt->decode($user_info->password);	
			if($user['password']==$password)
			{
				return $user_info;	
			}
			else
			{
			return ('error');
			}
		}
	// !above is encrypting our user password	
		else{
			return ('error');
		}
	}
	public function register_user($user)
	{
		return $this->db->insert("users", $user);
	
	}
}


?>
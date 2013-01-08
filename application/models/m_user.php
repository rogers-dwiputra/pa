<?php
Class M_user extends CI_Model
{
	public function login_admin($username,$password)
	{
		$query = $this->db->get_where('user', array('username' => $username, 'password' => md5($password)));
		if($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
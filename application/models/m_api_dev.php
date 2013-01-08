<?php
Class M_api_dev extends CI_Model
{
	public function validasi()
	{
		$query = $this->db->get_where('api_dev', array('email' => $email, 'password' => $password));
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function validasi_api_key($api_key)
	{
		$this->db->join('api_dev', 'api_dev.dev_id = aplikasi.dev_id');
		$query = $this->db->get_where('aplikasi', array('api_key' => $api_key));
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
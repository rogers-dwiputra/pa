<?php
Class m_spot extends CI_Model
{
	//api call
	public function api_get($q = null)
	{
		if($q != null)
		{
			$this->db->like('nama_spot', $q);
		}
		$this->db->select('spots.id_spot, spots.nama_spot, spots.id_user, spots.id_kategori_spot, kategori_spot.kategori_spot, user.nama_user');
		$this->db->from('spots');
		$this->db->join('kategori_spot', 'kategori_spot.id_kategori_spot = spots.id_kategori_spot');
		$this->db->join('user', 'user.id_user = spots.id_user');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get()
	{
		$this->db->select('spots.id_spot, spots.nama_spot, kategori_spot.kategori_spot, spots.id_kategori_spot');
		$this->db->from('spots');
		$this->db->join('kategori_spot', 'kategori_spot.id_kategori_spot = spots.id_kategori_spot');
		$this->db->join('user', 'user.id_user = spots.id_user');
		$query = $this->db->get();

		return $query->result_array();
	}
}
<?php
Class M_kategori_spot extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert('kategori_spot', $data);
	}

	public function get_all($offset = 0,$limit = 20)
	{
		$this->db->order_by("kategori_spot", "asc"); 
		$query = $this->db->get('kategori_spot');
		return $query->result_array();
	}

	public function get_kategori()
	{
		$this->db->order_by("kategori_spot", "asc"); 
		$query = $this->db->get('kategori_spot');
		return $query->result_array();	
	}

	public function get($id)
	{
		$query = $this->db->get_where('kategori_spot', array('id_kategori_spot' => $id));
		return $query->row_array();
	}
}
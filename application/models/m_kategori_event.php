<?php
Class m_kategori_event extends CI_Model
{
	public function insert($data)
	{
		return $this->db->insert('kategori_event', $data);
	}

	public function get_all($offset = 0,$limit = 20)
	{
		$this->db->order_by("kategori_event", "asc"); 
		$query = $this->db->get('kategori_event');
		return $query->result_array();
	}

	public function get_kategori()
	{
		$this->db->order_by("kategori_event", "asc"); 
		$query = $this->db->get('kategori_event');
		return $query->result_array();	
	}

	public function get($id)
	{
		$query = $this->db->get_where('kategori_event', array('id_kategori_event' => $id));
		return $query->row_array();
	}
}
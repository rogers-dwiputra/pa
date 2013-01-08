<?php
Class m_event extends CI_Model
{
	//api call
	public function api_get($q = null)
	{
		if($q != null)
		{
			$this->db->like('nama_event', $q);
		}
		$this->db->select('events.id_event, events.id_user, events.id_kategori_event');
		$this->db->from('events');
		$this->db->join('kategori_event', 'kategori_event.id_kategori_event = events.id_kategori_event');
		$this->db->join('user', 'user.id_user = events.id_user');
		$query = $this->db->get();

		return $query->result_array();
	}

	//non api call
	public function get()
	{
		$this->db->select('events.id_event, events.nama_event, kategori_event.kategori_event, events.id_kategori_event');
		$this->db->from('events');
		$this->db->join('kategori_event', 'kategori_event.id_kategori_event = events.id_kategori_event');
		$this->db->join('user', 'user.id_user = events.id_user');
		$query = $this->db->get();

		return $query->result_array();
	}

	//non api call
	public function insert($data)
	{
		return $this->db->insert('events',$data);
	}

	public function get_where($id)
	{
		$query = $this->db->get_where('events',array('id_event' => $id));
		return $query->row_array();
	}
}
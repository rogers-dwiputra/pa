<?php
Class spots extends CI_Controller
{
	public function index()
	{
		$data['kategori'] = $this->m_kategori_spot->get_kategori();
		$menu['menu'] = 'spots';
		$data['spots'] = $this->m_spot->get();
		$this->load->view('admin/templates/header',$menu);
		$this->load->view('admin/spots/spots',$data);
		$this->load->view('admin/templates/footer');
	}

	public function insert()
	{
		$data = array(
			'id_user' => $this->input->post('id_user'),
			'id_kategori_spot' => $this->input->post('id_kategori_spot'),
			'nama_spot' => $this->input->post('nama_spot'),
			'alamat' => $this->input->post('alamat'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('description'),
			'wifi' => $this->input->post('wifi'),
			'bussiness_day_hour' => $this->input->post('bdh'),
			'twitter' => $this->input->post('twitter'),
			'website' => $this->input->post('website'),
			);
		$this->db->insert('spots',$data);
		redirect('admin/spots');
	}
}
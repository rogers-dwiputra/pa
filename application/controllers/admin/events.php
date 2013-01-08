<?php
Class events extends CI_Controller
{
	public function index()
	{
		$data['kategori'] = $this->m_kategori_event->get_kategori();
		$menu['menu'] = 'events';
		$data['events'] = $this->m_event->get();
		$this->load->view('admin/templates/header',$menu);
		$this->load->view('admin/events/events',$data);
		$this->load->view('admin/templates/footer');
	}

	public function insert()
	{
		$data = array(
			'id_user' => $this->input->post('id_user'),
			'id_kategori_event' => $this->input->post('id_kategori'),
			'nama_event' => $this->input->post('nama_event'),
			'alamat_event' => $this->input->post('alamat_event'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'event_start' => $this->input->post('event_start'),
			'event_end' => $this->input->post('event_end'),
			'ticket' => $this->input->post('ticket'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'twitter' => $this->input->post('twitter'),
			'website' => $this->input->post('website'),
			);
		$this->m_event->insert($data);
		redirect('admin/events');
	}

	public function view($id)
	{
		$data['event'] = $this->m_event->get_where($id);
		$this->load->view('admin/events/view_event',$data);
	}
}
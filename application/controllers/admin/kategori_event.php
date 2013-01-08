<?php
Class kategori_event extends CI_Controller
{

  public function index()
  {
    $data['kategori'] = $this->m_kategori_event->get_all();
    $menu['menu'] = 'kategori-event';
    $this->load->view('admin/templates/header',$menu);
    $this->load->view('admin/kategori/event',$data);
    $this->load->view('admin/templates/footer');
  }

  public function insert()
  {
  	$data = array(
  		'kategori_event' => $this->input->post('kategori_event'),
  		'keterangan' => $this->input->post('kategori_event')
  		);
  	$this->m_kategori_event->insert($data);
  	redirect('admin/kategori_event');
  }

  public function view($id)
  {
    echo '<pre>';
    print_r($this->m_kategori_event->get($id));
    echo '</pre>';
  }
}
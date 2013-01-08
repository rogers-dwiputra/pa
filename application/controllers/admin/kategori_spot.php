<?php
Class kategori_spot extends CI_Controller
{

  public function index()
  {
    $data['kategori'] = $this->m_kategori_spot->get_all();
    $menu['menu'] = 'kategori-spot';
    $this->load->view('admin/templates/header',$menu);
    $this->load->view('admin/kategori/spot',$data);
    $this->load->view('admin/templates/footer');
  }

  public function insert()
  {
  	$data = array(
  		'kategori_spot' => $this->input->post('kategori_spot'),
  		'keterangan' => $this->input->post('kategori_spot')
  		);
  	$this->m_kategori_event->insert($data);
  	redirect('admin/kategori_spot');
  }

  public function view($id)
  {
    echo '<pre>';
    print_r($this->m_kategori_spot->get($id));
    echo '</pre>';
  }
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Buku extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

      $databuku=$this->Buku_model->get_all();//panggil ke modell
      $datafield=$this->Buku_model->get_field();//panggil ke modell

      $data = array(
        'contain_view' => 'admin/buku/buku_list',
        'sidebar'=>'admin/sidebar',
        'css'=>'admin/crudassets/css',
        'script'=>'admin/crudassets/script',
        'databuku'=>$databuku,
        'datafield'=>$datafield,
        'module'=>'admin',
        'titlePage'=>'buku',
        'controller'=>'buku'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => 'admin/buku/buku_form',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/buku/create_action',
        'module'=>'admin',
        'titlePage'=>'buku',
        'controller'=>'buku'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Buku_model->get_by_id($id);
      $data = array(
        'contain_view' => 'admin/buku/buku_edit',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/buku/update_action',
        'dataedit'=>$dataedit,
        'module'=>'admin',
        'titlePage'=>'buku',
        'controller'=>'buku'
       );
      $this->template->load($data);
    }


    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_buku' => $this->input->post('nama_buku',TRUE),
		'penerbit' => $this->input->post('penerbit',TRUE),
		'tahun_keluar' => $this->input->post('tahun_keluar',TRUE),
		'jenis_buku' => $this->input->post('jenis_buku',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
	    );

            $this->Buku_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/buku'));
        }
    }



    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_buku', TRUE));
        } else {
            $data = array(
		'nama_buku' => $this->input->post('nama_buku',TRUE),
		'penerbit' => $this->input->post('penerbit',TRUE),
		'tahun_keluar' => $this->input->post('tahun_keluar',TRUE),
		'jenis_buku' => $this->input->post('jenis_buku',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
	    );

            $this->Buku_model->update($this->input->post('id_buku', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/buku'));
        }
    }

    public function delete($id)
    {
        $row = $this->Buku_model->get_by_id($id);

        if ($row) {
            $this->Buku_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/buku'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/buku'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_buku', 'nama buku', 'trim|required');
	$this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
	$this->form_validation->set_rules('tahun_keluar', 'tahun keluar', 'trim|required');
	$this->form_validation->set_rules('jenis_buku', 'jenis buku', 'trim|required');
	$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');

	$this->form_validation->set_rules('id_buku', 'id_buku', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

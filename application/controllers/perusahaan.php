<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('perusahaan_model');
        $this->load->helper('fungsi_helper');  
        cek_login();
    }

    public function index(){

        $data = [
			'title' => 'perusahaan',
			'perusahaan' => $this->perusahaan_model->getAll(),
			
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
		$this->load->view('admin/listperu', $data);
		$this->load->view('layout/footer');


       
    }

    public function input(){
        $data =['title' => 'Tambah Penyedia'];
         
       
        $this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
        $this->load->view('admin/tambahperu');
        $this->load->view('layout/footer');
    }

    public function simpan(){
        $this->perusahaan_model->simpan();
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect(site_url('perusahaan'));
    }
    
    public function hapuskan($id = null){
        if (!isset($id)) show_404();

        if ($this->perusahaan_model->hapus($id)){
            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
            redirect(site_url('perusahaan'));
        }
    }
}
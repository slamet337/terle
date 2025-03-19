<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppk extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Ppk_model');
        $this->load->helper('fungsi_helper');  
        $this->load->model('Perusahaan_model');
        $this->load->model('Periode_model');
        $this->load->library('form_validation');
        
        cek_login();
    }

    public function index(){
        $data = [
            'title' => 'Index',
            'ppk' => $this->Ppk_model->getAll(),
            
        ];
        // $data = ['mak' => $this->Ppk_model->];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/navbar');
        $this->load->view('admin/index', $data);
        $this->load->view('layout/footer');
    }
    
    public function inputdata(){
        $data =['title' => 'Kontrak Baru',
                'penye' => $this->Perusahaan_model->getPeru(),
                'periode' => $this->Periode_model->status(),
             ];
        
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('admin/tambahdata', $data);
        $this->load->view('layout/footer');
    }
    
    public function edit($id = null) {
        
    
        $data = ['title' => 'Edit Kontrak'];
        if (!$id) {
            show_404();
        }
        
        $ppk = $this->Ppk_model;
        $data['ppk'] = $ppk->getById($id);
        
        $validation = $this->form_validation;
        $validation->set_rules($ppk->rules());
        
        if ($validation->run()) {
            if ($ppk->updatePpk()) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('ppk'));
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat menyimpan data');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('admin/editdata', $data);
        $this->load->view('layout/footer');
    }
   
    public function saveData(){
        $this->Ppk_model->saveData();
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect(site_url('ppk'));
    }
    
    public function hapusData($id = null){
        if (!isset($id)) show_404();

        if ($this->Ppk_model->deleteData($id)){
            $this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
            redirect(site_url('ppk'));
        }
    }
}
?>
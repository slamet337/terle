<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Periode_model');
        $this->load->helper('fungsi_helper');  
        // $this->load->model('Perusahaan_model');
        // $this->load->model('Termin_model');
        $this->load->library('form_validation');
        cek_login();
    }

    public function index(){
        $data = [
            'title' => 'Periode Pengadaan',
            'periode' => $this->Periode_model->getAll(),
        ];
        // $data = ['mak' => $this->Ppk_model->];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/navbar');
        $this->load->view('admin/periode/index', $data);
        $this->load->view('layout/footer');
    }
    
    public function inputdata(){
        $data =['title' => 'Tambah Periode Pengadaan'];
                // 'penye' => $this->Perusahaan_model->getPeru(),];
        
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('admin/periode/tambah', $data);
        $this->load->view('layout/footer');
    }
    
    public function aktif($id) {
    $data['id'] = $id;
    $data['status'] = 'YES';
    $result = $this->Periode_model->aktif($data);
    $this->session->set_flashdata('sweetalert', '
            swal("Status Periode", "Periode KOntrak Berhasil Di Aktifkan !!!", "success");
        ');
    redirect(site_url('periode'));
    }
    public function nonaktif($id) {
    $data['id'] = $id;
    $data['status'] = 'NO';
    $result = $this->Periode_model->aktif($data);
    $this->session->set_flashdata('sweetalert', '
            swal("Status Periode", "Periode KOntrak Berhasil Di Aktifkan !!!", "success");
        ');
    redirect(site_url('periode'));
    }
   
    public function saveData(){
        $this->Periode_model->saveData();
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect(site_url('periode'));
    }
    
    public function hapusData($id = null){
        if (!isset($id)) show_404();

        if ($this->Periode_model->deleteData($id)){
            $this->session->set_flashdata('delete', 'Data Berhasil Dihapus!');
            redirect(site_url('periode'));
        }
    }
}
?>
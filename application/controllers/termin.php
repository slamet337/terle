<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Termin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Termin_model');
        $this->load->model('Ppk_model');
        $this->load->helper('fungsi_helper');  
        $this->load->library('form_validation');
        cek_login();
    }

    public function index($id = null){

        $data = [
			'title' => 'Termin',
			'Termin' => $this->Termin_model->getall(),
            'ppk' => $this->Termin_model->ambilData($id),
			
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
		$this->load->view('termin/index', $data);
		$this->load->view('layout/footer');

    }

    public function input(){
        $data =['title' => 'Termin'];
         
       
        $this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
        $this->load->view('termin/input');
        $this->load->view('layout/footer');
    }

    public function simpan(){
        $this->Termin_model->saveData();
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect(site_url('termin'));
    }
    
    public function deleteData($id = null){
        if (!isset($id)) show_404();

        if ($this->Termin_model->deleteData($id)){
            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
            redirect(site_url('termin'));
        }
    }


    public function editTermin($id = null) {
        
    
        $data = ['title' => 'Edit Termin'];
        if (!$id) {
            show_404();
        }
        
        $termin = $this->Termin_model;
        $data['termin'] = $termin->getById($id);
        
        $validation = $this->form_validation;
        $validation->set_rules($termin->rules());
        
        if ($validation->run()) {
            if ($termin->updateTermin()) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('termin'));
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat menyimpan data');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('termin/editdata', $data);
        $this->load->view('layout/footer');
    }
}
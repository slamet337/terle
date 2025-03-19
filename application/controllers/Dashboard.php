<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Ppk_model');
		$this->load->model('Periode_model');
		$this->load->helper('fungsi_helper');  
		// $this->load->helper('katanya_helper');  
        cek_login();
		
	}

	public function index($tahun ='1')
	{
		$tahun =$this->input->get('tahun') ?: '';

		$total =$this->Ppk_model->getTotal($tahun);
		$rm =$this->Ppk_model->getRm('RM', $tahun);
		$blu =$this->Ppk_model->getRm('BLU', $tahun);
		$ls =$this->Ppk_model->getRm('LS', $tahun);

		
		$formatted_total = 'Rp ' . number_format($total, 0, ',', '.');
		$formatted_total1 = 'Rp ' . number_format($rm, 0, ',', '.');
		$formatted_total3 = 'Rp ' . number_format($blu, 0, ',', '.');
		$formatted_total2 = 'Rp ' . number_format($ls, 0, ',', '.');


		// rekapan
		$rekap_data = $this->Ppk_model->ambilData($tahun);
    	// $total_rekap = 0;
    	$total_rekap = array_reduce($rekap_data->result(), function($sum, $data) {
			return $sum + $data->total;	
		}, 0);
    // foreach ($rekap_data->result() as $data) {
    //     $total_rekap += $data->total;
    // 	}


    	$formatted_rekap_total = number_format($total_rekap, 0, ',', '.');
		// $total_aktif = $this->Periode_model->getJumlahStatus('YES');
		// $total_tidak_aktif = $this->Periode_model->getJumlahStatus('');
			$data = [
			'title' => 'Dashboard',
			'ppk' => count($this->Ppk_model->getData('', $tahun)->result()),
			'total' => $formatted_total,
			'rm' => $formatted_total1,
			'ls' => $formatted_total2,
			'blu' => $formatted_total3,
			'ppk1' => $this->Ppk_model->getAll($tahun),
			'ppk2' => $this->Ppk_model->ambilData($tahun),
			'total_rekap' => $formatted_rekap_total,
			'tahun' => $tahun,
			// 'total_aktif' => $total_aktif,
			// 'total_tidak_aktif' => $total_tidak_aktif,
			
		];
		
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
		$this->load->view('admin/dashboard/index', $data);
		// $this->load->view('landing/index', $data);
		$this->load->view('layout/footer');
	}
	
}
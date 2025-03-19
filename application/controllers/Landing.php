<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Ppk_model');
		// $this->load->helper('fungsi_helper');  
        // cek_login();
		
	}

	public function index()
	{
		

		$data = [
			// 'title' 		=> 'Dashboard',
			'ppk' => count($this->Ppk_model->getData()->result()),
			'rm' => count($this->Ppk_model->getRm1()->result()),
			'blu' => count($this->Ppk_model->getBlu()->result()),
			];
		
		
		$this->load->view('landing/index', $data);
		
	}
}
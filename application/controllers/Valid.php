<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valid extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/topbar');
		$this->load->view('layout/sidebar');
		$this->load->view('verifikasi/valid');
		$this->load->view('layout/footer');
	}

	

}

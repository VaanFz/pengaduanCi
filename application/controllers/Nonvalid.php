<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonvalid extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/topbar');
		$this->load->view('layout/sidebar');
		$this->load->view('verifikasi/nonvalid');
		$this->load->view('layout/footer');
	}

	

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/topbar');
		$this->load->view('layout/sidebar');
		$this->load->view('administrator/daftar_petugas');
		$this->load->view('layout/footer');
	}

	// public function reg_petugas()
	// {
	// 	$data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
	// }


}

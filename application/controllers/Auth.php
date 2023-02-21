<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct() 
	{
     	parent::__construct();
     	$this->load->library('form_validation');
  	}
	 
    public function index()
	{
		$this->load->view('template/auth-header');
		$this->load->view('auth/login');
		$this->load->view('template/auth-footer');
	}
	
	public function registration()
	{
		$this->form_validation->set_rules('nama_petugas', 'Nama petugas', 'required|trim',['required' => 'Nama Tidak Boleh Kosong']);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]',['is_unique' => 'Username Sudah Dipakai']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim',['required' => 'Password Tdak Boleh Kosong']);
		$this->form_validation->set_rules('telp', 'Telepon', 'required|trim',['required' => 'Nomor Telepon Harus Di Isi']);
		
		if ($this->form_validation->run() == false) {
			$this->load->view('template/auth-header');
			$this->load->view('auth/registration');
			$this->load->view('template/auth-footer');
			
		} else {
			$data = [
				'nama_petugas' => $this->input->post('nama_petugas'),
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'telp' => $this->input->post('telp'),
				'level' => $this->input->post('level'),
			];
			$this->db->insert('petugas',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun Beerhasil Dibuat! Silahkan Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('auth');
		}
		
	}
}
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
		$this->form_validation->set_rules('username', 'Username', 'required|trim',['required' => 'Username Tdak Boleh Kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim',['required' => 'Password Tdak Boleh Kosong']);
		if ($this->form_validation->run() == false) {
			$this->load->view('template/auth-header');
			$this->load->view('auth/login');
			$this->load->view('template/auth-footer');
		} else {
			//validasi sukses
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$petugas = $this->db->get_where('petugas', ['username' => $username])->row_array();
		// var_dump($petugas);
		// die;
		if($petugas) {
			//petugas ada
			if(password_verify($password, $petugas['password'])) {
				$data = [
					'username' => $petugas['username'],
					'level' => $petugas['level'],
				];
				$this->session->set_userdata($data);
				if ($petugas['level'] == 'admin') {
					redirect('Dashboard');
				} elseif ($petugas['level'] == 'petugas') {
					redirect('Dashboard');
				} else {
					redirect('Auth');
				}
				redirect('Dashboard');
			} else {
				// var_dump($petugas);
				// die;
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password anda salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				return redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username tidak ada <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return redirect('Auth');
		}
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
			redirect('Administrator');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		redirect('Masyarakat');
	}
}
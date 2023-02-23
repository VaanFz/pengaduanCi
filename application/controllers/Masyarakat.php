<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {

	
	public function index()
	{
        $this->form_validation->set_rules('username','Username','required|trim',['required' => 'Username Tidak Boleh Kosong']);
        $this->form_validation->set_rules('password','Pasaword','required|trim',['required' => 'Pasaword Tidak Boleh Kosong']);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/auth-header');
            $this->load->view('masyarakat/login');
            $this->load->view('template/auth-footer');;
        } else {
            $this->_login();
        }
	}

    private function _login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $username])->row_array();
        if($masyarakat) {
            if(password_verify($password, $masyarakat['password'])) {
                $data = [
                    'username' => $masyarakat['username']
                ];
                $this->session->set_userdata($data);
                redirect('Dashboard');
            }
        }

    }

    public function registration()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[masyarakat.nik]',['is_unique' => 'Nik sudah ada']);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',['required' => 'Nama Tidak Boleh Kosong']);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[masyarakat.username]',['is_unique' => 'Username Sudah Dipakai']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim',['required' => 'Password Tdak Boleh Kosong']);
		$this->form_validation->set_rules('telp', 'Telepon', 'required|trim',['required' => 'Nomor Telepon Harus Di Isi']);

        if($this->form_validation->run() == false) {
            $this->load->view('template/auth-header');
            $this->load->view('masyarakat/registrasi');
            $this->load->view('template/auth-footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'telp' => $this->input->post('telp'),
            ];
            $this->db->insert('masyarakat',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Akun Beerhasil Dibuat! Silahkan Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('masyarakat');
        }
    } 
    
    public function pengaduan()
    {
            $this->load->model('upload_pengaduan');
            $data['user'] = $this->db->get_where('masyarakat',['uusername' => $this->session->userdata('username')])->row_array();

            $data['data_pengaduan'] = $this->m_pengaduan->data_pengaduan_masyarakat_nik($data['user']['nik'])->result_array();

            $this->form_validation->set_rules('isi_laporan','Isi Laporan','required');
            if($this->form_validation->run() == false) {
                $this->load->view('layout/header');
                $this->load->view('layout/topbar');
                $this->load->view('layout/sidebar',$data);
                $this->load->view('masyarakat/aduan',$data);
                $this->load->view('layout/footer');
            } else {
                $config['upload_path']   = './assets/img/upload/';
                $config['allowed']       = 2048;
                $config['max_size']      = TRUE;
                $config['remove_spaces'] = TRUE;
                $config['detect_mime']   = TRUE;
                $config['mod_mime_fix']  = TRUE;

                $this->load->library('upload', $config);

                if (! $this->upload->do_upload('foto'));
                $this->session->set_flashdata('message', '<div class"alert alert-danger" role="alert">' .$this->upload->display_errors() . '</div>');
                $this->load->view('layout/header');
                $this->load->view('layout/topbar');
                $this->load->view('layout/sidebar',$data);
                $this->load->view('masyarakat/aduan',$data);
                $this->load->view('layout/footer');
            }
        }
        
        
    }
    
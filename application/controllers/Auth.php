<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
		$this->load->model("auth_model");
	}
	
	// function untuk mengarahkan ke view login
	public function index()
	{
		$this->load->view('auth/login');
	}

	// function untuk melakukan proses login
	public function login()
	{
		// inisiasi variabel untuk inputan post HTML
		$nama_user 	= $this->input->post('txt_nama', true);
		$pass_user 	= $this->input->post('txt_pass', true);

		// variabel untuk konek ke database dan cek login nya
		$cek 	= $this->auth_model->where($nama_user,$pass_user)->num_rows();

		// variabel untuk menampung data session dari database
		$data	= $this->auth_model->where($nama_user,$pass_user)->row();

		// setting aturan validasi
		$this->form_validation->set_rules('txt_nama', 'nama', 'required');
		$this->form_validation->set_rules('txt_pass', 'Password', 'required');

		// proses validasi form dengan library form_validation codeigniter
		if ($this->form_validation->run() == FALSE) {

			// jika proses gagal kembali kehalaman login
			$this->load->view('auth/login');
		}
		else {
			// pengecekan apakah usernama dan password ditemukan
			if ($cek == 1) {
				
				// pembuatan session dari data pada database dimasukkan dalam array
				$data_session = array(
					'id_user' 		=> $data->id_user,
					'clg_id' 		=> $data->clg_id,
					'nama_user' 	=> $data->nama_user,
					'lvl_user' 		=> $data->lvl_user,
					'status' 		=> "login"
				);
				
				// inisiasi session 
				$this->session->set_userdata($data_session);

				// ketika berhasil redirect ke halaman view home
				if ($data->lvl_user == 1) {
					redirect(site_url('welcome/caleg'));
				}
				elseif ($data->lvl_user == 2) {
					redirect(site_url('saksi/lihat'));
				}				
			} 
			else {
				// redirect kembali ke halaman login karena proses gagal
				redirect(site_url('auth'));
			}
		}
	}

	// function logout dengan penghapusan session
	public function logout(){
		// penghapusan data session
		$this->session->sess_destroy();

		// redirect kembali ke halaman login
		redirect(site_url('auth'));
	}	
}
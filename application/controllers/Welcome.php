<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(site_url('auth'));
        }
	}

	public function admin()
	{
		$this->load->view('admin/index');
	}

	public function caleg($param=null)
	{
		$clg_id = $this->session->userdata('clg_id');

		$query = "SELECT sum(jum_sra) as jum_sra FROM suara WHERE clg_id = $clg_id";
		$action = $this->db->query($query)->row()->jum_sra;
		$total_saksi = $this->db->where('clg_id', $clg_id)->get('saksi')->num_rows();
		$daftar_saksi = $this->db->where('clg_id', $clg_id)->order_by('id_sks','DESC')->get('saksi')->result();

		$data = array(
			'total_suara' => $action, 
			'total_saksi' => $total_saksi, 
			'daftar_saksi' => $daftar_saksi, 
		);

		if ($param == null) {
			$this->load->view('caleg/index', $data);
		}
		elseif ($param == 'tambah') {
			$this->load->view('caleg/tambah_saksi');
		}
		elseif ($param == 'daftar-saksi') {
			$this->load->view('caleg/daftar_saksi', $data);
		}
	}

	public function saksi($param='lihat', $id)
	{
		if ($param == 'lihat') {
			$data = array(
				'saksi' => $this->db->where('id_sks', $id)->get('saksi')->row(), 
			);

			$this->load->view('caleg/lihat_saksi', $data);
		}
		elseif ($param == 'hapus') {
			$this->db->delete('saksi', array('id_sks' => $id));
			
			redirect(site_url('welcome/caleg/daftar-saksi'));
		}
		
	}
}

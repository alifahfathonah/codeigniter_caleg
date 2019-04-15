<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saksi extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(site_url('auth'));
        }
	}

	public function lihat($param='lihat', $id=null)
	{
		$clg_id = $this->session->userdata('clg_id');
		$daftar_suara = $this->db->where('clg_id', $clg_id)->order_by('id_sra','DESC')->get('suara')->result();

		$data = array(
			'daftar_suara' => $daftar_suara, 
		);

		if ($param == 'lihat') {
			$this->load->view('saksi/index', $data);
		}
		elseif ($param == 'hapus') {
			$this->db->delete('suara', array('id_sra' => $id));
			
			redirect(site_url('saksi/lihat'));
		}
	}
	
	public function tambah()
	{
		$data_saksi = array(
			'clg_id'  	 => $this->session->userdata('clg_id'),
            'nama_sks'  => ucwords($this->input->post('txt_nama',TRUE)), 
            'tlp_sks'   => $this->input->post('txt_tlp',TRUE), 
            'ket_sks'   => $this->input->post('txt_ket',TRUE), 
        );
        
        $data_user = array(
            'clg_id'  	 => $this->session->userdata('clg_id'),  
            'nama_user'  => url_title($this->input->post('txt_nama'), '.', TRUE),  
            'pass_user'  => md5(substr($this->input->post('txt_tlp'), -6)),
            'lvl_user'   => 2, 
        );
        
        $this->db->insert('saksi',$data_saksi);
        $this->db->insert('user',$data_user);
        
        redirect('welcome/caleg');
	}

	public function input()
	{
        $data = array(
            'clg_id'	=> $this->session->userdata('clg_id'),  
            'kota_sra'  => ucwords($this->input->post('txt_kota', TRUE)),  
            'kec_sra'  	=> ucwords($this->input->post('txt_kec', TRUE)),  
            'kel_sra'  	=> ucwords($this->input->post('txt_kel', TRUE)),  
            'tps_sra'  	=> $this->input->post('txt_tps'),  
            'jum_sra'  	=> $this->input->post('txt_jum'),
        );
        
        $this->db->insert('suara',$data);
        
        $this->load->view('saksi/index');
	}

}

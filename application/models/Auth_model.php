<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	
	// inisiasi private variabel untuk class ini
	private $_table 	= "user";

    // function untuk melakukakn pengecekan data pada database atau mengambil satu data yang sesuai 
	public function where($nama_user,$pass_user)
	{
		$where = array(
			'nama_user'   => $nama_user, 
			'pass_user'    => md5($pass_user)
		);

		return $this->db->get_where($this->_table, $where);
	}
}
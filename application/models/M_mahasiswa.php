<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {
	public function all_data() {
		$this->db->select('*');
		$this->db->from('tb_mahasiswa');
		return $this->db->get()->result();
	}
}

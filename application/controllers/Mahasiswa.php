<?php

class Mahasiswa extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('m_mahasiswa');

    }
    public function index(){
        $data = array(
            'judul' => 'Mahasiswa',
            'subjudul' => '',
            'page' => 'mahasiswa/v_mahasiswa',
            'mahasiswa' => $this->m_mahasiswa->all_data(),
        );
        $this->load->view('v_template', $data, false);
    }
}
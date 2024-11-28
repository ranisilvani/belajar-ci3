<?php

class Home extends CI_Controller{
    public function index(){
        $data = array(
            'judul' => 'Dashboard',
            'subjudul' => '',
            'page' => 'v_dashboard'
        );
        $this->load->view('v_template', $data, false);
    }
}
<?php

class Klasemen extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_klasemen');
    }

    public function index()
    {
        $data['tampil'] = $this->M_klasemen->tampil()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('klasemen/v_tampil', $data);
        $this->load->view('templates/footer');
    }
}
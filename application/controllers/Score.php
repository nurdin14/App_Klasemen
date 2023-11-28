<?php

class Score extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_score');
        $this->load->model('M_klub');
    }

    public function index()
    {
        $data['tampil'] = $this->M_score->tampil()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('score/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['tampil'] = $this->M_klub->tampil()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('score/v_add',$data);
        $this->load->view('templates/footer');
    }

    function aksi_tambah()
    {
        $tambah = [
            'id_score' => $this->input->post('id_score'),
            'klub_1' => $this->input->post('klub_1'),
            'score_1' => $this->input->post('score_1'),
            'status_1' => $this->input->post('status_1'),
            'klub_2' => $this->input->post('klub_2'),
            'score_2' => $this->input->post('score_2'),
            'status_2' => $this->input->post('status_2'),
        ];

        if($tambah['klub_1'] == $tambah['klub_2']) {
             $this->session->set_flashdata('pesan', '
                    <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                            </button>
                            <div class="alert-title">Gagal</div>
                            Pertandingan tidak boleh sama.
                        </div>
                        </div>
                ');
                redirect('score/index');
        } else {
            $this->M_score->tambah($tambah);
            $this->session->set_flashdata('pesan', '
                    <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                            </button>
                            <div class="alert-title">Berhasil</div>
                            Data Berhasil Di Simpan.
                        </div>
                        </div>
                ');
                redirect('score/index');
        }        
    }

    public function edit($id_score)
    {
        $where = ['id_score'=> $id_score];
        $data['tampil'] = $this->M_score->edit($where)->row_array();
        $data['tampilKlub'] = $this->M_klub->tampil()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('score/v_edit', $data);
        $this->load->view('templates/footer');

        if(isset($_POST['simpan'])) {
            $ubah = [
            'id_score' => $this->input->post('id_score'),
            'klub_1' => $this->input->post('klub_1'),
            'score_1' => $this->input->post('score_1'),
            'status_1' => $this->input->post('status_1'),
            'klub_2' => $this->input->post('klub_2'),
            'score_2' => $this->input->post('score_2'),
            'status_2' => $this->input->post('status_2'),
        ];


        if ($ubah['klub_1'] == $ubah['klub_2']) {
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <div class="alert-title">Gagal</div>
                        Pertandingan tidak boleh sama.
                    </div>
                </div>
            ');
            redirect('score/index');
        } else {
            $this->M_score->ubah($ubah, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Ubah.
                    </div>
                </div>
            ');
            redirect('score/index');
        }

        }
    }

    public function hapus($id_score)
    {
        $where = ['id_score' => $id_score];
        $this->M_score->hapus($where);
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Hapus.
                      </div>
                    </div>
            ');
        redirect('score/index');
    }
}
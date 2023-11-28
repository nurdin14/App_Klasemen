<?php

class Klub extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_klub');
    }

    public function index()
    {
        $data['tampil'] = $this->M_klub->tampil()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('klub/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function tambahKlub()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('klub/v_add');
        $this->load->view('templates/footer');
    }

    function aksi_tambah()
    {
        $tambah = [
            'id_klub' => $this->input->post('id_klub'),
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
        ];

        $cek = $this->M_klub->tampil()->result_array();
        foreach($cek as $c) :
            if($tambah['nama'] == $c['nama']) {
                $this->session->set_flashdata('pesan', '
                    <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                    </button>
                    <div class="alert-title">Gagal</div>
                    Data Sudah Ada.
                        </div>
                        </div>
                        ');
                        redirect('klub/index');
        } else {
            $this->M_klub->tambah($tambah);
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
                redirect('klub/index');
        }
        endforeach;
    }

    public function edit($id_klub)
    {
        $where = ['id_klub'=> $id_klub];
        $data['tampil'] = $this->M_klub->edit($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('klub/v_edit', $data);
        $this->load->view('templates/footer');

        if(isset($_POST['simpan'])) {
            $ubah = [
            'id_klub' => $this->input->post('id_klub'),
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
        ];

        $cek = $this->M_klub->tampil()->result_array();
        $data_sudah_ada = false;

        foreach ($cek as $c) {
            if ($ubah['nama'] == $c['nama']) {
                $data_sudah_ada = true;
                break; 
            }
        }

        if ($data_sudah_ada) {
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <div class="alert-title">Gagal</div>
                        Data Sudah Ada.
                    </div>
                </div>
            ');
            redirect('klub/index');
        } else {
            $this->M_klub->ubah($ubah, $where);
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
            redirect('klub/index');
        }

        }
    }

    public function hapus($id_klub)
    {
        $where = ['id_klub' => $id_klub];
        $this->M_klub->hapus($where);
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
        redirect('klub/index');
    }
}
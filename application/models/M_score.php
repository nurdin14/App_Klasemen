<?php

class M_score extends CI_Model {

    function tampil()
    {
        return $this->db->get('tb_skor');
    }

    function tambah($tambah)
    {
        $this->db->insert('tb_skor', $tambah);
    }

    function edit($where) 
    {
        return $this->db->get_where('tb_skor', $where);
    }

    function ubah($ubah, $where)
    {
        $this->db->update('tb_skor', $ubah, $where);
    }

    function hapus($where)
    {
        $this->db->delete('tb_skor', $where);
    }
}
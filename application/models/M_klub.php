<?php

class M_klub extends CI_Model {

    function tampil()
    {
        return $this->db->get('tb_klub');
    }

    function tambah($tambah)
    {
        $this->db->insert('tb_klub', $tambah);
    }

    function edit($where) 
    {
        return $this->db->get_where('tb_klub', $where);
    }

    function ubah($ubah, $where)
    {
        $this->db->update('tb_klub', $ubah, $where);
    }

    function hapus($where)
    {
        $this->db->delete('tb_klub', $where);
    }
}
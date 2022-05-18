<?php

class Model_komentar extends CI_Model
{
    public function getDataKomentar()
    {
        $data = $this->db->query("select * from komentar");
        return $data->result();
    }

    public function tambah_komentar($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_komentar($where, $table)
    {
        $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

<?php

class Model_review extends CI_Model
{
    public function komen_per_artikel($id)
    {
        $data = $this->db->query("SELECT * FROM `review` WHERE artikel_id = $id");
        return $data->result();
    }

    public function tambah_review($data, $table)
    {
        $this->db->insert($table, $data);
    }
}

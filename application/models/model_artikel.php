<?php

class Model_artikel extends CI_Model
{
    public function getDataArtikel()
    {
        $data = $this->db->query("select * from artikel");
        return $data->result();
    }

    public function getArtikelTerbaru()
    {
        $data = $this->db->query("SELECT * FROM `artikel` ORDER BY tanggal DESC LIMIT 3");
        return $data->result();
    }

    public function tambah_artikel($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function edit_artikel($where, $table)
    {
        return $this->db->get_where($table, $where);
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

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('artikel');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_artikel($id)
    {
        $result = $this->db->where('id', $id)->get('artikel');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getDataKategori()
    {
        $data = $this->db->query("select * from kategori");
        return $data->result_array();
    }

    public function tambah_kategori($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_kategori($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_kategori($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_kategori($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cariDataArtikel()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('nama_penulis', $keyword);
        return $this->db->get('artikel')->result();
    }

    public function cariDataKategori()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kategori', $keyword);
        $this->db->or_like('alias', $keyword);
        return $this->db->get('kategori')->result_array();
    }


    // Pagination biasa
    public function countAll()
    {
        return $this->db->count_all('artikel');
    }

    public function fetchArtikel($limit, $start)
    {
        $this->db->limit($limit, $start);
        return $this->db->get('artikel')->result();
    }
}

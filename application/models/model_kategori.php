<?php

class model_kategori extends CI_Model
{
    public function news()
    {
        return $this->db->get_where("artikel", array('kategori' => 'news'));
    }
    public function hot()
    {
        return $this->db->get_where("artikel", array('kategori' => 'hot'));
    }

    public function health()
    {
        return $this->db->get_where("artikel", array('kategori' => 'health'));
    }

    public function inet()
    {
        return $this->db->get_where("artikel", array('kategori' => 'inet'));
    }

    public function food()
    {
        return $this->db->get_where("artikel", array('kategori' => 'food'));
    }

    public function oto()
    {
        return $this->db->get_where("artikel", array('kategori' => 'oto'));
    }

    public function sport()
    {
        return $this->db->get_where("artikel", array('kategori' => 'sport'));
    }
}

<?php

class Komentar extends CI_Controller
{
    public function index()
    {
        $this->load->model('model_komentar');
        $data['komentar'] = $this->model_komentar->getDataKomentar();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('komentar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $nama = $this->input->post('nama');
        $isi = $this->input->post('isi');

        $data = array(
            'nama' => $nama,
            'isi' => $isi
        );
        $this->model_komentar->tambah_komentar($data, 'komentar');
        redirect('komentar');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['artikel'] = $this->model_komentar->edit_komentar($where, 'artikel')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('edit_komentar', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $nama = $this->input->post('nama');
        $isi = $this->input->post('isi');

        $data = array(
            'nama' => $nama,
            'isi' => $isi,
        );

        $where = array(
            'id' => $id
        );

        $this->model_komentar->update_data($where, $data, 'komentar');
        redirect('komentar');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_komentar->hapus_data($where, 'komentar');
        redirect('komentar');
    }
}

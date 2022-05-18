<?php

class Tambah_kategori extends CI_Controller
{
    public function index()
    {
        $this->load->model('model_artikel');
        $data['kategori'] = $this->model_artikel->getDataKategori();
        if ($this->input->post('keyword')) {
            $data['kategori'] = $this->model_artikel->cariDataKategori();
        }
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/tambah_kategori', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kategori()
    {
        $kategori  = $this->input->post('kategori');
        $alias     = $this->input->post('alias');
        $terbit    = $this->input->post('terbit');
        $link    = $this->input->post('link');
        $logo    = $this->input->post('logo');

        $data = array(
            'kategori' => $kategori,
            'alias'    => $alias,
            'terbit'   => $terbit,
            'link'   => $link,
            'logo'   => $logo,
        );

        $this->model_artikel->tambah_kategori($data, 'kategori');
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Berhasil Ditambahkan</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
        redirect('admin/Tambah_kategori/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['kategori'] = $this->model_artikel->edit_kategori($where, 'kategori')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_kategori', $data);
        $this->load->view('templates_admin/footer');
    }



    public function update()
    {
        $id       = $this->input->post('id');
        $kategori = $this->input->post('kategori');
        $alias    = $this->input->post('alias');
        $terbit   = $this->input->post('terbit');
        $link    = $this->input->post('link');
        $logo    = $this->input->post('logo');


        $data = array(
            'kategori' => $kategori,
            'alias'    => $alias,
            'terbit'   => $terbit,
            'link'   => $link,
            'logo'   => $logo,
        );

        $where = array(
            'id' => $id
        );

        $this->model_artikel->update_kategori($where, $data, 'kategori');
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Berhasil DiHapus</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
        redirect('admin/tambah_kategori/index');
    }


    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_artikel->hapus_kategori($where, 'kategori');
        $this->session->set_flashdata('flash', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Berhasil DiHapus</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
        redirect('admin/tambah_kategori/index');
    }
}

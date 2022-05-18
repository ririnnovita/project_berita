<?php

class Dashboard_admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') != '1') {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('auth/login');
    }
  }
  public function index()
  {
    $this->load->model('model_artikel');
    $data['artikel'] = $this->model_artikel->getDataArtikel();
    if ($this->input->post('keyword')) {
      $data['artikel'] = $this->model_artikel->cariDataArtikel();
    }
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah()
  {
    $judul                  = $this->input->post('judul');
    $artikel                = $this->input->post('artikel');
    $kategori                = $this->input->post('kategori');
    $nama_penulis           = $this->input->post('nama_penulis');
    $tanggal                = $this->input->post('tanggal');
    $gambar                 = $_FILES['gambar']['name'];
    $gambar2                 = $_FILES['gambar2']['name'];
    $gambar3                 = $_FILES['gambar3']['name'];
    if ($gambar = '') {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        echo "Gambar Gagal diupload!";
      } else {
        $gambar = $this->upload->data('file_name');
      }
    }
    //save gambar 2
    if ($gambar2 = '') {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif|';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar2')) {
        echo "Gambar 2 Gagal diupload!";
      } else {
        $gambar2 = $this->upload->data('file_name');
      }
    }
    //save gambar 3
    if ($gambar3 = '') {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar3')) {
        echo "Gambar Gagal diupload!";
      } else {
        $gambar3 = $this->upload->data('file_name');
      }
    }

    $data = array(
      'judul'             => $judul,
      'artikel'           => $artikel,
      'kategori'          => $kategori,
      'nama_penulis'      => $nama_penulis,
      'tanggal'           => $tanggal,
      'gambar'            => $gambar,
      'gambar2'            => $gambar2,
      'gambar3'            => $gambar3

    );

    $this->model_artikel->tambah_artikel($data, 'artikel');
    $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Berhasil Ditambahkan</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
    redirect('admin/dashboard_admin/index');
  }

  public function edit($id)
  {
    $where = array('id' => $id);
    $data['artikel'] = $this->model_artikel->edit_artikel($where, 'artikel')->result();

    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/edit_artikel', $data);
    $this->load->view('templates_admin/footer');
  }



  public function update()
  {
    $id                 = $this->input->post('id');
    $judul              = $this->input->post('judul');
    $artikel            = $this->input->post('artikel');
    $kategori            = $this->input->post('kategori');
    $nama_penulis       = $this->input->post('nama_penulis');
    $tanggal            = $this->input->post('tanggal');
    $gambar             = $this->input->post('gambar');
    $gambar2             = $this->input->post('gambar2');
    $gambar3             = $this->input->post('gambar3');
    if ($gambar = '') {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        echo "Gambar Gagal diubah!";
      } else {
        $gambar = $this->upload->data('file_name');
      }
    }
    //gambar2
    if ($gambar2 = '') {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        echo "Gambar Gagal diubah!";
      } else {
        $gambar2 = $this->upload->data('file_name');
      }
    }
    //gambar3
    if ($gambar3 = '') {
    } else {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        echo "Gambar Gagal diubah!";
      } else {
        $gambar3 = $this->upload->data('file_name');
      }
    }

    $data = array(
      'judul'             => $judul,
      'artikel'           => $artikel,
      'kategori'          => $kategori,
      'nama_penulis'      => $nama_penulis,
      'tanggal'           => $tanggal,
      'gambar'            => $gambar,
      'gambar2'            => $gambar2,
      'gambar3'            => $gambar3
    );

    $where = array(
      'id' => $id
    );

    $this->model_artikel->update_data($where, $data, 'artikel');
    $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Berhasil DiUbah</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
    redirect('admin/dashboard_admin/index');
  }


  public function hapus($id)
  {
    $where = array('id' => $id);
    $this->model_artikel->hapus_data($where, 'artikel');
    $this->session->set_flashdata('flash', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Berhasil DiHapus</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
    redirect('admin/dashboard_admin/index');
  }
}

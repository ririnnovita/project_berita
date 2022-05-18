<?php

class Dashboard extends CI_Controller
{



  public function detail($id)
  {
    $data['artikel'] = $this->model_artikel->detail_artikel($id);
    $data['artikel_terbaru'] = $this->model_artikel->getArtikelTerbaru();
    $data['komentar'] = $this->model_review->komen_per_artikel($id);
    $this->load->view('templates/header');
    // $this->load->view('templates/sidebar', $data);
    $this->load->view('detail_artikel', $data);
    $this->load->view('templates/footer');
  }
}

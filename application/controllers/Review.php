<?php

class Review extends CI_Controller
{
    public function tambah()
    {
        $idartikel = $this->input->post('artikelid');
        $user = $this->input->post('username');
        $komen = $this->input->post('isikomen');
        date_default_timezone_set('asia/jakarta');
        $date = date('Y-m-d H:i:s');

        $data = array(
            'artikel_id' => $idartikel,
            'user' => $user,
            'isi_komentar' => $komen,
            'date_created' => $date,
        );

        // var_dump($data);
        $this->model_review->tambah_review($data, 'review');

        redirect('dashboard/detail/' . $idartikel);
    }
}

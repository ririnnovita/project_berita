<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
            'required' => 'Password wajib diisi!',
            'matches' => 'Password tidak cocok',
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('registrasi');
        } else {
            $data = array(
                'id'        => '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
                'role_id'   => 2
            );

            $this->db->insert('user', $data);
            redirect('auth/login');
        }
    }
}

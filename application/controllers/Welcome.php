<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->model('model_artikel');
		$this->load->library('pagination');

		// $data['artikel'] = $this->model_artikel->getDataArtikel();
		$data['artikel_terbaru'] = $this->model_artikel->getArtikelTerbaru();
		if ($this->input->post('keyword')) {
			$data['artikel'] = $this->model_artikel->cariDataArtikel();
		}



		$page = ($this->uri->segment(1)) ? $this->uri->segment(1) : 0;

		$config['base_url']         = site_url();
		$config['total_rows']       = $this->model_artikel->countAll();
		$config['per_page']         = 3;
		$config['uri_segment']      = 1;
		// $config['num_links']        = 2;
		$config['use_page_numbers'] = TRUE;

		//Konfigurasi pagination bootstrap.css
		$config['full_tag_open']    = '<ul class="pagination">';
		$config['full_tag_close']   = '</ul>';
		$config['first_link']       = false;
		$config['last_link']        = false;
		$config['first_tag_open']   = '<li>';
		$config['first_tag_close']  = '</li>';
		$config['prev_link']        = '&laquo';
		$config['prev_tag_open']    = '<li class="prev">';
		$config['prev_tag_close']   = '</li>';
		$config['next_link']        = '&raquo';
		$config['next_tag_open']    = '<li>';
		$config['next_tag_close']   = '</li>';
		$config['last_tag_open']    = '<li>';
		$config['last_tag_close']   = '</li>';
		$config['cur_tag_open']     = '<li class="active"><a href="#">';
		$config['cur_tag_close']    = '</a></li>';
		$config['num_tag_open']     = '<li>';
		$config['num_tag_close']    = '</li>';

		$this->pagination->initialize($config);

		$offset = ($page == 0) ? $offset = 0 : $offset = ($page - 1) * $config['per_page'];

		$data['artikel'] = $this->model_artikel->fetchArtikel($config['per_page'], $offset);
		$data['links'] = $this->pagination->create_links();

		$this->load->view('templates/header');
		// $this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}

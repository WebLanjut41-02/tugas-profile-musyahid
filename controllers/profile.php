<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function proses()
	{
		$data['nama']  = $this->input->post("nama");
		$data['email'] = $this->input->post("email");
		$data['telp'] = $this->input->post("telp");
		$data['kategori'] = $this->input->post("kategori");
		$data['pesan'] = $this->input->post("pesan");

		$this->load->view('tampil', $data);
	}

}

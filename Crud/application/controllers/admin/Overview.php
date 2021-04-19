<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
				$data['user'] = $this->Mahasiswa_model->getAll()->result();
        $this->template->views('admin/data_mahasiswa', $data);
	}

	public function tambah()
	{
		$this->template->views('admin/tambah');
	}

	public function input(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data, 'tm_user');
		redirect('admin/Overview/index');
	}
}
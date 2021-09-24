<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->input->post()) {
			if ($this->mLogin->doLogin()) redirect(site_url('Home'));
		}
		$data = [
			'title' => 'Login'
		];

		$data = $this->load->view('layout/header',$data);
		$this->load->view('vLogin', $data);
		$data = $this->load->view('layout/footer');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

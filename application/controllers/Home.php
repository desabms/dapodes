<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLogin');
        if ($this->mLogin->isNotLogin()) redirect(site_url('login'));
    }
    function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        $data = $this->load->view('layout/header',$data);
        $data = $this->load->view('layout/sidebar');
        $data = $this->load->view('layout/navbar');
        $this->load->view('index', $data);
        $data = $this->load->view('layout/footer');
    }
}

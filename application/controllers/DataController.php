
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData');
        $mdb = array('ModelData','mLogin');
        $this->load->model($mdb);
        if ($this->$mdb->isNotLogin()) redirect(site_url('login'));
    }
    function index()
    {
      $data['user'] = $this->$mdb->getAll();
      $data = array(
          'title'     => 'Dashboard'
      );
        $data = $this->load->view('layout/header');
        $data = $this->load->view('layout/sidebar');
        $data = $this->load->view('layout/navbar');
        $this->load->view('vDataum', $data);
        $data = $this->load->view('layout/footer');
    }
}

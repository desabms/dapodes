
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('ModelData');
        // $mdb = array('ModelData','mLogin');
        $this->load->model('mLogin');
        $this->load->model('ModelData');
        if ($this->mLogin->isNotLogin()) redirect(site_url('login'));
    }
    public function index()
    {
        $data['users'] = $this->ModelData->getAll();
        $data ['title'] = 'UMKM';
        $this->load->view('layout/header',$data);
        $this->load->view('layout/sidebar');
         $this->load->view('layout/navbar');
        $this->load->view('admin/ViewData', $data);
         $this->load->view('layout/footer');
    }

      public function Edit(){

      }
}

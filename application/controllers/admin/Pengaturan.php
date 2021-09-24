<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('ModelPengaturan');
    $this->load->model('mLogin');
    if ($this->mLogin->isNotLogin()) redirect(site_url('login'));

  }

  public function index(){
    $data['bu']= $this->ModelPengaturan->getDataBU();
    $data['tu']= $this->ModelPengaturan->getDataTU();
    $data['ju']= $this->ModelPengaturan->getDataJU();
    $data ['title'] = 'Pengaturan';
    $this->load->view('layout/header',$data);
    $this->load->view('layout/sidebar');
     $this->load->view('layout/navbar');
    $this->load->view('admin/viewPengaturan',$data);
    $this->load->view('layout/footer');

  }

// Controller Tambah Data Bidang Usaha
  public function addDataBU(){
    $bidangusaha = $this->ModelPengaturan;
    $validation = $this->form_validation;
    $validation->set_rules($bidangusaha->rulesBU());

    if ($validation->run()) {
      $check = $bidangusaha->addDataBU();
      $this->session->set_flashdata('msg','Bidang Usaha Berhasil Di Tambah!');
      redirect('admin/Pengaturan');
    }
      redirect('admin/Pengaturan');
  }
  // Akhir Controller Tambah Data Bidang Usaha

// Controller Edit Data Bidang Usaha
  public function EditBU(){
    $bidangusaha = $this->ModelPengaturan;
    $validation = $this->form_validation;
    $validation->set_rules($bidangusaha->rulesBU());

    if ($validation->run()) {
      $bidangusaha->updateBU();
      $this->session->set_flashdata('msg','Bidang Usaha Berhasil di Edit!');

    }
    redirect('admin/Pengaturan');
  }
  // Akhir Controller Edit Data Bidang Usaha

// Controller Tambah Data Tipe Usaha
  public function addDataTU(){

    $tipeusaha = $this->ModelPengaturan;
    $validation = $this->form_validation;
    $validation->set_rules($tipeusaha->rulesTU());

    if ($validation->run()) {
      $tipeusaha->addDataTU();
      $this->session->set_flashdata('msg','Tipe Usaha Berhasil Di Tambah!');
      redirect('admin/Pengaturan');
    }
    redirect('admin/Pengaturan');
  }
// Akhir Controller Tambah Data Tipe Usaha

// Controller Edit Data Tipe Usaha
public function EditTU(){
    $tipeusaha = $this->ModelPengaturan;
    $validation = $this->form_validation;
    $validation->set_rules($tipeusaha->rulesTU());

    if ($validation->run()) {
      $tipeusaha->updateTU();
      $this->session->set_flashdata('msg','Tipe Usaha Berhasil di Edit!');
      redirect('admin/Pengaturan');
    }
    redirect('admin/Pengaturan');
  }
  // Akhir Controller Edit Data Tipe Usaha

  // Controller Tambah Data Jenis Usaha
  public function addDataJU(){

    $jenisusaha = $this->ModelPengaturan;
    $validation = $this->form_validation;
    $validation->set_rules($jenisusaha->rulesJU());

    if ($validation->run()) {
      $jenisusaha->addDataJU();
      $this->session->set_flashdata('msg','Jenis Usaha Berhasil Di Tambah!');
      redirect('admin/Pengaturan');
    }
    redirect('admin/Pengaturan');
  }
  // Akhir Controller Tambah Data Jenis USaha

  // Controller Edit Data Jenis Usaha
  public function EditJU(){
      $jenisusaha = $this->ModelPengaturan;
      $validation = $this->form_validation;
      $validation->set_rules($jenisusaha->rulesJU());

      if ($validation->run()) {
        $jenisusaha->updateJU();
        $this->session->set_flashdata('msg','Jenis Usaha Berhasil di Edit!');
        redirect('admin/Pengaturan');
      }
      redirect('admin/Pengaturan');
    }
  // Akhir Controller Edit Data Jenis USaha
}

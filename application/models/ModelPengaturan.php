<?php


class ModelPengaturan extends CI_Model
{

private $tbl_tu = "tipeusaha";
private $tbl_bu = "bidangusaha";
private $tbl_ju = "jenisusaha";

public function rulesBU(){
  return [
    [
      'field' => 'kd_bidangusaha',
      'label' => 'kd_bidangusaha',
      'rules' => 'required|min_length[5]|max_length[5]'
    ],
    [
      'field' => 'nama_bidangusaha',
      'label' => 'nama_bidangusaha',
      'rules' => 'required'

    ]
  ];
}
  public function rulesTU(){
    return [
      [
        'field' => 'kd_tipeusaha',
        'label' => 'kd_tipeusaha',
        'rules' => 'required|min_length[5]|max_length[5]'
      ],
      [
        'field' => 'nama_tipeusaha',
        'label' => 'nama_tipeusaha',
        'rules' => 'required'

      ]
    ];
  }
  public function rulesJU(){
    return [
      [
        'field' => 'kd_jenisusaha',
        'label' => 'kd_jenisusaha',
        'rules' => 'required|min_length[5]|max_length[5]'
      ],
      [
        'field' => 'nama_jenisusaha',
        'label' => 'nama_jenisusaha',
        'rules' => 'required'

      ]
    ];
  }

// Model Bidang Usaha
  public function getDataBU(){//Tampilkan Data Bidang Usaha
    $data =$this->db->query("SELECT kd_bidangusaha, nama_bidangusaha FROM bidangusaha");
    return $data->result();
  }

  public function addDataBU(){
    $post = $this->input->post();
    $this->kd_bidangusaha = $post["kd_bidangusaha"];
    $this->nama_bidangusaha = $post["nama_bidangusaha"];
    $this->db->insert($this->tbl_bu,$this);

  }

  public function updateBU(){
    $post = $this->input->post();
    $this->kd_bidangusaha = $post["kd_bidangusaha"];
    $this->nama_bidangusaha = $post["nama_bidangusaha"];

    $this->db->update($this->tbl_bu,$this,array('kd_bidangusaha' => $post['kd_bidangusaha']));
  }
  // Akhir Model Data Bidang Usaha

  // Model Data Tipe Usaha
  public function getDataTU(){
    $data =$this->db->query("SELECT kd_tipeusaha, nama_tipeusaha FROM tipeusaha");
    return $data->result();
  }

  public function addDataTU(){
    $post = $this->input->post();
    $this->kd_tipeusaha = $post["kd_tipeusaha"];
    $this->nama_tipeusaha = $post["nama_tipeusaha"];
    $this->db->insert($this->tbl_tu,$this);
  }

  public function updateTU(){
    $post = $this->input->post();
    $this->kd_tipeusaha = $post["kd_tipeusaha"];
    $this->nama_tipeusaha = $post["nama_tipeusaha"];
    // $this->update_at = $post["nama_tipeusaha"];


    $this->db->update($this->tbl_tu,$this,array('kd_tipeusaha'=>$post['kd_tipeusaha']));
  }
  // Akhir Modal Tipe Usaha

  // Modal Data Jenis Usaha
  public function getDataJu(){
    $data = $this->db->query("SELECT kd_jenisusaha, nama_jenisusaha FROM jenisusaha");
    return $data->result();
  }

  public function addDataJU(){
    $post = $this->input->post();
    $this->kd_jenisusaha = $post["kd_jenisusaha"];
    $this->nama_jenisusaha = $post["nama_jenisusaha"];
    $this->db->insert($this->tbl_ju,$this);
  }

  public function updateJU(){
    $post = $this->input->post();
    $this->kd_jenisusaha = $post["kd_jenisusaha"];
    $this->nama_jenisusaha = $post["nama_jenisusaha"];

    $this->db->update($this->tbl_ju,$this,array('kd_jenisusaha'=>$post['kd_jenisusaha']));
  }
  // Akhir Modal Jenis Usaha
}

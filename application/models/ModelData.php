<?php

/**
 *
 */
class ModelData extends CI_Model

{
 // private $_table = "tbl_petshop";
  // function __construct(argument)
  // {
  //   // code...
  // }
  public function getAll($id = null)
	{
    $this->db->from('umkm');
    if ($id != null) {
      $this->db->where('id',$id);
    }

    $query = $this->db->get();
    return $query;
	}
  public function getData(){
    $data =$this->db->query("SELECT * FROM umkm");

    return $data->result_array();
  }

  // public function filter($search,$limit,$start,$order_failed,$order_ascdesc){
  //   $this->db->LIKE('nama_pemilik',$search);
  //   $this->db->OR_LIKE('nama_usaha',$search);
  //   $this->db->OR_LIKE('jenis_usaha',$search);
  //   $this->db->OR_LIKE('pendapatan',$search);
  //   $this->db->ORDER_BY($order_failed, $order_ascdesc);
  //   $this->db->limit($limit,$start);
  //
  //   return $this->db->get('umkm')->result_array();
  // }
  //
  // public function count_all(){
  //   return $this->db->count_all('umkm');
  // }
  //
  // public function count_filter($search){
  //   $this->db->LIKE('nama_pemilik',$search);
  //   $this->db->OR_LIKE('nama_usaha',$search);
  //   $this->db->OR_LIKE('jenis_usaha',$search);
  //   $this->db->OR_LIKE('pendapatan',$search);
  //
  //   return $this->db->get('umkm')->num_rows();
  // }
}

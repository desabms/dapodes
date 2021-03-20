<?php

/**
 *
 */
class ModelData extends CI_Model

{
 private $_table = "tbl_petshop";
  // function __construct(argument)
  // {
  //   // code...
  // }

  public function getAll()
	{
    $data = $this->db->query("SELECT * from tbl_umkm");
    return $data->result();
	}
}

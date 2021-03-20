<?php

class modelApi extends CI_Model
{
    public $_table = "tbl_user";

    function save_user($data)
    {
        // return $this->db->insert($this->_table, $data);
        $data = "INSERT INTO tbl_user SET
                    nama = '{$data['nama']}',
                    username = '{$data['username']}',
                    handphone = '{$data['handphone']}',
                    password = '{$data['password']} ";
        return $this->db->query($data);
    }
}

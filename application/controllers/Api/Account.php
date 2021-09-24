<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

// require APPPATH . '/libraries/REST_Controller.php';

// use Restserver\Libraries\REST_Controller;

class Account extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelApi', 'modelApi');
        // $this->model = $this->modelApi;
    }

    function Register_post()
    {
        // {
        $nama = $this->post('nama');
        $username = $this->post('username');
        $handphone = $this->post('handphone');
        $password = $this->post('password');
        $password = md5($password);

        $query = $this->db->query("SELECT username, password FROM tbl_user WHERE username='{$username}'");
        if ($query->num_rows > 0) {
            $this->response(array('error' => 'duplicate'), 200);
        } else {
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'handphone' => $handphone,
                'password' => $password,
                'active' => '1'
            );

            $response = $this->modelApi->save_user($data);
            if ($response>0) {
                $this->response(['error' => false, 'message' => 'Registrasi Berhasil', 'Result' => $data], 200);
            } else {
                $this->response(['error' => false, 'message' => 'Registrasi gagal'], 404);
            }

            $query = $this->db->query("SELECT id_user FROM tbl_user WHERE username='{$username}'");

            //set session after user signup successfully
            if ($query->num_rows == 1) {
                $result = $query->result();
                $id = $result[0]->id;
                $this->session->set_userdata('id_user', $id);
                $this->response(array('status' => 'success', 'id_user' => $id), 200);
            }
        }

        // echo 'Total Results: ' . $query->num_rows();



        // $data = [
        //     'nama' => $this->input->post('nama', TRUE),
        //     'username' => $this->input->post('username', TRUE),
        //     'handphone' => $this->input->post('handphone', TRUE),
        //     'password' => MD5($this->input->post('password', TRUE)),
        //     // 'password' => password_hash($password, PASSWORD_BCRYPT),
        //     'active' => '1'
        // ];

        // $res = $this->modelApi->save_user($data);

        // // print_r($res);
        // if ($res > 0) {
        //     $this->response([
        //         'status' => true,
        //         'message' => 'berhasil membuat postingan'
        //     ], 200);
        // } else {
        //     $this->response([
        //         'status' => false,
        //         'message' => 'gagal membuat postingan'
        //     ], 401);
        // }




        // $data = [
        //     'nama' => $this->input->post('nama', TRUE),
        //     'username' => $this->input->post('username', TRUE),
        //     'handphone' => $this->input->post('handphone', TRUE),
        //     'password' => MD5($this->input->post('password', TRUE)),
        //     // 'password' => password_hash($password, PASSWORD_BCRYPT),
        //     'active' => '1'
        // ];

        // $response = $this->modelApi->save_user($data);
        // if ($response) {
        //     $this->response(['error' => false, 'message' => 'Register Berhasil', 'Result' => $data], 200);
        // } else {
        //     $this->response(['error' => true, 'message' => 'Register Gagal'], 404);
        // }
    }

    function login_post()
    {
    }
}

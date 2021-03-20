<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class notfound extends CI_Controller
{
    public function index()
    {
        $this->load->view('notfound');
        // $this->template->render('error_404', array());
    }
}

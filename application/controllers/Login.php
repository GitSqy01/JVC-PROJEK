<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data['isi'] = 'login';
        $this->load->view('layouts/wrapper', $data);

    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['isi'] = 'Bawahan/dashboard';
        $this->load->view('layouts/wrapper', $data);
    }
}

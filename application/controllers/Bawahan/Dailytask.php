<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dailytask extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'User Manage';
        $data['isi'] = 'Bawahan/dailytask';
        $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

        $this->load->view('layouts/wrapper', $data);
    }
}

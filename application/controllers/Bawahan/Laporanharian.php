<?php
defined('BASEPATH') or exit('No direct  script access allowed');

class Laporanharian extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Laporan harian';
        $data['isi'] = 'Bawahan/laporanharian';
        $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

        $this->load->view('layouts/wrapper', $data);
    }
}

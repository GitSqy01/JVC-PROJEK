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

    public function addRecord(){
        // Ambil input 'program'
        $balance = $this->input->get('program'); 
        $info = $this->input->get('info');
        $nik = $this->session->userdata('nik');
    
        // Cek apakah 'program' adalah array atau string
        if (is_array($balance)) {
            // Jika array, gabungkan dengan koma
            $balanceString = implode(',', $balance);
        } else {
            // Jika bukan array, berarti hanya ada satu input, jadi langsung gunakan nilai tersebut
            $balanceString = $balance;
        }
    
        // Mempersiapkan data untuk insert
        $data = [
            'nik_user' => $nik,
            'balancing_prog' => $balanceString,  // Simpan string 'balance' yang sudah digabungkan
            'info' => $info,
        ];
    
        // Masukkan data ke dalam database
        $this->db->insert('laporan', $data);
    
        // Redirect setelah selesai menyimpan
        redirect('bawahan/laporanharian','refresh');
    }
    
    
}

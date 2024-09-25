<?php
defined('BASEPATH') or exit('No direct  script access allowed');

class Laporanharian extends CI_Controller
{
    public function index()
    {
        if($this->session->userdata('bagian') == 'Main Program'){
            $data['judul'] = 'Laporan harian';
            $data['isi'] = 'Bawahan/laporanharian';
            $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
    
            $this->load->view('layouts/wrapper', $data);
        }elseif($this->session->userdata('bagian') == 'Sub Program'){
            $data['judul'] = 'Laporan harian';
            $data['isi'] = 'Bawahan/laporanharian_sub';
            $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
            
            $this->load->view('layouts/wrapper', $data);
        }elseif($this->session->userdata('bagian') == 'Document'){
            $data['judul'] = 'Laporan harian';
            $data['isi'] = 'Bawahan/laporanharian_doc';
            $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
            
            $this->load->view('layouts/wrapper', $data);
        }
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
        $this->db->insert('laporan_main_program', $data);
    
        // Redirect setelah selesai menyimpan
        redirect('bawahan/laporanharian','refresh');
    }

    public function addRecordSubProgram() {
        // Ambil input 'program'
        $zlist =  $this->input->get('zlist');
        $balance = $this->input->get('program'); 
        $info = $this->input->get('info');
        $nik = $this->session->userdata('nik');

        // Cek apakah 'program' adalah array atau string
        if (is_array($balance) && is_array($zlist)) {
            // Jika array, gabungkan dengan koma
            $balanceString = implode(',', $balance);
            $zlistString = implode(',', $zlist);
        } else {
            // Jika bukan array, berarti hanya ada satu input, jadi langsung gunakan nilai tersebut
            $balanceString = $balance;
            $zlistString = $zlist;
        }

        // Mempersiapkan data untuk insert
        $data = [
            'nik_user' => $nik,
            'zlist' => $zlistString,
            'balance' => $balanceString,  // Simpan string 'balance' yang sudah digabungkan
            'info' => $info,
        ];

        // Masukkan data ke dalam database
        $this->db->insert('laporan_sub_program', $data);

        // Redirect setelah selesai menyimpan
        redirect('bawahan/laporanharian','refresh');

    }

    public function addRecordDoc() {
        // Ambil input 'program'
        $alteration = $this->input->get('alteration'); 
        $common = $this->input->get('common');
        $subcont = $this->input->get('subcont');
        $info = $this->input->get('info');
        $nik = $this->session->userdata('nik'); 

        // Cek apakah 'program' adalah array atau string
        if (is_array($alteration)) {
            // Jika array, gabungkan dengan koma
            $alterationString = implode(',', $alteration);
        } else {
            // Jika bukan array, berarti hanya ada satu input, jadi langsung gunakan nilai tersebut
            $alterationString = $alteration;
        }

        // Mempersiapkan data untuk insert
        $data = [
            'nik_user' => $nik,
            'alteration' => $alterationString,  // Simpan string 'balance' yang sudah digabungkan
            'common_array' => $common,
           'subcont' => $subcont,
            'info' => $info,
        ];

        // Masukkan data ke dalam database
        $this->db->insert('laporan_document', $data);

        // Redirect setelah selesai menyimpan
        redirect('bawahan/laporanharian','refresh');

    }
}

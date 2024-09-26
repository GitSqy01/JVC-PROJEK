<?php
    class ModelReport extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function getReportDaily($nik_user){
            $this->db->select('*');
            $this->db->from('laporan_main_program');
            $this->db->where('nik_user',$nik_user);
            $this->db->order_by('tanggal_input','DESC');
            return $this->db->get()->result_array();
        }

        public function getReportDailySubProgram($nik) {
            $this->db->select('DATE(tanggal_input) as tanggal, GROUP_CONCAT(zlist SEPARATOR ", ") as zlist, GROUP_CONCAT(balance SEPARATOR ", ") as balance,
            GROUP_CONCAT(info SEPARATOR ", ") as info, tanggal_input');
            $this->db->from('laporan_sub_program');
            $this->db->where('nik_user', $nik);
            $this->db->group_by('DATE(tanggal_input)');  // Menggabungkan data berdasarkan tanggal
            $this->db->order_by('tanggal_input', 'DESC'); // Mengurutkan berdasarkan tanggal
            return $this->db->get()->result_array();
        }

        public function getReportDailyDocumnet($nik){
            $this->db->select('DATE(tanggal_input) as tanggal, GROUP_CONCAT(alteration SEPARATOR ", ") as alteration,
            common_array, subcont, info, tanggal_input as');
            $this->db->from('laporan_document');
            $this->db->where('nik_user',$nik);
            $this->db->group_by('DATE(tanggal_input)');
            $this->db->order_by('tanggal_input', 'DESC');
            return $this->db->get()->result_array();
        }
        
    }
?>
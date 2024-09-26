<?php
    class Dailyreportresult extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            if($this->session->userdata('bagian') == 'Main Program'){
                $data['judul'] = 'Daily Report Result';
                $data['isi'] = 'Bawahan/dailyreportresult';
                $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
                $data['report'] = $this->ModelReport->getReportDaily($this->session->userdata('nik'));
                
                $this->load->view('layouts/wrapper', $data);
            }elseif($this->session->userdata('bagian') == 'Sub Program'){
                $data['judul'] = 'Daily Report Result';
                $data['isi'] = 'Bawahan/dailyreport_SubProgram';
                $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
                $data['report'] = $this->ModelReport->getReportDailySubProgram($this->session->userdata('nik'));
                
                $this->load->view('layouts/wrapper', $data);
            }elseif($this->session->userdata('bagian') == 'Document'){
                $data['judul'] = 'Daily Report Result';
                $data['isi'] = 'Bawahan/dailyreport_Documents';
                $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
                $data['report'] = $this->ModelReport->getReportDailyDocumnet($this->session->userdata('nik'));
                
                $this->load->view('layouts/wrapper', $data);
            }
        }
    }

?>
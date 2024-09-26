<?php
    class Printer extends CI_Controller {
        public function __construct() {
            parent::__construct();
            // $this->load->library('fpdf');
        }

        public function print_report() {
            // Load the model
            // $this->load->model('ModelReport');
            $this->load->view('printer/excel');
        }
    }


?>
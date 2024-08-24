<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim', [
            'required' => 'NIK Harus Diisi !!',

        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus Diisi !!'
        ]);


        if ($this->form_validation->run() == false) {
            $data['isi'] = 'login';
            $data['judul'] = 'Login';
            $data['validation_errors'] = validation_errors();
            $this->load->view('layouts/wrapper', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        // Ambil data pengguna berdasarkan NIK
        $user = $this->db->get_where('user', ['nik' => $nik])->row_array();

        // Cek apakah pengguna ada
        if ($user) {
            // Verifikasi password (langsung dibandingkan tanpa hash)
            if ($user['password'] === $password) {
                // Password cocok, set session dan redirect
                $this->session->set_userdata('nik', $user['nik']);
                $this->session->set_userdata('nama', $user['nama']);
                $this->session->set_userdata('role_id', $user['role_id']);

                if ($user['role_id'] == 1) {
                    redirect('atasan/dashboard');
                } else {
                    redirect('Bawahan/Dashboard');
                }
            } else {
                // Password tidak cocok
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 Password salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
              </div>');
                redirect('login');
            }
        } else {
            // Pengguna tidak ditemukan
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             Akun tidak ditemukan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>');
            redirect('login');
        }
    }




    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

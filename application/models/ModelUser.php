<?php
class ModelUser extends CI_Model
{
    // Metode untuk login
    public function login($nik, $password)
    {
        $this->db->where('nik', $nik);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $user = $query->row();


            if (password_verify($password, $user->password)) {
                return $user;
            }
        }

        return false;
    }


    public function register($data)
    {

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $this->db->insert('user', $data);
    }


    public function get_user_by_nik($nik)
    {
        $this->db->where('nik', $nik);
        $query = $this->db->get('user');

        return $query->row();
    }
}

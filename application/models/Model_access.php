<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_access extends CI_Model
{
    private $_table = 'tbl_access';

    public function login($data)
    {
        $hasil = false;

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() !== false) {
            $q = $this->db->get_where($this->_table, $data)->num_rows();
            if ($q > 0) {
                $this->session->set_flashdata('berhasil', 'Login berhasil.');
                $hasil = true;
            } else {
                $this->session->set_flashdata('gagal', 'Login gagal. Username atau password salah.');
                $hasil = false;
            }
        }

        return $hasil;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Home');
    }

    public function manager()
    {
        $this->load->view('Auth_manager');
    }

    public function gudang($action = '')
    {
        if ($action == '') {
            $this->load->view('Auth_gudang');
        } elseif ($action == 'login') {
            $this->load->model('Model_access', 'access');

            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );

            if ($this->access->login($data)) {
                redirect('gudang');
            } else {
                $this->gudang();
            }
        } elseif ($action == 'logout') {
            $this->load->model('Model_access', 'access');
            $this->access->logout();
        }

    }

    public function operator()
    {
        $this->load->view('Auth_operator');
    }
}

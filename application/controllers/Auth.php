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

    public function gudang()
    {
        $this->load->view('Auth_gudang');
    }

    public function operator()
    {
        $this->load->view('Auth_operator');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_data');
        $this->load->helper(array('url', 'download'));
    }

    public function login()
    {
        $this->load->view('templates/header');
        $this->load->view('home/login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('home/pertama');
        $this->load->view('templates/footer');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->load->model('M_data');
        $this->M_data->ambillogin($username, $password);
    }

    public function daftar()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('home/daftar');
    }

    public function proses_daftar()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $data['user'] = $this->M_data->proses_daftar();
        $this->session->set_flashdata('login-failed', 'Daftar Berhasil Silahkan Masukkan Username dan Password tersebut kembali');
        redirect('auth/login');
    }

    public function logout()
    {
        session_destroy();
        redirect('auth');
    }

    public function force_download()
    {
        force_download('files/buku_manual.pdf', NULL);
        # code...
    }
}

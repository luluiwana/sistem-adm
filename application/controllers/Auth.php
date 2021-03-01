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
        $data['title'] = "Login";
        $this->load->view('templates/invisible-header',$data);
        $this->load->view('templates/login');
    }

    public function index()
    {
        $this->load->view('templates/landing-page');
        $this->load->model('M_data');

    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        
        $this->M_data->ambillogin($username, $password);
    }

    public function daftar()
    {
        $data['title'] = "Buat Akun Baru";
        $data['kelas']=$this->M_data->getKelas();
        $this->load->view('templates/invisible-header',$data);
        $this->load->view('templates/daftar');

    }

    public function proses_daftar()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $data['user'] = $this->M_data->proses_daftar();
        $this->session->set_flashdata('login-failed', 'Pendaftaran Berhasil, Silahkan login menggunakan username dan password');
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
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->model('auth_model');
    }

    function index()
    {
        if ($this->session->userdata('lvl') == 1) {
            redirect('admin/index');
        }
        $this->load->view('layouts/login_header', ['title' => 'login']);
        $this->load->view('login');
        $this->load->view('layouts/login_footer');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->auth_model->cek_login("tb_user", $where)->num_rows();
        $user = $this->auth_model->cek_login("tb_user", $where)->row_array();
        if ($cek > 0) {

            $data_session = array(
                'id_user' => $user['id'],
                'username' => $user['username'],
                'password' => $user['password'],
                'lvl' => $user['level'],
                'status' => TRUE
            );

            $this->session->set_userdata($data_session);

            $this->session->set_flashdata('success', 'Login Berhasil');
            if ($this->session->userdata('lvl') == 1) {
                redirect(base_url("admin/index"));
            } else {
                $this->session->set_flashdata('error', 'Anda tidak memiliki Akses!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('error', 'Anda tidak memiliki Akses!');
            redirect('auth');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}

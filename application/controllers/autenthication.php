<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autenthication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
    }
    public function index()
    {
        // validasi input
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == FALSE) { // jika validasi gagal
            $data['title'] = 'Login Page';
            $this->load->view('layouts/users/head', $data);
            $this->load->view('autenthication/login');
            $this->load->view('layouts/users/footer');
        } else { // jika validasi selesai
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $get_user = $this->auth->login($email);
            if (password_verify($password, $get_user->password)) {
                // menentukan data yang akan di masukan kedalam session
                $ses_user = [
                    'id_user' => $get_user->id_user,
                    'name' => $get_user->name,
                    'Image' => $get_user->Image,
                ];
                $this->session->set_userdata($ses_user); // membuat session data user
                redirect(base_url('admin'));
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

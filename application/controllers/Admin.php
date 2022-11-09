<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['articles'] = $this->db->get('article')->result();
        $this->load->view('layouts/admin/head', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('layouts/admin/footer');
    }

    public function galery()
    {
        $this->load->view('layouts/admin/head');
        $this->load->view('admin/galery/index');
        $this->load->view('layouts/admin/footer');
    }

    public function create_galery()
    {
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts/admin/head');
            $this->load->view('admin/galery/create');
            $this->load->view('layouts/admin/footer');
        } else {

            $config['upload_path']          = FCPATH . './assets/images/artikel/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['file_name']            = 'artikel_' . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                $image = $this->upload->data();

                redirect('article');
            }
        }
    }
}

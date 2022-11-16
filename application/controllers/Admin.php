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
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function edit_profile()
    {
        $this->load->view('profile/edit');
    }
    public function show_profile()
    {
        $this->load->view('profile/show');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function create_article()
    {
        $this->load->view('article/create');
    }
    public function update_article()
    {
        $this->load->view('article/update');
    }

    public function delete_article()
    {
        echo "fitur delete";
    }
    public function show_article()
    {
        $this->load->view('article/show');
    }
}

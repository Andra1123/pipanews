<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Beranda | PIPA';
		$this->load->view('layouts/users/head', $data);
		$this->load->view('home');
		$this->load->view('layouts/users/footer');
	}
	public function about()
	{
		$this->load->view('about');
	}
}

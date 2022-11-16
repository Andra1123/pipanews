<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model Article
        $this->load->model('Article_model', 'article');
        // memanggil model Galery
        $this->load->model('Galery_model', 'galery');
    }
    public function index()
    {
        $data['title'] = 'Beranda | PIPA';
        $this->load->view('layouts/users/head', $data);
        $this->load->view('home');
        $this->load->view('layouts/users/footer');
    }

    public function about()
    {
        $data['title'] = 'Beranda | PIPA';
        $this->load->view('layouts/users/head', $data);
        $this->load->view('about');
        $this->load->view('layouts/users/footer');
    }

    // fitur untuk melihat daftar article
    public function article($id_article = null)
    {
        if ($id_article) {
            // mengambil semua data article
            $article = $this->article->ambil_berdasarkan_parameter(['id_article' => $id_article]);
            $data['article'] = $article;
            $data['title'] = $article->title;
            $this->load->view('layouts/users/head', $data);
            $this->load->view('lihat-article');
            $this->load->view('layouts/users/footer');
        } else {
            // mengambil semua data article
            $data['articles'] = $this->article->ambil_semua();
            $data['title'] = 'Daftar Article';
            $this->load->view('layouts/users/head', $data);
            $this->load->view('article');
            $this->load->view('layouts/users/footer');
        }
    }

    // fitur untuk melihat daftar article
    public function galery($id_galery = null)
    {
        if ($id_galery) {
            // mengambil semua data galery
            $galery = $this->galery->ambil_berdasarkan_parameter(['id_galery' => $id_galery]);
            $data['galery'] = $galery;
            $data['title'] = 'Lihat Gallery';
            $this->load->view('layouts/users/head', $data);
            $this->load->view('lihat-galery');
            $this->load->view('layouts/users/footer');
        } else {
            // mengambil semua data galery
            $data['galleries'] = $this->galery->ambil_semua();
            $data['title'] = 'Daftar Galery';
            $this->load->view('layouts/users/head', $data);
            $this->load->view('galery');
            $this->load->view('layouts/users/footer');
        }
    }
}

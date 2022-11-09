<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model', 'article');
    }
    public function index()
    {
        $data['articles'] = $this->article->ambil_semua();
        $this->load->view('layouts/admin/head', $data);
        $this->load->view('article/index');
        $this->load->view('layouts/admin/footer');
    }

    public function create_article()
    {
        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Judul harus di isi'
        ]);
        $this->form_validation->set_rules('description', "Deskripsi", "required", [
            'required' =>  "Deskripsi Harus Ada!"
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts/admin/head');
            $this->load->view('article/create');
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
                $article = [
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'date_upload' => date('Y-m-d'),
                    'image' => $image['file_name'],
                ];
                $this->article->simpan($article);
                redirect('article');
            }
        }
    }
    public function update_article()
    {
        $this->load->view('article/update');
    }

    public function delete_article($id_artikel, $file_name)
    {
        $article = [
            'id_article' => $id_artikel,
            'file_name' => $file_name
        ];
        $this->article->delete($article);
        redirect('article');
    }
    public function show_article($id_artikel)
    {
        $data['article'] = $this->article->ambil_berdasarkan_parameter(['id_article' => $id_artikel]);
        $this->load->view('layouts/admin/head', $data);
        $this->load->view('article/show');
        $this->load->view('layouts/admin/footer');
    }
}

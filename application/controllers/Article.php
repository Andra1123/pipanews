<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model Article
        $this->load->model('Article_model', 'article');
    }

    // fitur untuk melihat daftar article
    public function index()
    {
        // mengambil semua data article
        $data['articles'] = $this->article->ambil_semua();
        $this->load->view('layouts/admin/head', $data);
        $this->load->view('article/index');
        $this->load->view('layouts/admin/footer');
    }

    // Fitur untuk menambah article
    public function create_article()
    {
        // Validasi input
        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Judul harus di isi'
        ]);
        $this->form_validation->set_rules('description', "Deskripsi", "required", [
            'required' =>  "Deskripsi Harus Ada!"
        ]);
        // jika validasi gagal
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

            // jika upload gagal
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
                redirect('umum/article');
            }
        }
    }
    // fitur untuk merubah article
    public function update_article($id_article = null)
    {
        // validasi input
        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Judul harus di isi'
        ]);
        $this->form_validation->set_rules('description', "Deskripsi", "required", [
            'required' =>  "Deskripsi Harus Ada!"
        ]);
        // jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            // mengambil data artikel berdasarkan id yang di tentukan
            $data['article'] = $this->article->ambil_berdasarkan_parameter(['id_article' => $id_article]);

            // memanggil file yang ada di folder view dengan mengirim data
            $this->load->view('layouts/admin/head', $data);
            $this->load->view('article/update');
            $this->load->view('layouts/admin/footer');
        } else {
            // mendefinisikan data article
            $article = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'date_upload' => date('Y-m-d')
            ];

            // jika gambar di rubah
            if ($_FILES['image']['name'] != '') {
                $config['upload_path']          = FCPATH . './assets/images/artikel/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 2048;
                $config['file_name']            = 'artikel_' . time();

                $this->load->library('upload', $config);

                // jika upload gagal
                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);
                } else {
                    $image = $this->upload->data();
                    $article['image'] = $image['file_name'];
                }
            } else {
                $article['image'] = $this->input->post('old_image');
            }
            $where = ['id_article' => $id_article];
            $this->article->update($article, $where);
            redirect('article/show_article/' . $id_article);
        }
    }
    // fitur melihat article berdasarkan id tertentu
    public function show_article($id_artikel)
    {
        $data['article'] = $this->article->ambil_berdasarkan_parameter(['id_article' => $id_artikel]);
        $this->load->view('layouts/admin/head', $data);
        $this->load->view('article/show');
        $this->load->view('layouts/admin/footer');
    }

    // fitur untuk menghapus article
    public function delete_article($id_artikel, $file_name)
    {
        $article = [
            'id_article' => $id_artikel,
            'file_name' => $file_name
        ];
        $this->article->delete($article);
        redirect('article');
    }
}

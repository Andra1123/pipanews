<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model Galery
        $this->load->model('Galery_model', 'galery');
    }
    public function index()
    {
        $data['galleries'] = $this->galery->ambil_semua();
        $this->load->view('layouts/admin/head', $data);
        $this->load->view('galery/index');
        $this->load->view('layouts/admin/footer');
    }
    public function show_galery($id_galery = null)
    {
        $data['galery'] = $this->galery->ambil_berdasarkan_parameter(['id_galery' => $id_galery]);
        $this->load->view('layouts/admin/head', $data);
        $this->load->view('lihat-galery');
        $this->load->view('layouts/admin/footer');
    }

    public function create_galery()
    {
        // validasi input
        $this->form_validation->set_rules('description', "Deskripsi", "required", [
            'required' =>  "Deskripsi Harus Ada!"
        ]);
        // jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts/admin/head');
            $this->load->view('galery/create');
            $this->load->view('layouts/admin/footer');
        } else {
            $config['upload_path']          = FCPATH . './assets/images/galery/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['file_name']            = 'galery_' . time();

            $this->load->library('upload', $config);

            // jika upload gagal
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                $image = $this->upload->data();
                $galery = [
                    'image' => $image['file_name'],
                    'description' => $this->input->post('description')
                ];
                $this->galery->simpan($galery);
                redirect('galery');
            }
        }
    }
    // fitur untuk menghapus galery
    public function delete_galery($id_galery, $file_name)
    {
        $galery = [
            'id_galery' => $id_galery,
            'file_name' => $file_name
        ];
        $this->galery->delete($galery);
        redirect('galery');
    }
    // fitur untuk merubah galery
    public function update_galery($id_galery = null)
    {
        // validasi input
        $this->form_validation->set_rules('description', "Deskripsi", "required", [
            'required' =>  "Deskripsi Harus Ada!"
        ]);
        // jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            // mengambil data artikel berdasarkan id yang di tentukan
            $data['galery'] = $this->galery->ambil_berdasarkan_parameter(['id_galery' => $id_galery]);

            // memanggil file yang ada di folder view dengan mengirim data
            $this->load->view('layouts/admin/head', $data);
            $this->load->view('galery/update');
            $this->load->view('layouts/admin/footer');
        } else {
            // mendefinisikan data galery
            $galery = [
                'description' => $this->input->post('description'),
            ];

            // jika gambar di rubah
            if ($_FILES['image']['name'] != '') {
                $config['upload_path']          = FCPATH . './assets/images/galery/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 2048;
                $config['file_name']            = 'galery_' . time();

                $this->load->library('upload', $config);

                // jika upload gagal
                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);
                } else {
                    $image = $this->upload->data();
                    $galery['image'] = $image['file_name'];
                }
            } else {
                $galery['image'] = $this->input->post('old_image');
            }
            $where = ['id_galery' => $id_galery];
            $this->galery->update($galery, $where);
            redirect('galery/show_galery/' . $id_galery);
        }
    }
}

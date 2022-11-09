<?php
class Article_model extends CI_Model
{

    public $title;
    public $description;
    public $image;
    public $date_upload;

    public function ambil_semua()
    {
        $query = $this->db->get('article');
        return $query->result();
    }

    public function ambil_berdasarkan_parameter($where)
    {
        return $this->db->get_where('article', $where)->row();
    }

    public function simpan($data)
    {
        $this->title    = $data['title'];
        $this->description  = $data['description'];
        $this->image  = $data['image'];
        $this->date_upload     = date('Y-m-d');

        $this->db->insert('article', $this);
    }

    public function update()
    {
    }

    public function delete($data)
    {
        $this->db->delete('article', ['id_article' => $data['id_artikel']]);
        unlink(FCPATH . 'assets/images/artikel/' . $data['file_name']);
    }
}

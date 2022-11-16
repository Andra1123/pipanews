<?php
class Article_model extends CI_Model
{
    public $title;
    public $description;
    public $image;
    public $date_upload;

    // mengambil semua data article
    public function ambil_semua()
    {
        $query = $this->db->get('article');
        return $query->result();
    }

    // mengambil data article dengan parameter yang di tuju
    public function ambil_berdasarkan_parameter($where)
    {
        return $this->db->get_where('article', $where)->row();
    }

    // menambah data article
    public function simpan($article)
    {
        $this->title    = $article['title'];
        $this->description  = $article['description'];
        $this->image  = $article['image'];
        $this->date_upload     = date('Y-m-d');

        $this->db->insert('article', $this);
    }

    // merubah data article
    public function update($article, $where)
    {
        $this->title    = $article['title'];
        $this->description  = $article['description'];
        $this->image  = $article['image'];
        $this->date_upload     = date('Y-m-d');

        $this->db->update('article', $this, $where);
    }

    // menghapus data article
    public function delete($article)
    {
        $this->db->delete('article', ['id_article' => $article['id_artikel']]);
        unlink(FCPATH . 'assets/images/artikel/' . $article['file_name']);
    }
}

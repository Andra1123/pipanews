<?php
class Galery_model extends CI_Model
{
    public $image;
    public $description;

    // mengambil semua data galery
    public function ambil_semua()
    {
        $query = $this->db->order_by('id_galery', 'DESC')->get('galery');
        return $query->result();
    }

    // mengambil data galery dengan parameter yang di tuju
    public function ambil_berdasarkan_parameter($where)
    {
        return $this->db->get_where('galery', $where)->row();
    }

    // menambah data galery
    public function simpan($galery)
    {
        $this->image  = $galery['image'];
        $this->description  = $galery['description'];
        $this->db->insert('galery', $this);
    }

    // merubah data galery
    public function update($galery, $where)
    {
        $this->image  = $galery['image'];
        $this->description  = $galery['description'];
        $this->db->update('galery', $this, $where);
    }

    // menghapus data galery
    public function delete($galery)
    {
        $this->db->delete('galery', ['id_galery' => $galery['id_galery']]);
        unlink(FCPATH . 'assets/images/galery/' . $galery['file_name']);
    }
}

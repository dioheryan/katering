<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{
    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

   
    function getKategoriById($id)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
    }
}
?>
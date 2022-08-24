<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
    public function getMenu()
    {
        return $this->db->get('menu')->result_array();
    }

    public function tambahMenu()
    {
        $menu = array(
            "id_menu" => $this->input->post("id_menu"),
            "namaMenu" => $this->input->post("namaMenu"),
        );
        return $this->db->insert('Menu', $menu);
    }

    public function update($id)
    {
        $menu = array(
            "id_menu" => $this->input->post("id_menu"),
            "namaMenu" => $this->input->post("namaMenu"),
           
        );
        $this->db->where('id_menu', $this->input->post('id_menu'));
        $this->db->update('menu', $menu);
    }

    public function hapusMenu($id)
    {
        return $this->db->delete('menu',['id_menu' => $id]);
    }

    public function totalMenu()
    {
        return $this->db->count_all('menu');
    }

    function getMenuById($id)
    {
        return $this->db->get_where('menu', ['id_menu' => $id])->row_array();
    }
}
?>
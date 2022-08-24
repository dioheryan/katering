<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getuser()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahuser()
    {
        $user = array(
            "id_user" => $this->input->post("id_user"),
            "fullname" => $this->input->post("fullname"),
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
            "image" => $this->input->post("image"),
            "id_role" => $this->input->post("id_role"),
        );
        return $this->db->insert('user', $user);
    }

    public function update($id)
    {
        $user = array(
            "id_user" => $this->input->post("id_user"),
            "fullname" => $this->input->post("fullname"),
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
            "image" => $this->input->post("image"),
            "id_role" => $this->input->post("id_role"),
        );
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $user);
    }

    public function hapususer($id)
    {
        return $this->db->delete('user',['id_user' => $id]);
    }

    public function totaluser()
    {
        return $this->db->count_all('user');
    }
    
    function getUserById($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }
}
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
    public function getPelanggan()
    {
        return $this->db->get('pelanggan')->result_array();
    }

    public function tambah()
    {
        $pelanggan = array(
            "id_pelanggan" => $this->input->post("id_pelanggan"),
            "namaPelanggan" => $this->input->post("namaPelanggan"),
            "alamat" => $this->input->post("alamat"),
            "noTelp" => $this->input->post("noTelp"),
        );
        return $this->db->insert('pelanggan', $pelanggan);
    }

    public function update($id)
    {
        $pelanggan = array(
            "namaPelanggan" => $this->input->post("namaPelanggan"),
            "alamat" => $this->input->post("alamat"),
            "noTelp" => $this->input->post("noTelp"),
        );
        $this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
        $this->db->update('pelanggan', $pelanggan);
    }

    public function hapus($id)
    {
        return $this->db->delete('pelanggan',['id_pelanggan' => $id]);
    }

    public function totalpelanggan()
    {
        return $this->db->count_all('pelanggan');
    }
    
    function getPelangganById($id)
    {
        return $this->db->get_where('pelanggan', ['id_pelanggan' => $id])->row_array();
    }
}
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pesanan extends CI_Model
{
    public function getPesanan()
    {
        return $this->db->get('pesanan')->result_array();
    }

    public function tambah()
    {
        $pesanan = array(
            "id_pesanan" => $this->input->post("id_pesanan"),
        );
        return $this->db->insert('pesanan', $pesanan);
    }

    public function update($id)
    {
        $pesanan = array(
            "id_pesanan" => $this->input->post("id_pesanan"),
            
        );
        $this->db->where('id_pesanan', $this->input->post('id_pesanan'));
        $this->db->update('pesanan', $pesanan);
    }

    public function hapuspesanan($id)
    {
        return $this->db->delete('pesanan',['id_pesanan' => $id]);
    }

    public function totalpesanan()
    {
        return $this->db->count_all('pesanan');
    }
    
    function getpesananById($id)
    {
        return $this->db->get_where('pesanan', ['id_pesanan' => $id])->row_array();
    }
}
?>
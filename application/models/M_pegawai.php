<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pegawai extends CI_Model
{
    public function getPegawai()
    {
        return $this->db->get('pegawai')->result_array();
    }

    public function tambahPegawai()
    {
        $pegawai = array(
            "id_pegawai" => $this->input->post("id_pegawai"),
            "nama_pegawai" => $this->input->post("nama_pegawai"),
            "no_telp" => $this->input->post("no_telp"),
            "alamat" => $this->input->post("alamat"),
            "jenis_kelamin" => $this->input->post("jenis_kelamin"),
           
        );
        return $this->db->insert('Pegawai', $pegawai);
    }

    public function update($id)
    {
        $pegawai = array(
            "nama_pegawai" => $this->input->post("nama_pegawai"),
            "no_telp" => $this->input->post("no_telp"),
            "alamat" => $this->input->post("alamat"),
            "jenis_kelamin" => $this->input->post("jenis_kelamin"),
           
        );
        $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
        $this->db->update('Pegawai', $pegawai);
    }

    public function hapusPegawai($id)
    {
        return $this->db->delete('pegawai',['id_pegawai' => $id]);
    }

    public function totalPegawai()
    {
        return $this->db->count_all('pegawai');
    }
    
    function getPegawaiById($id)
    {
        return $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();
    }
}
?>
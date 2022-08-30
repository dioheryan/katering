<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_paket extends CI_Model
{
    public function getPaket()
    {
        return $this->db->get('paket')->result_array();
    }

    function getDetailPaket($id)
    {
        $sql = "SELECT d.*, p.*, m.* FROM (detail_paket AS d) JOIN paket AS p ON d.id_paket = p.id_paket JOIN menu AS m ON m.id_menu = d.id_menu WHERE d.id_paket = $id";
        return $this->db->query($sql)->result_array();
    }

    public function tambahPaket()
    {
        $paket = array(
            "id_paket" => $this->input->post("id_paket"),
            "namaPaket" => $this->input->post("namaPaket"),
            "hargaPaket" => $this->input->post("hargaPaket"),
        );

        $this->db->insert('paket', $paket);

        $last_id = $this->db->insert_id();

        for ($i = 0; $i < count($_POST['id_menu']); $i++) {
            $detail = array(
                'id_detPaket' => $this->input->post("id_paket"),
                'id_paket' => $last_id,
                'id_menu' => $_POST['id_menu'][$i],
                'kuantitas' => $_POST['kuantitas'][$i]
            );
            $this->db->insert('detail_paket', $detail);
        }
    }

    public function update($id)
    {
    }

    public function hapusPaket($id)
    {
        return $this->db->delete('paket', ['id_paket' => $id]);
    }

    public function totalPaket()
    {
        return $this->db->count_all('paket');
    }

    function getPaketById($id)
    {
        return $this->db->get_where('paket', ['id_paket' => $id])->row_array();
    }

    function getDetailPaketByIdPaket($id)
    {
        $sql = "SELECT d.*, p.*, m.* FROM (detail_paket AS d) JOIN paket AS p ON d.id_paket = p.id_paket JOIN menu AS m ON m.id_menu = d.id_menu WHERE d.id_paket = $id";
        return $this->db->query($sql)->row_array();
    }
}

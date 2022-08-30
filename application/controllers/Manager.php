<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
        $this->load->model('M_menu');
        $this->load->model('M_paket');
        $this->load->model('M_pelanggan');
        $this->load->model('M_pesanan');
        $this->load->model('M_kategori');
        is_logged_in();
    }

    //Profile
    public function profile(){
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/profile', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totalpegawai'] = $this->M_pegawai->totalPegawai();
        $data['totalmenu'] = $this->M_menu->totalMenu();
        $data['totalpelanggan'] = $this->M_pelanggan->totalPelanggan();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }
    
    //Pegawai
    public function data_pegawai()
    {
        $data['title'] = 'Data Pegawai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datapegawai'] = $this->M_pegawai->getPegawai();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/data_pegawai', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function form_tambahpegawai()
    {
        $data['title'] = 'Data Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datamenu'] = $this->M_menu->getMenu();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/data_menu', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambahPegawai()
    {
        $data['title'] = 'Tambah Data Pegawai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->M_pegawai->getPegawai();
        $data['jeniskelamin'] = ['Pria', 'Wanita'];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_tambahpegawai', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_tambahPegawai()
    {
        if ($this->M_pegawai->tambahPegawai()) {
            redirect(site_url("manager/data_pegawai"));
        } else {
            redirect(site_url("manager/data_pegawai/tambahPegawai"));
        }
    }

    public function updatePegawai($id)
    {
        $data['title'] = 'Ubah Data Pegawai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datapegawai'] = $this->M_pegawai->getPegawaiById($id);
        $data['jeniskelamin'] = ['Pria', 'Wanita'];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_updatepegawai', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_updatePegawai($id)
    {
        if ($this->M_pegawai->update($id)) {
            redirect(site_url("manager/data_pegawai"));
        } else {
            redirect(site_url("manager/data_pegawai/updatePegawai/$id"));
        }
    }

    public function hapusPegawai($id)
    {
        $this->M_pegawai->hapusPegawai($id);
        redirect(site_url("manager/data_pegawai"));
    }

    //Menu
    public function data_menu()
    {
        $data['title'] = 'Data Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datamenu'] = $this->M_menu->getMenu();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/data_menu', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambahMenu()
    {
        $data['title'] = 'Tambah Data Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->M_menu->getMenu();
        $data['kategori'] = $this->M_kategori->getKategori();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_tambahmenu', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_tambahMenu()
    {
        if ($this->M_menu->tambahMenu()) {
            redirect(site_url("manager/data_menu"));
        } else {
            redirect(site_url("manager/data_menu/tambahMenu"));
        }
    }

    public function updateMenu($id)
    {
        $data['title'] = 'Ubah Data Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datamenu'] = $this->M_menu->getMenuById($id);
        $data['kategori'] = $this->M_kategori->getKategori();
        
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_updatemenu', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_updateMenu($id)
    {
        if ($this->M_menu->update($id)) {
            redirect(site_url("manager/data_menu"));
        } else {
            redirect(site_url("manager/data_menu/updateMenu/$id"));
        }
    }

    public function hapusMenu($id)
    {
        $this->M_menu->hapusMenu($id);
        redirect(site_url("manager/data_menu"));
    }

    //Paket
    public function data_paket_makanan()
    {
        $data['title'] = 'Data Paket Makanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datapaket'] = $this->M_paket->getPaket();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/data_paket_makanan', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambahPaket()
    {
        $data['title'] = 'Tambah Data Paket';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datamenu'] = $this->M_menu->getMenu();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_tambahpaket', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_tambahPaket()
    {
        if ($this->M_paket->tambahPaket()) {
            redirect(site_url("manager/data_paket_makanan"));
        } else {
            redirect(site_url("manager/data_paket_makanan/tambahPaket"));
        }
    }

    public function detailPaket($id)
    {
        $data['title'] = 'Detail Paket';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datadetailpaket'] = $this->M_paket->getDetailPaket($id);
        $data['datapaket'] = $this->M_paket->getPaketById($id);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/detail_paket', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function hapusPaket($id)
    {
        $this->M_paket->hapusPaket($id);
        redirect(site_url("manager/data_paket_makanan"));
    }

    public function updatePaket($id){
        $data['title'] = 'Ubah Data Paket';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datadetailp'] = $this->M_paket->getDetailPaketByIdPaket($id);
        $data['datadetail'] = $this->M_paket->getPaketById($id);
        $data['datamenu'] = $this->M_menu->getMenu();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_updatepaket', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_updatePaket($id)
    {
        if ($this->M_paket->updatePaket($id)) {
            redirect(site_url("manager/data_paket_makanan"));
        } else {
            redirect(site_url("manager/data_paket_makanan/updatePaket/$id"));
        }
    }

    //Data pelanggan
    public function data_pelanggan()
    {
        $data['title'] = 'Data Pelanggan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datapelanggan'] = $this->M_pelanggan->getPelanggan();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/data_pelanggan', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambahPelanggan()
    {
        $data['title'] = 'Tambah Data Pelanggan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->M_pelanggan->getPelanggan();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_tambahpelanggan', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_tambahPelanggan()
    {
        if ($this->M_pelanggan->tambah()) {
            redirect(site_url("manager/data_pelanggan"));
        } else {
            redirect(site_url("manager/data_pelanggan/tambahPelanggan"));
        }
    }

    public function updatePelanggan($id)
    {
        $data['title'] = 'Ubah Data Pelanggan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->M_pelanggan->getPelangganById($id);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/form_updatepelanggan', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_updatePelanggan($id)
    {
        if ($this->M_pelanggan->update($id)) {
            redirect(site_url("manager/data_pelanggan"));
        } else {
            redirect(site_url("manager/data_pelanggan/updatePelanggan/$id"));
        }
    }

    public function hapusPelanggan($id)
    {
        $this->M_pelanggan->hapus($id);
        redirect(site_url("manager/data_pelanggan"));
    }


    //Data Pesanan
    public function data_pesanan()
    {
        $data['title'] = 'Data Pesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pesanan'] = $this->M_pesanan->getPesanan();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('manager/data_pesanan', $data);
        $this->load->view('templates/admin_footer', $data);
    }
}

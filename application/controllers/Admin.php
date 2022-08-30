<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    //Data Profil
    public function profile(){
        $data['title'] = 'Profil Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/admin_footer', $data);
    }


    //Data User
    public function data_user()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datauser'] = $this->db->get('user')->result_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function updateUser($id){
        $data['title'] = 'Ubah Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->M_user->getUserById($id);
        $data['role'] = ['1', '2', '3'];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/form_updateuser', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function proses_updateUser($id){
        if ($this->M_user->update($id)) {
            redirect(site_url("admin/data_user"));
        } else {
            redirect(site_url("admin/data_user/updateUser/$id"));
        }
    }

    public function hapusUser($id){
        $this->M_user->hapusUser($id);
        redirect(site_url("admin/data_user"));
    }
}

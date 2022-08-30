<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Owner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('owner/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }
}

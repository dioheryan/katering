<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Menu';

        $this->load->view('templates/landing_header', $data);
        $this->load->view('menu', $data);
        $this->load->view('templates/landing_footer', $data);
    }
}

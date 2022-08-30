<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/landing_header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/landing_footer', $data);

    }
}

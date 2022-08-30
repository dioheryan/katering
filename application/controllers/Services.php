<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Services';

        $this->load->view('templates/landing_header', $data);
        $this->load->view('services', $data);
        $this->load->view('templates/landing_footer', $data);
    }
}

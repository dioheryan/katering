<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['title'] = 'About';

        $this->load->view('templates/landing_header', $data);
        $this->load->view('about', $data);
        $this->load->view('templates/landing_footer', $data);
    }
}

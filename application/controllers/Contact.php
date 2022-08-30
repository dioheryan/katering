<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['title'] = 'Contact';

        $this->load->view('templates/landing_header', $data);
        $this->load->view('contact', $data);
        $this->load->view('templates/landing_footer', $data);
    }
}

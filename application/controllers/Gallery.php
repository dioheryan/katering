<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['title'] = 'Gallery';

        $this->load->view('templates/landing_header', $data);
        $this->load->view('gallery', $data);
        $this->load->view('templates/landing_footer', $data);
    }
}

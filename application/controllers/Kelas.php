<?php
class Kelas extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kelas');
        $this->load->view('templates/footer');
    }
}

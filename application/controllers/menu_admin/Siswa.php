<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $data['data'] = $this->m_siswa->relasi();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/siswa', $data);
        $this->load->view('templates/footer');
    }
}

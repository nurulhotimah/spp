<?php
class Bunga extends CI_Controller
{
    public function print_kelas()
    {
        $data['kelas'] = $this->m_kelas->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('admin/print/kelas', $data);
    }
}

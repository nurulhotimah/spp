<?php
class Spp extends CI_Controller
{
    public function index()
    {
        $data['spp'] = $this->m_spp->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/spp', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $id_spp              = $this->input->post('id_spp');
        $tahun               = $this->input->post('tahun');
        $nominal             = $this->input->post('nominal');




        $data = array(

            'id_spp'              => $id_spp,
            'tahun'               => $tahun,
            'nominal'             => $nominal,






        );

        $this->db->insert('spp', $data);
        $this->session->set_flashdata('flash', 'Data Spp Berhasil di Tambah');

        redirect('menu_admin/spp');
    }
}

<?php
class Kelas extends CI_Controller
{
    public function index()
    {
        $data['kelas'] = $this->m_kelas->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kelas', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $id_kelas              = $this->input->post('id_kelas');
        $nama_kelas                 = $this->input->post('nama_kelas');
        $kompetensi_keahlian                 = $this->input->post('kompetensi_keahlian');



        $data = array(

            'id_kelas'                      => $id_kelas,
            'nama_kelas'                      => $nama_kelas,
            'kompetensi_keahlian'               => $kompetensi_keahlian






        );

        $this->db->insert('kelas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" class="close" data-dismiss="alert" aria-label="Close" role="alert">Kelas Berhasil di Tambahkan</div>');


        redirect('menu_user/lihat_pengaduan');
    }
}

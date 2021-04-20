<?php
class Pembayara extends CI_Controller
{
    public function index()
    {
        $data['kelas'] = $this->m_kelas->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pembayaran', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id_pembayaran         = $this->input->post('id_pembayaran');
        $status               = $this->input->post('status');
        $tanggal              = $this->input->post('tgl_bayar');
        $jm              = $this->input->post('jumlah_bayar');



        $data = array(
            'id_pembayaran'    => $id_pembayaran,
            'status'          => $status,
            'tgl_bayar'   => $tanggal,
            'jumlah_bayar' => $jm


        );


        $where = array(
            'id_pembayaran'          => $id_pembayaran,
        );
        $this->m_pembayaran->update_data($where, $data, 'pembayaran');
        $this->session->set_flashdata('flash', 'di Tolak');
        redirect('menu_admin/pembayara');
    }
}

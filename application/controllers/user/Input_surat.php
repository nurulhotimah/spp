<?php 
class Input_surat extends CI_Controller{
    public function index(){
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Input Surat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user1/input_surat', $data);
        $this->load->view('templates/footer');
    }
    public function save(){
        $id                  = $this->input->post('id');
        $nama                = $this->input->post('nama_guru');
        $nip                 = $this->input->post('nip');
        $pangkat_gol         = $this->input->post('pangkat_gol');
        $jabatan             = $this->input->post('jabatan');
        $keperluan           = $this->input->post('keperluan');
        $username            = $this->input->post('username');

       

        $data = array(
            'id'                => $id,
            'nama_guru'              => $nama,
            'nip'               => $nip,
            'pangkat_gol'       => $pangkat_gol,
            'jabatan'           => $jabatan,
            'keperluan'         => $keperluan,
            'username'          => $username
            


        );

        $this->m_st->input_data($data, 'surat_tugas');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('print_surat/index');
    }
   
    public function print(){
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->library('dompdf_gen');

        $data['ST'] = $this->m_st->tampil_data('surat_tugas')->result();
        $this->load->view('user1/print_surat', $data);

        // setting page
        $pdf            = new DOMPDF(1);
        $paper_size     = 'A4';  
        $orientation     = 'potrait';
        $html             = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation, $pdf);

        // convert pdf
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("pendaftaran siswa.pdf", array('Attachment' => false));
    }
}
?>
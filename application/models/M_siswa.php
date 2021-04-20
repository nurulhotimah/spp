<?php
class M_siswa extends CI_Model
{

    public function relasi()
    {
        $this->db->select(['a.id_kelas', 'nama_kelas', 'b.nisn', 'b.nama', 'b.nis', 'alamat', 'no_telp']);
        $this->db->from('siswa b');
        $this->db->join('kelas a', 'a.id_kelas = b.id_kelas');
        $return = $this->db->get('');
        return $return->result();
    }


    public function tampil_data()
    {
        return $this->db->get('siswa');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('siswa', array('id' => $id))->row();
        return $query;
    }
}

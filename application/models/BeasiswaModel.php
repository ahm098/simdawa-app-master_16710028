<?php
class BeasiswaModel extends CI_Model {
    private $tabel = "beasiswa";

    public function get_beasiswa() {
        $this->db->select('beasiswa.*, jenis_beasiswa.nama_jenis, jenis_beasiswa.keterangan');
        $this->db->from($this->tabel);
        $this->db->join('jenis_beasiswa', 'beasiswa.jenis_id = jenis_beasiswa.id');
        return $this->db->get()->result();
    }

    public function insert_beasiswa() {
        $data = [
            'nama_beasiswa' => $this->input->post('nama_beasiswa'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'jenis_id' => $this->input->post('jenis_id')
        ];
        if ($this->db->insert($this->tabel, $data)) {
            $this->session->set_flashdata('pesan', "Data Berhasil Ditambahkan");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data Gagal Ditambahkan");
            $this->session->set_flashdata('status', false);
        }
    }

    public function get_beasiswa_byid($id) {
        return $this->db->get_where($this->tabel, ['id' => $id])->row();
    }

    public function delete_beasiswa($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
    }

    public function update_beasiswa() {
        $data = [
            'nama_beasiswa' => $this->input->post('nama_beasiswa'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'jenis_id' => $this->input->post('jenis_id')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);
    }
}

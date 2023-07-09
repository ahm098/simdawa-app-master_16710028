<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdiModel extends CI_Model {
    private $table = "prodi";

    public function get_prodi()
    { 
        return $this->db->get($this->table)->result();
    }

    public function insert_prodi()
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi'),
        ];
        if ($this->db->insert($this->table, $data)) {
            $this->session->set_flashdata('pesan', "Data Berhasil Ditambahkan");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data Gagal Ditambahkan");
            $this->session->set_flashdata('status', false);
        }
    }

    public function get_prodi_byid($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update_prodi()
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->table, $data);
    }

    public function delete_prodi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}

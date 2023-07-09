<?php
class PendaftaranModel extends CI_Model
{
    private $tabel = 'pendaftaran_pengguna';

    public function cek_nopendaftaran()
    {
        $cek = $this->db->get_where($this->tabel, ['no_pendaftaran' => $this->input->post('no_pendaftaran')]);
        if ($cek->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function upload_bukti($file)
    {
        $config['upload_path'] = './upload/bukti_daftar/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '1024';
        $config['remove_space'] = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($file)) {
            $return = array(
                'result' => 'success',
                'file' => $this->upload->data(),
                'error' => ''
            );
            return $return;
        } else {
            $return = array(
                'result' => 'failed',
                'file' => '',
                'error' => $this->upload->display_errors()
            );
            return $return;
        }
    }

    public function insert_pendaftaran($file)
    {
        $data = [
            'no_pendaftaran' => $this->input->post('no_pendaftaran'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'no_handphone' => $this->input->post('no_handphone'),
            'bukti_daftar' => $file['file']['file_name'],
            'keterangan' => 'Belum Diverifikasi'
        ];
        $this->db->insert($this->tabel, $data);
        if ($this->db->affected_rows() > 0) {
            $id = $this->db->insert_id();
            $this->insert_pengguna($id);
        } else {
            $this->session->set_flashdata("pesan", "Data pendaftaran gagal ditambahkan!");
            $this->session->set_flashdata("status", false);
        }
    }

    public function insert_pengguna($id)
    {
        $data = [
            'username' => $this->input->post('no_pendaftaran'),
            'password' => md5($this->input->post('password')),
            'peran' => 'user',
            'pendaftaran_id' => $id
        ];
        $this->db->insert('pengguna', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("pesan", "Data pendaftaran berhasil ditambahkan! Untuk sementara akun kamu masih belum diverifikasi admin. Tunggu 1 x 24 Jam");
            $this->session->set_flashdata("status", true);
        } else {
            $this->session->set_flashdata("pesan", "Data pendaftaran gagal ditambahkan!");
            $this->session->set_flashdata("status", false);
        }
    }

    public function get_pendaftaran()
    {
        return $this->db->get($this->tabel)->result();
    }
    public function verifikasi_akun($status, $id)
{
$this->db->update($this->tabel, ['keterangan' => $status], ['id' => $id]);
if ($this->db->affected_rows() > 0) {
$this->session->set_flashdata("pesan", "Verifikasi akun berhasil");
$this->session->set_flashdata("status", True);
} else {
$this->session->set_flashdata("pesan", "Verifikasi akun gagal!");
$this->session->set_flashdata("status", False);
}
}
}

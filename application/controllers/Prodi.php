<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdiModel');
        $this->load->library('pdf');
    }

    public function cetak()
    {
        $data['prodi'] = $this->ProdiModel->get_prodi();
        $this->load->view('prodi/prodi_print', $data);
    }
    

    public function index()
    {
        $data['title'] = "Dashboard | SIMDAWA-APP";
        $data['prodi'] = $this->ProdiModel->get_prodi();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('prodi/prodi_read', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if(isset($_POST['create'])){ // Periksa apakah tombol 'create' telah diklik
            $this->ProdiModel->insert_prodi();
            redirect('prodi');
        } else {
            $data['title'] = "Tambah Data Jenis Beasiswa | SIMDAWA-APP";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('prodi/prodi_create', $data);
            $this->load->view('template/footer');
        }
    }

    public function ubah($id)
    {
        $data['title'] = "Ubah Data Jenis Beasiswa | SIMDAWA-APP";
        $data['prodi'] = $this->ProdiModel->get_prodi_byid($id);

        if(isset($_POST['update'])) {
            $this->ProdiModel->update_prodi();
            redirect('prodi');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('prodi/prodi_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
        if(isset($id)){
            $this->ProdiModel->delete_prodi($id);
            redirect('prodi');
        }
    }
}

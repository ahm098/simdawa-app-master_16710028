<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('JenisModel');
    }

    public function index()
    {
        $data['title'] = "Dashboard | SIMDAWA-APP";
        $data['jenis'] = $this->JenisModel->get_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('jenis/jenis_read', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if(isset($_POST['create'])){ // Periksa apakah tombol 'create' telah diklik
            $this->JenisModel->insert_jenis();
            redirect('jenis');
        } else {
            $data['title'] = "Tambah Data Jenis Beasiswa | SIMDAWA-APP";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('jenis/jenis_create', $data);
            $this->load->view('template/footer');
        }
    }

    public function ubah($id)
    {
        $data['title'] = "Ubah Data Jenis Beasiswa | SIMDAWA-APP";
        $data['jenis'] = $this->JenisModel->get_jenis_byid($id);

        if(isset($_POST['update'])) {
            $this->JenisModel->update_jenis();
            redirect('jenis');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('jenis/jenis_update', $data);
            $this->load->view('template/footer');
        }
    }
    public function hapus($id){
        if(isset($id)){
            $this->JenisModel->delete_jenis($id);
            redirect('jenis');
        }
    }
}

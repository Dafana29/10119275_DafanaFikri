<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('template/header');
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }

    public function pegawai()
    {
        $data['title'] = 'Daftar Barang';
        $this->load->view('template/header');
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }
}

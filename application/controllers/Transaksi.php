<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Penjualan/transaksi');
        $this->load->view('template/footer');
    }

    public function add_transaksi(){
        $this->Modeltransaksi->addtransaksi();
        redirect('transaksi');
     }
}
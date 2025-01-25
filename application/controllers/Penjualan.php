<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{
    public function index()
    {
        $data['ts']= $this->Modeltransaksi->readtransaksi();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Penjualan/penjualan',$data);
        $this->load->view('template/footer');
    }
   
}
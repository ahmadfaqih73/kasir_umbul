<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarjenis extends CI_Controller
{
    public function index()
    {
        $data['df']= $this->Modeldaftarjenis->get_daftarjenis();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/Daftarjenis',$data);
        $this->load->view('template/footer');
    }

    public function viewAdddaftarjenis(){
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/Adddaftarjenis');
        $this->load->view('template/footer');
    }
    public function viewVariabel_edit($id){
        $data['df'] = $this->Modeldaftarjenis->getid_df($id);
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/editdaftarjenis',$data);
        $this->load->view('template/footer');
    }

    public function add_daftarjenis(){
       $this->Modeldaftarjenis->adddaftarjenis();
       redirect('Daftarjenis');
    }
    public function edit(){
        $this->Modeldaftarjenis-> update();
        redirect('Daftarjenis');
    }
    public function hapus($id){
        $this->Modeldaftarjenis-> delete($id);
        redirect('Daftarjenis');
    }
}
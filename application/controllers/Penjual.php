<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjual extends CI_Controller
{
    public function index()
    {
        $data['penjual']= $this->Modelpenjual->get_penjual();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/Penjual',$data);
        $this->load->view('template/footer');
    }

    public function viewAddpenjual(){
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/Addpenjual');
        $this->load->view('template/footer');
    }
    public function viewVariabel_edit($id){
        $data['penjual'] = $this->Modelpenjual->getid_penjual($id);
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/editpenjual',$data);
        $this->load->view('template/footer');
    }

    public function add_penjual(){
       $this->Modelpenjual->addpenjual();
       redirect('Penjual');
    }
    public function edit(){
        $this->Modelpenjual-> update();
        redirect('Penjual');
    }
    public function hapus($id){
        $this->Modelpenjual-> delete($id);
        redirect('Penjual');
    }
}
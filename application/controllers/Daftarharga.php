<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarharga extends CI_Controller
{
    public function index()
    {
        $data['harga']= $this->Modeldaftarharga->get_daftarharga();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/Daftarharga',$data);
        $this->load->view('template/footer');
    }
    public function viewAdddaftarharga(){
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Komponen/adddaftarharga');
        $this->load->view('template/footer');
    }
    public function getNamaPenjual()
    {
        header('Content-type: application/json');
        $nama = $this->input->post('namapenjual');
        $this->db->like('nama_penjual', $nama);
        $hasil = $this->db->get('penjual')->result();
        foreach ($hasil as $datapenjual) 
        {
            $data[] = array(
                'id'    => $datapenjual->id_penjual,
                'text'  => $datapenjual->nama_penjual
            );
        }

        echo json_encode($data);
    }
    public function getJenis()
    {
        header('Content-type: application/json');
        $nama = $this->input->post('jenis');
        $this->db->like('jenis_dijual', $nama);
        $hasil = $this->db->get('jenis_jualan')->result();
        foreach ($hasil as $datajenis) 
        {
            $data[] = array(
                'id'    => $datajenis->id_jenis_jualan,
                'text'  => $datajenis->jenis_dijual
            );
        }

        echo json_encode($data);
    }

    public function adddaftarharga(){
        $this->Modeldaftarharga->addharga();
        redirect("Daftarharga");
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{
  public function index(){
    $data['transaksi'] = $this->Modellaporan->readtransaksi();
    
    // Jika tidak ada data yang ditemukan, tampilkan pesan
    if ($data['transaksi'] == 'Tidak ada data yang ditemukan') {
        echo 'Tidak ada data yang ditemukan';
    } else {
        // Menampilkan data di view
        $this->load->view('Penjualan/coba',$data);
    }
   
  }

}
  
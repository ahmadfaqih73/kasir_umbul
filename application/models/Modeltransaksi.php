<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modeltransaksi  extends CI_Model
{
    public function addtransaksi(){
        $namamenu = $this->input->post('namamenu');
        $penjual = $this->input->post('namapenjual');
        $jenismenu = $this->input->post('jenis');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');

        $data =[
            'nama_menu' => $namamenu,
            'penjual_nama'=> $penjual,
            'nama_menu' => $jenismenu,
            'harga' => $harga,
            'jumlah'=> $jumlah,
            'total_harga'=>$harga*$jumlah,
            'waktu' => date('Y-m-d'),

        ];
//    echo "<pre>  ";
//             print_r($data);
//             echo "</pre>";
$this->db->insert('transaksi', $data);   

    }
}
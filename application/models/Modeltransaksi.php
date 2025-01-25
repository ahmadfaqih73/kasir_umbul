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
            'jenis_menu' => $jenismenu,
            'harga_jual' => $harga,
            'jumlah'=> $jumlah,
            'total_harga'=>$harga*$jumlah,
            'waktu' => date('Y-m-d'),

        ];
   // echo "<pre>  ";
   //          print_r($data);
   //          echo "</pre>";
$this->db->insert('transaksi', $data);   

    }
    public function readtransaksi(){
        $q_read=$this->db->query(' SELECT id_transaksi,nama_penjual,nama_menu, jenis_dijual,harga_jual,jumlah,total_harga FROM transaksi 
        INNER JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan 
        INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual ;')->result_array();
        return $q_read;
        // if ($q_read) {
        //      $data=$q_read[0]['total_harga'];
        //      $sum = 0 ;
        //      for ($i = 0; $i < sizeof($data); $i++) {
        //         $sum = $sum + $data[$i];
        //     }
            
        //     // Display the result
        //     echo "Sum of Array Values:" . $sum;

        // }else {
        //     echo "tidak ada";
        // }
    }
     public function delete($id)
    {
       $this->db->delete('transaksi', ['id_transaksi' => $id]); 
    }
    
}
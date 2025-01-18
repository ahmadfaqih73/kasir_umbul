<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modeldaftarharga extends CI_Model
{
    public function  get_daftarharga(){
        
		$this->db->join('penjual', 'penjual.id_penjual = harga.penjual_id');
		$this->db->join('jenis_Jualan', 'jenis_jualan.id_jenis_jualan = harga.jualan_jenis');



        $query = $this->db->get('harga');
        return $query->result_array();
       }

    public function addharga(){
        $namamenu = $this->input->post('namamenu');
        $penjual = $this->input->post('namapenjual');
        $jenismenu = $this->input->post('jenis');
        $harga = $this->input->post('harga');

        $data =[
            'nama_menu' => $namamenu,
            'penjual_id'=> $penjual,
            'jualan_jenis' => $jenismenu,
            'harga' => $harga

        ];
//    echo "<pre>  ";
//             print_r($data);
//             echo "</pre>";
$this->db->insert('harga', $data);   

    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modellaporan extends CI_Model
{
    // function filterbytanggal1($tanggalawal,$tanggalakhir){

	// 	$query = $this->db->query("SELECT * from transaksi where waktu BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY waktu ASC ");

	// 	return $query->result();
	// }
	public function readtransaksi(){
        $q_read=$this->db->query("SELECT nama_penjual,nama_menu, jenis_dijual,harga,jumlah,total_harga 
		FROM transaksi INNER JOIN jenis_jualan ON transaksi.jenis_menu = jenis_jualan.id_jenis_jualan 
		INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual 
		AND waktu BETWEEN '2025-01-18' AND '2025-01-18' ;")->result_array();
		return $q_read;
		//    echo "<pre>  ";
        //     print_r($q_read);
        //     echo "</pre>";
        
    }
	
	function filterbytanggal1($tanggalawal,$tanggalakhir,$namapenjual){

		$query = $this->db->query(" SELECT nama_penjual,SUM(total_harga) FROM transaksi
		 INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual 
		 WHERE nama_penjual = '$namapenjual' AND waktu BETWEEN '$tanggalawal' AND '$tanggalakhir'; ");

		return $query->result();
	}
	function filterbytanggal($where){

		$query = $this->db->get_where('transaksi',$where);

		return $query->result();
	}
	// public function readtransaksi2(){
	// 	$q_read=$this->db->query("SELECT SUM(total_harga) FROM transaksi 
	// 	INNER JOIN penjual ON transaksi.penjual_nama = penjual.id_penjual 
	// 	WHERE waktu BETWEEN '2025-01-18' AND '2025-01-18';")->result_array();
	// 	return $q_read;
	// }
	

}

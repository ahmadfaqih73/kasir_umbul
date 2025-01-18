<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modellaporan extends CI_Model
{
    function filterbytanggal1($tanggalawal,$tanggalakhir){

		$query = $this->db->query("SELECT * from transaksi where waktu BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY waktu ASC ");

		return $query->result();
	}
}

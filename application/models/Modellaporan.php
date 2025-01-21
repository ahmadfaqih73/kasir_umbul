<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Modellaporan extends CI_Model
{
    public function readtransaksi()
    {
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $nama_penjual = $this->input->post('namapenjual');

        // Debugging: Menampilkan nilai parameter yang diterima
        // echo 'Tanggal Awal: ' . $tanggalawal . '<br>';
        // echo 'Tanggal Akhir: ' . $tanggalakhir . '<br>';
        // echo 'Nama Penjual: ' . $nama_penjual . '<br>';

        // Cek apakah parameter yang diperlukan kosong
        if (empty($tanggalawal) && empty($tanggalakhir) && empty($nama_penjual)) {
            return 'Data kosong';
        } else {
            // Query dengan parameter binding untuk menghindari SQL Injection
			$this->db->select('penjual.nama_penjual, transaksi.waktu, jenis_jualan.jenis_dijual, 
			transaksi.harga AS harga_transaksi, transaksi.jumlah, transaksi.total_harga, 
			harga.harga AS harga_dari_harga_table, harga.nama_menu AS nama_menu_harga');
$this->db->from('transaksi');
$this->db->join('penjual', 'transaksi.penjual_nama = penjual.id_penjual');
$this->db->join('jenis_jualan', 'transaksi.jenis_menu = jenis_jualan.id_jenis_jualan');
$this->db->join('harga', 'transaksi.jenis_menu = harga.jualan_jenis AND transaksi.penjual_nama = harga.penjual_id');

// Menambahkan filter berdasarkan nama penjual dan rentang waktu
if (!empty($nama_penjual)) {
$this->db->where('penjual.nama_penjual', $nama_penjual);
}
if (!empty($tanggalawal) && !empty($tanggalakhir)) {
$this->db->where('transaksi.waktu >=', $tanggalawal);
$this->db->where('transaksi.waktu <=', $tanggalakhir);
}

// Eksekusi query
$query = $this->db->get();

// Debugging query yang dijalankan
echo $this->db->last_query();  // Menampilkan query terakhir yang dijalankan

if ($query->num_rows() > 0) {
return $query->result_array();  // Mengembalikan hasil query dalam bentuk array
} else {
return 'Tidak ada data yang ditemukan';
}
}
}

}
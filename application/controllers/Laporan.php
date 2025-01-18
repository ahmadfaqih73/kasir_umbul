<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Penjualan/laporan');
        $this->load->view('template/footer');
    }

    function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		// $tahun1 = $this->input->post('tahun1');
		// $bulanawal = $this->input->post('bulanawal');
		// $bulanakhir = $this->input->post('bulanakhir');
		// $tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 1) {
			
			$data['title'] = "Laporan Penjualan By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			
			if($nama_brg == null and $username == null){
				$where = array(
					'tanggal >=' => $tanggalawal,
					'tanggal <=' => $tanggalakhir,
				);
				$data['datafilter'] = $this->Barang_model->filterbytanggal($where);
			}else {
				
				if($username == null ){
				$where = array(
					'tanggal >=' => $tanggalawal,
					'tanggal <=' => $tanggalakhir,
					'kd_barang' => $nama_brg,
				);
				$data['datafilter'] = $this->Barang_model->filterbytanggal($where);
				
				}else if($nama_brg == null){
					$where = array(
						'tanggal >=' => $tanggalawal,
						'tanggal <=' => $tanggalakhir,
						'username' => $username,
					);
					$data['datafilter'] = $this->Barang_model->filterbytanggal($where);
				}else{
					$where = array(
						'tanggal >=' => $tanggalawal,
						'tanggal <=' => $tanggalakhir,
						'username' => $username,
						'kd_barang' => $nama_brg,
					);
					$data['datafilter'] = $this->Barang_model->filterbytanggal($where);
				}
			}

			// $this->load->view('page/barang/print_laporan', $data);

		}
    }

}
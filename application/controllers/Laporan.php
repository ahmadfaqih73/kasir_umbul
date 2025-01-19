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
		$nama_penjual = $this->input->post('namapenjual');
		// $tahun1 = $this->input->post('tahun1');
		// $bulanawal = $this->input->post('bulanawal');
		// $bulanakhir = $this->input->post('bulanakhir');
		// $tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');
$data['datafilter2'] = $this->Modellaporan->filterbytanggal1();
        if ($nilaifilter != 1) {
			// echo "ada";
			$data['title'] = "Laporan Penjualan By Tanggal";
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			
			if($nama_penjual != null ){
				$where = array(
					'waktu >=' => $tanggalawal,
					'waktu <=' => $tanggalakhir,
					'penjual_nama' => $nama_penjual
				);
				$data['datafilter'] = $this->Modellaporan->filterbytanggal($where);
				
				   echo "<pre>  ";
            print_r($data);
            echo "</pre>";
			}else {
				   echo "<pre>  ";
            print_r("belum ada data alias error");
            echo "</pre>";

				// if($username == null ){
				// $where = array(
				// 	'tanggal >=' => $tanggalawal,
				// 	'tanggal <=' => $tanggalakhir,
				// 	'kd_barang' => $nama_brg,
				// );
				// $data['datafilter'] = $this->Barang_model->filterbytanggal($where);
				
				// }else if($nama_brg == null){
				// 	$where = array(
				// 		'tanggal >=' => $tanggalawal,
				// 		'tanggal <=' => $tanggalakhir,
				// 		'username' => $username,
				// 	);
				// 	$data['datafilter'] = $this->Barang_model->filterbytanggal($where);
				// }else{
				// 	$where = array(
				// 		'tanggal >=' => $tanggalawal,
				// 		'tanggal <=' => $tanggalakhir,
				// 		'username' => $username,
				// 		'kd_barang' => $nama_brg,
				// 	);
				// 	$data['datafilter'] = $this->Barang_model->filterbytanggal($where);
				// }
			}

			$this->load->view('Penjualan/printstand');

		}
	}
		public function tiapstand(){
			$this->load->view('template/header');
			$this->load->view('template/Navbar');
			$this->load->view('template/sidebar');
			$this->load->view('Penjualan/tiapstand');
			$this->load->view('template/footer');
		}
    }
	//  public function print(){
	// 	$data['ts']= $this->Modellaporan->readtransaksi();
	// 	   echo "<pre>  ";
    //         print_r($data);
    //         echo "</pre>";
	// 	// $data['ts2']= $this->Modellaporan->readtransaksi2();
    //     // $this->load->view('template/Navbar');
    //     // $this->load->view('template/sidebar');
    //     // $this->load->view('Penjualan/laporanprint',$data);
    //     // $this->load->view('template/footer');
	//  }

	 


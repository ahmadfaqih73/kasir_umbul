<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjual extends CI_Model
{
    public function tambahvar_input()
    {
        $nama = $this->input->post('nama');
        $kondisi = $this->input->post('kondisi');
        $nilaiawal = $this->input->post('nilaiawal');
        $nilaiakhir = $this->input->post('nilaiakhir');
        $bentuk= $this->input->post('bentuk');

        $data = [
            'nama_variabel' => $nama,
            'kondisi' => $kondisi,
            'nilai_awal' => $nilaiawal,
            'nilai_akhir' => $nilaiakhir,
            'bentuk' => $bentuk
        ];
        $this->db->insert('tb_var_input', $data);
    }
    public function update(){
        $nama = $this->input->post('nama');
        $kondisi = $this->input->post('kondisi');
        $nilaiawal = $this->input->post('nilaiawal');
        $nilaiakhir = $this->input->post('nilaiakhir');
        $bentuk= $this->input->post('bentuk');

        $data = [
            'nama_variabel' => $nama,
            'kondisi' => $kondisi,
            'nilai_awal' => $nilaiawal,
            'nilai_akhir' => $nilaiakhir,
            'bentuk' => $bentuk
        ];
           $this->db->where('id_var_input', $this->input->post('id'));
         $this->db->update('tb_var_input', $data);
    }

    public function  get_penjual(){
        $query = $this->db->get('penjual');
        return $query->result_array();
       }
       public function getDataById($id)
      {
         return $this->db->get_where('tb_var_input', ['id_var_input' => $id])->row_array();
      }
      public function delete($id)
      {
         $this->db->delete('tb_var_input', ['id_var_input' => $id]); 
      }

}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modeldaftarjenis extends CI_Model
{
    public function  get_daftarjenis(){
        $query = $this->db->get('jenis_jualan');
        return $query->result_array();
       }
    
    public function adddaftarjenis(){
        $jenis = $this->input->post('jenismenu');
        $data = [
            'jenis_dijual'=> $jenis
        ];
        //   echo "<pre>  ";
        //     print_r($data);
        //     echo "</pre>";
            $this->db->insert('jenis_jualan', $data);            
    }
    public function  getid_df($id){
        return $this->db->get_where('jenis_jualan', ['id_jenis_jualan' => $id])->row_array();
 
    }
    public function delete($id)
    {
       $this->db->delete('jenis_jualan', ['id_jenis_jualan' => $id]); 
    }
    public function update(){
        $jenis = $this->input->post('jenis');
        $data = [
            'jenis_dijual'=> $jenis
        ];
        
         $this->db->where('id_jenis_jualan', $this->input->post('id'));
         $this->db->update('jenis_jualan', $data);
    }
}
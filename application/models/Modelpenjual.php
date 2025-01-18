<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelpenjual extends CI_Model
{
    public function  get_penjual(){
        $query = $this->db->get('penjual');
        return $query->result_array();
       }
    
    public function addpenjual(){
        $nama = $this->input->post('namapenjual');
        $data = [
            'nama_penjual'=> $nama
        ];
        //   echo "<pre>  ";
        //     print_r($data);
        //     echo "</pre>";
            $this->db->insert('penjual', $data);            
    }
    public function  getid_penjual($id){
        return $this->db->get_where('penjual', ['id_penjual' => $id])->row_array();
 
    }
    public function delete($id)
    {
       $this->db->delete('penjual', ['id_penjual' => $id]); 
    }
    public function update(){
        $nama = $this->input->post('namapenjual');
        $data = [
            'nama_penjual'=> $nama
        ];
        
         $this->db->where('id_penjual', $this->input->post('id'));
         $this->db->update('penjual', $data);
    }
}
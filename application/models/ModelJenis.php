<?php
class ModelJenis extends CI_Model{
    public function getData(){
        return $this->db->get('jenis_barang')->result_array();
    }

    public function add($data){
        return $this->db->insert('jenis_barang', $data);
    }

    public function getJoin(){
    }

    public function update($id,$data){
        $this->db->where($id);
        return $this->db->update('jenis_barang',$data);
    }

    public function delete($id){
        $this->db->where($id);
        return $this->db->delete('jenis_barang');
    }
}
?>
<?php
class ModelBarang extends CI_Model{
    public function getData(){
        return $this->db->get('barang')->result_array();
    }
    
    public function add($data){
        if($data['tgl_po']){
            return $this->db->insert('data_po', $data);
        }else{
            return $this->db->insert('barang', $data);
        }
    }

    public function getJoin(){
        return $this->db->query("SELECT *FROM barang JOIN supplier ON barang.id_supplier = supplier.id JOIN jenis_barang ON barang.id_jenis = jenis_barang.id")->result_array();
    }

    public function update($id,$data){
        $this->db->where($id);
        return $this->db->update('barang',$data);
    }

    public function delete($id){
        $this->db->where($id);
        return $this->db->delete('barang');
    }
}
?>
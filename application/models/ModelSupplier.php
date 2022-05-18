<?php
class ModelSupplier extends CI_Model{
    public function getData(){
        return $this->db->get('supplier')->result_array();
    }
    
    public function add($data){
        return $this->db->insert('supplier', $data);
    }

    public function getJoin(){
    }

    public function update($id,$data){
        $this->db->where($id);
        return $this->db->update('supplier',$data);
    }

    public function delete($id){
        $this->db->where($id);
        return $this->db->delete('supplier');
    }
}
?>
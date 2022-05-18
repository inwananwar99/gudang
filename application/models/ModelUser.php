<?php 
class ModelUser extends CI_Model{
    public function getUsername($username){
        return $this->db->get_where('user_login',['username'=>$username])->row_array();
    }
}

?>
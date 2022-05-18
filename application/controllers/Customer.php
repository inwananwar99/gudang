<?php
class Customer extends CI_Controller{
    public function index(){
        $data = [
            'title' => 'customer',
            'judul' => 'Data Customer',
            'konten' => 'customer/index',
            'customer' => $this->ModelCustomer->get('customer')
        ];
        return $this->load->view('template',$data);
    }

    public function addCustomer(){

    }

    public function updateCustomer($id){

    }

    public function deleteCustomer($id){

    }

}
?>
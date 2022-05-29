<?php
class Order extends CI_Controller{
    public function pre_order(){
        $data = [
            'title' => 'po',
            'judul' => 'Pre Order',
            'konten' => 'pre_order',
            'level' => 3
        ];
        return $this->load->view('template',$data);
    }
}
?>
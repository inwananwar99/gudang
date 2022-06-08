<?php
class Order extends CI_Controller{
    public function pre_order(){
        $data = [
            'title' => 'po',
            'judul' => 'Pre Order',
            'konten' => 'pre_order',
            'level' => 3,
            'barang' => $this->ModelBarang->getData(),
            'supplier' => $this->ModelSupplier->getData()
        ];
        return $this->load->view('template',$data);
    }

    public function sendOrder(){
        $data = [
            'kd_barang' => $this->input->post('kd_barang'),
            'id_supplier' => $this->input->post('id_supplier'),
            'jumlah_po' => $this->input->post('jml'),
            'tgl_po' => $this->input->post('tgl'),
            'satuan' => $this->input->post('satuan'),
            'harga' => $this->input->post('harga'),
            'total' => $this->input->post('total'),
            'subtotal' => $this->input->post('subtotal'),
            'ppn' => $this->input->post('ppn')
        ];
        $this->ModelBarang->add($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil menambahkan Data PO!</div>');
        return redirect('Order/pre_order');
    }
}
?>
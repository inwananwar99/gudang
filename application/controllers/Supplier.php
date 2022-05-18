<?php
class Supplier extends CI_Controller{
    public function index(){
        $data = [
            'title' => 'supplier',
            'judul' => 'Data Supplier',
            'konten' => 'barang/supplier',
            'supplier' => $this->ModelSupplier->getData()
        ];
        return $this->load->view('template',$data);
    }

    public function tambahSupplier(){
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
        ];
        $this->ModelSupplier->add($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil menambahkan Data Supplier!</div>');
        return redirect('Supplier');
    }

    public function ubahSupplier($id){
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
        ];
        $this->ModelSupplier->update(['id' => $id],$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil mengubah Data Supplier!</div>');
        return redirect('Supplier');
    }

    public function hapusSupplier($id){
        $this->ModelSupplier->delete(['id' => $id]);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil menghapus Data Supplier!</div>');
        return redirect('Supplier');
    }
}
?>
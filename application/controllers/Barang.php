<?php
class Barang extends CI_Controller{
    public function index(){
        $data = [
            'title' => 'barang',
            'judul' => 'Data Barang',
            'level' => 1,
            'konten' => 'admin/barang/barang',
            'barang' => $this->ModelBarang->getJoin(),
            'jenis' => $this->ModelJenis->getData(),
            'supplier' => $this->ModelSupplier->getData()
        ];
        return $this->load->view('template',$data);
    }

    public function tambahBarang(){
        $data = [
            'id_jenis' => $this->input->post('jenis'),
            'id_supplier' => $this->input->post('supplier'),
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah')
        ];
        $this->ModelBarang->add($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil menambahkan Data Barang!</div>');
        return redirect('Barang');
    }

    public function ubahBarang($id){
        $data = [
            'id_jenis' => $this->input->post('jenis'),
            'id_supplier' => $this->input->post('supplier'),
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah')
        ];
        $this->ModelBarang->update(['id' => $id],$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil mengubah Data Barang!</div>');
        return redirect('Barang');
    }

    public function hapusBarang($id){
        $this->ModelBarang->delete(['id' => $id]);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil menghapus Data Barang!</div>');
        return redirect('Barang');
    }

    public function kategori(){
        $data = [
            'title' => 'kategori',
            'judul' => 'Data Kategori Barang',
            'level' => 1,
            'konten' => 'admin/barang/kategori',
            'kategori' => $this->ModelBarang->getJoin()
        ];
        return $this->load->view('template',$data);      
    }
}
?>
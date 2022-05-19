<?php
class Jenis extends CI_Controller{
    public function index(){
        $data = [
            'title' => 'jenis',
            'judul' => 'Data Jenis Barang',
            'level' => 1,
            'jenis' => $this->ModelJenis->getData(),
            'konten' => 'admin/barang/jenis'
        ];
        return $this->load->view('template',$data);
    }

    public function tambahJenis(){
        $data = [
            'jenis_barang' => $this->input->post('jenis')
        ];
        $this->ModelJenis->add($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil menambahkan Data Jenis Barang!</div>');
        return redirect('Jenis');
    }

    public function ubahJenis($id){
        $data = [
            'jenis_barang' => $this->input->post('jenis')
        ];
        $this->ModelJenis->update(['id' => $id],$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil mengubah Data Jenis Barang!</div>');
        return redirect('Jenis');
    }

    public function hapusJenis($id){
        $this->ModelJenis->delete(['id' => $id]);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil menghapus Data Jenis Barang!</div>');
        return redirect('Jenis');
    }
}
?>
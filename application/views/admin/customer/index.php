<div class="container">
            <a href="#" class="btn btn-success mb-3" data-toggle="modal" data-target="#addModal">Tambah</a>
            <?= $this->session->flashdata('message');?>
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach($jenis as $d): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['jenis_barang']; ?></td>
                        <td>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $d['id']; ?>">Edit</a>
                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $d['id']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    <!-- Modal Tambah User -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Jenis Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Jenis/tambahJenis');?>" method="POST">
                <div class="form-group">
                    <label for="">Jenis Barang</label>
                    <input type="text" class="form-control" name="jenis">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
            </div>
        </div>
        </div>
        </div>
<?php foreach($jenis as $j): ?>
        <!-- Modal Ubah Jenis -->
        <div class="modal fade" id="editModal<?= $j['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Ubah Kode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Jenis/ubahJenis/'.$j['id']);?>" method="POST">
                <div class="form-group">
                    <label for="">Jenis Barang</label>
                    <input type="text" class="form-control" value="<?= $j['jenis_barang']?>" name="jenis">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
            </div>
        </div>
        </div>
        </div>
<?php endforeach;?>
<?php foreach($jenis as $j1): ?>
        <!-- Modal Hapus Jenis -->
        <div class="modal fade" id="deleteModal<?= $j1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Jenis/hapusJenis/'.$j1['id']);?>" method="POST">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
        </form>
            </div>
        </div>
        </div>
        </div>
<?php endforeach;?>


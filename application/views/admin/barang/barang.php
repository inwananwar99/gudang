<div class="container">
            <a href="#" class="btn btn-success mb-3" data-toggle="modal" data-target="#addModal">Tambah</a>
            <?= $this->session->flashdata('message');?>
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Supplier</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach($barang as $b): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $b['nama']; ?></td>
                        <td><?= $b['nama_barang']; ?></td>
                        <td><?= $b['jenis_barang']; ?></td>
                        <td><?= $b['jumlah']; ?></td>
                        <td>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $b['id']; ?>">Edit</a>
                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $b['id']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    <!-- Modal Tambah Supplier -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <div class="modal-body">
        <form action="<?= base_url('Barang/tambahBarang');?>" method="POST">
                <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <select name="supplier" class="form-control">
                        <option>-- Pilih Supplier --</option>
                        <?php foreach($supplier as $s):?>
                            <option value="<?= $s['id']; ?>"><?= $s['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang">
                </div>
                <div class="form-group">
                    <label for="">Kategori Barang</label>
                    <select name="jenis" class="form-control">
                        <option>-- Pilih Kategori --</option>
                        <?php foreach($jenis as $j):?>
                            <option value="<?= $j['id']; ?>"><?= $j['jenis_barang']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Barang</label>
                    <input type="text" class="form-control" name="jumlah">
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
<?php foreach($supplier as $s1): ?>
        <!-- Modal Ubah Supplier -->
        <div class="modal fade" id="editModal<?= $s1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Supplier/ubahSupplier/'.$s1['id']);?>" method="POST">
                <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <input type="text" class="form-control" value="<?= $s1['nama']?>" name="nama">
                </div>
                <div class="form-group">
                    <label for="">Alamat Supplier</label>
                    <input type="text" class="form-control" value="<?= $s1['alamat']?>" name="alamat">
                </div>
                <div class="form-group">
                    <label for="">No. Handphone Supplier</label>
                    <input type="text" class="form-control" value="<?= $s1['no_hp']?>" name="no_hp">
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
<?php foreach($supplier as $s2): ?>
        <!-- Modal Hapus Supplier -->
        <div class="modal fade" id="deleteModal<?= $s2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Supplier/hapusSupplier/'.$s2['id']);?>" method="POST">
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


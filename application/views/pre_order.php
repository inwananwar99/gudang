<form action="<?= base_url('Order/sendOrder');?>" method="POST" class="form">
    <div class="form-group">
        <label for="">Nama Barang</label>
        <select name="kd_barang" class="form-control">
            <option>-- Pilih Barang --</option>
            <?php foreach($barang as $brg): ?>
                <option value="<?= $brg['kode_barang']; ?>"><?= $brg['nama_barang']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Nama Supplier</label>
        <select name="id_supplier" class="form-control">
            <option>-- Pilih Supplier --</option>
            <?php foreach($supplier as $sup): ?>
                <option value="<?= $sup['kode_supplier']; ?>"><?= $sup['nama_supplier']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Jumlah PO</label>
        <input type="number" name="jml" class="form-control" placeholder="Jumlah PO ...">
    </div>
    <div class="form-group">
        <label for="">Tanggal PO</label>
        <input type="date" name="tgl" class="form-control" placeholder="Tanggal PO ...">
    </div>
    <div class="form-group">
        <label for="">Satuan</label>
        <input type="text" name="satuan" class="form-control" placeholder="Satuan ...">
    </div>
    <div class="form-group">
        <label for="">Harga</label>
        <input type="number" name="harga" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Total</label>
        <input type="number" name="total" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Subtotal</label>
        <input type="number" name="subtotal" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label for="">PPN</label>
        <input type="number" name="ppn" class="form-control" placeholder="">
    </div>
</form>
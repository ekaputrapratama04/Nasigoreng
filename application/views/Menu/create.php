<?php $this->load->view('header'); ?>

<h1>Tambah Menu Nasi Goreng Delivery</h1>
<form action="<?php echo site_url('Menu/store'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Menu :</label>
        <input type="text" name="namaMenu" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Harga :</label>
        <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Masukan Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <div class="container p-0 mt-3">
        <div class="row align-items-center">
            <div class="col-1">
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <a href="<?php echo base_url('menu/index'); ?>" class="text-body">kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $this->load->view('footer'); ?>
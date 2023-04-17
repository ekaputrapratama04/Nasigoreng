<?php $this->load->view('header'); ?>

<div class="container p-0">
    <div class="row">
        <div class="col">
            <h3>Daftar Menu Nasi Goreng</h3>
        </div>
        <div class="col col-md-4 align-self-end">
            <a href="<?php echo site_url('menu/create'); ?>" class="btn btn-primary">Tambah Menu</a>
        </div>
    </div>
</div>
<table class="table table-bordered mt-3 table-striped">
    <thead>
        <tr>
            <th>Kode Menu</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menus as $menu) : ?>
            <tr>
                <td><?php echo $menu['kode_menu']; ?></td>
                <td><?php echo $menu['nama_menu']; ?></td>
                <td><?php echo $menu['harga']; ?></td>
                <td><img src="<?php echo base_url() . 'uploads/' . $menu['gambar']; ?>" alt="Gambar Menu"></td>
                <td>
                    <a href="<?php echo site_url('menu/edit/' . $menu['kode_menu']); ?>" class="btn btn-success">update</a>
                    <a href="<?php echo site_url('menu/delete/' . $menu['kode_menu']); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php $this->load->view('footer'); ?>
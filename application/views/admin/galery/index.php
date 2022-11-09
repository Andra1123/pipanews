<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar">
        <div class="text-center">
            <h1>Galery</h1>
        </div>
        <div class="mb-4">
            <a href="<?= base_url('admin/create_galery') ?>" class="btn btn-success px-4">Tambah</a>
        </div>
        <div class="row row-cols-4" style="gap: 10px 0;">
            <div class="col p-0">
                <img src="<?= base_url('assets/images/t-rex.jpg') ?>" style="width: 100%;">
                <a href="" class="btn btn-danger" style="width: 100%;">Hapus</a>
            </div>

        </div>
        <footer class="p-3 border mt-4">
            <p class="m-0">&copy; 2022 . dibuat oleh tim 4 .</p>
        </footer>
    </div>
</div>
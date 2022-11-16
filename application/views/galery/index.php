<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar">
        <h1>Galery</h1>
        <a href="<?= base_url('galery/create_galery') ?>" class="btn btn-success">Tambah</a>
        <div class="row my-3 row-cols-4">
            <?php foreach ($galleries as $gallery) : ?>
                <div class="col mb-4">
                    <img src="<?= base_url('assets/images/galery/' . $gallery->image) ?>" alt="<?= $gallery->image ?>" style="width: 100%; height: 240px;object-fit: cover;" onclick="window.location.href = '<?= base_url('galery/show_galery/' . $gallery->id_galery) ?>'">
                </div>
            <?php endforeach ?>
        </div>
        <footer class="p-3 border mt-4">
            <p class="m-0">&copy; 2022 . dibuat oleh tim 4 .</p>
        </footer>
    </div>
</div>
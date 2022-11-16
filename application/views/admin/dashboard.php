<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar">
        <h1>Dashboard</h1>
        <div class="row gap-5 text-white">
            <div class="col p-3 bg-info rounded-4">
                <h4>Article</h4>
                <h5><?= jumlah_article() ?></h5>
            </div>
            <div class="col p-3 bg-danger rounded-4">
                <h4>Gallery</h4>
                <h5><?= jumlah_galery() ?></h5>
            </div>
        </div>
    </div>
</div>
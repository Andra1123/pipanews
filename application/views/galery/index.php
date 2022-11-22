<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar">
        <h1>Galery</h1>
        <a href="<?= base_url('galery/create_galery') ?>" class="btn btn-success">Tambah</a>
        <div class="row my-3 row-cols-4">
            <?php foreach ($galleries as $gallery) : ?>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/images/galery/' . $gallery->image) ?>" alt="<?= $gallery->image ?>" style="width: 100%; height: 240px;object-fit: cover;" onclick="window.location.href = '<?= base_url('galery/show_galery/' . $gallery->id_galery) ?>'">
                        <div class="card-footer">
                            <div class="d-flex justify-content-center" style="gap: 8px;">
                                <button type="button" id="hapus-<?= $gallery->id_galery ?>" class="btn btn-danger">Hapus</button>
                                <a href="<?= base_url('galery/update_galery/' . $gallery->id_galery) ?>" class="btn btn-primary">Update</a>
                                <script>
                                    $('#hapus-<?= $gallery->id_galery ?>').on('click', function() {
                                        confirm('yakin ingin menghapus gallery?') ? window.location.href = '<?= base_url('galery/delete_galery/' . $gallery->id_galery . '/' . $gallery->image) ?>' : false;
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
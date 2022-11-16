<style>
    .judul {
        height: 80px;
        overflow: hidden;
    }
</style>
<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar">
        <div class="text-start mb-3">
            <a href="<?= base_url('article/create_article') ?>" class="btn btn-success">Tambah Artikel</a>
        </div>
        <div class="row row-cols-3">
            <?php foreach ($articles as $article) : ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/artikel/' . $article->image) ?>" class="card-img-top" onclick="window.location.href = '<?= base_url('umum/article/' . $article->id_article) ?>'" style="height: 240px;object-fit: cover;">
                        <div class="card-body">
                            <div class="judul">
                                <h5 class="card-title"><?= $article->title ?></h5>
                            </div>
                            <a href="<?= base_url('article/delete_article/' . $article->id_article . '/' . $article->image) ?>" class="btn btn-danger">Hapus Artikel</a>
                            <a href="<?= base_url('article/update_article/' . $article->id_article) ?>" class="btn btn-primary">Update Article</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
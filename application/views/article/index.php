<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar"> 
        <div class="row justify-content-center">
            <?php foreach ($articles as $article) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/artikel/' . $article->image) ?>" class="card-img-top" onclick="window.location.href = '<?= base_url('article/show_article/' . $article->id_article) ?>'">
                        <div class="card-body">
                            <h5 class="card-title"><?= $article->title ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="text-center">
            <a href="<?= base_url('article/create_article') ?>" class="btn btn-success">Tambah Artikel</a>
        </div>
    </div>
</div>
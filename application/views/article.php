<section style="position: absolute;width: 100%;">
    <?php $this->load->view('layouts/navbar'); ?>
    <div class="container">
        <div class="text-center">
            <a href="<?= base_url('article/create_article') ?>" class="btn btn-success">Tambah Artikel</a>
        </div>
        <h2 class="fw-bold mt-4 mb-5" align="center">Daftar Artikel-Artikel</h2>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <?php foreach ($articles as $article) : ?>
                <div class=" col mb-4">
                    <div class="card content-card">
                        <a href='./artikel/Artikel1.html'>
                            <img src="<?= base_url('assets/images/artikel/' . $article->image) ?>" class="card-img-top" onclick="window.location.href = '<?= base_url('article/show_article/' . $article->id_article) ?>'" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $article->title ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
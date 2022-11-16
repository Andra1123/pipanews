<?php $this->load->view('layouts/users/navbar'); ?>
<section>
    <div class="container py-5">
        <h2 class="fw-bold mt-4 mb-4" align="center">Daftar Artikel-Artikel</h2>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <?php foreach ($articles as $article) : ?>
                <div class=" col mb-4">
                    <div class="card content-card">
                        <a href="<?= base_url('umum/article/' . $article->id_article) ?>">
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

<script>
    $('.navbar').removeClass('bg-transparant')
    $('.navbar').addClass('bg-dark')
</script>
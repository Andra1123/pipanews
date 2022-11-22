<?php $this->load->view('layouts/users/navbar') ?>
<div class="container py-5">
    <div class="text-center my-3">
        <h1>
            <?= $article->title ?>
        </h1>
    </div>
    <div class="mb-5">
        <h2 class="text-center">
            <img src="<?= base_url('assets/images/artikel/' . $article->image) ?>" style="width: 620px; height: 360px;object-fit: contain;">
        </h2>
    </div>
    <div class="mx-5">
        <?= $article->description ?>
    </div>
</div>

<script>
    $('.navbar').removeClass('bg-transparant')
    $('.navbar').addClass('bg-dark')
    $('.nav-item a').addClass('text-light')
</script>
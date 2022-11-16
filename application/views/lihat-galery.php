<?php $this->load->view('layouts/users/navbar') ?>
<div class="container py-5">
    <div class="my-5">
        <h2 class="text-center">
            <img src="<?= base_url('assets/images/galery/' . $galery->image) ?>" style="width: 620px; height: 360px;object-fit: contain;">
        </h2>
    </div>
    <div class="mx-5">
        <?= $galery->description ?>
    </div>
</div>

<script>
    $('.navbar').removeClass('bg-transparant')
    $('.navbar').addClass('bg-dark')
</script>
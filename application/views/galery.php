<?php $this->load->view('layouts/users/navbar'); ?>

<style>
    #gallery {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }
</style>
<section>
    <div class="container py-5">
        <h2 class="fw-bold mt-4 mb-4" align="center">Daftar Galery</h2>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <?php foreach ($galleries as $gallery) : ?>
                <div class=" col mb-4">
                    <div class="card">
                        <a href="<?= base_url('umum/galery/' . $gallery->id_galery) ?>">
                            <img src="<?= base_url('assets/images/galery/' . $gallery->image) ?>" onclick="window.location.href = '<?= base_url('umum/galery/' . $gallery->id_galery) ?>'" alt="<?= $gallery->id_galery ?>" id="gallery">
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
<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar">
        <form action="<?= base_url('article/update_article/' . $article->id_article) ?>" method="POST" enctype="multipart/form-data" class="p-3  shadow">
            <div class="foto" onclick="upload_foto()">
                <img src="<?= base_url('assets/images/artikel/' . $article->image) ?>" id="prev-img">
            </div>
            <input type="file" class="d-none" name="image">
            <input type="text" name="old_image" value="<?= $article->image ?>" class="d-none">
            <div class="mt-3">
                <label for="title" class="form-label">Judul artikel</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $article->title ?>" placeholder="judul artikel">
                <div class="small ms-1 mt-2 text-danger"><?php echo form_error('title'); ?></div>
            </div>
            <div class="mt-3">
                <label for="description" class="form-label">Deskripsi artikel</label>
                <textarea name="description" id="description"><?= $article->description ?></textarea>
                <div class="small ms-1 mt-2 text-danger"><?php echo form_error('description'); ?></div>
            </div>
            <div class="mt-3 text-center">
                <button type="submit" class="btn btn-primary px-4">Kirim</button>
            </div>
        </form>
        <footer class="p-3 border mt-4">
            <p class="m-0">&copy; 2022 . dibuat oleh tim 4 .</p>
        </footer>
    </div>
</div>


<script>
    tinymce.init({
        selector: 'textarea', // change this value according to your HTML
        plugins: 'a_tinymce_plugin',
        a_plugin_option: true,
        a_configuration_option: 400
    });

    function upload_foto() {
        $('input[name="image"]').click();
    }

    $('input[name="image"]').on('change', function() {
        const [file] = $(this)[0].files
        if (file) {
            $('#prev-img').attr('src', URL.createObjectURL(file));
        }
    })
</script>
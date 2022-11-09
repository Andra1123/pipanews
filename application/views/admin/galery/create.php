<?php $this->load->view('layouts/admin/navbar') ?>
<div class="d-flex">
    <?php $this->load->view('layouts/admin/sidebar') ?>
    <div class="mainbar">
        <div class="text-center">
            <h3>Tambah Galery</h3>
        </div>
        <form action="<?= base_url('admin/create_galery') ?>" method="POST" enctype="multipart/form-data" class="p-3  shadow">
            <div class="foto" onclick="upload_foto()">
                <img src="" id="prev-img">
            </div>
            <input type="file" class="d-none" name="image">
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
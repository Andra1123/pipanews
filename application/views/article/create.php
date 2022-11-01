<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/Plugins/bootstrap-5.2.2/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/Plugins/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#" id="title">pipa
                <span class="d-block">perhatikan isi piring anda</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">about-us</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="foto-profile">
                    </div>
                    <div class="ms-2 name-profile">Agus Kurniawan</div>
                </div>
            </div>
        </div>
    </nav>
    <div class="d-flex">
        <div class="sidebar">
            <ul>
                <li>daftar artikel</li>
                <li>users</li>
                <li>create artikel</li>
            </ul>
        </div>
        <div class="mainbar">
            <form action="" class="p-3  shadow">
                <div class="foto" onclick="upload_foto()">
                    <img src="" id="prev-img">
                </div>
                <input type="file" class="d-none" name="image">
                <div class="mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul artikel</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi artikel</label>
                    <textarea></textarea>
                </div>
                <div class="mt-3 text-center">
                    <button type="button" class="btn btn-primary px-4">Kirim</button>
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
    <script src="<?= base_url('assets/Plugins/bootstrap-5.2.2/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
<style>
    .navbar .logo {
        position: absolute;
        top: 12px;
        left: -42px;
    }
</style>
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container position-relative">
        <img src="<?= base_url('assets/images/logo.jpeg') ?>" alt="" width="42" height="42" class="logo">
        <a class="navbar-brand" href="<?= base_url() ?>" id="title">pipa
            <span class="d-block">perhatikan isi piring anda</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex justify-content-center align-items-center">
                <div class="foto-profile">
                    <img src="<?= base_url('assets/images/profile/default.png') ?>" alt="foto profile" style="height: 100%;width: 100%;">
                </div>
                <div class="ms-2 name-profile"><?= $this->session->userdata('name') ?></div>
            </div>
        </div>
    </div>
</nav>
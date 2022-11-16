<div class="center">
    <h1>
        <?= $article->title ?>
    </h1>
    <a href="<?= base_url('article/delete_article/' . $article->id_article . '/' . $article->image) ?>" class="btn btn-danger">Hapus Artikel</a>
    <a href="<?= base_url('article/update_article/' . $article->id_article) ?>" class="btn btn-primary">Update Article</a>
</div>
<div>
    <h2 class="center">
        <img src="<?= base_url('assets/images/artikel/' . $article->image) ?>" style="width: 620px; height: 360px;">
    </h2>
</div>
<div class="">
    <?= $article->description ?>
</div>
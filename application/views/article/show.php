<a href="<?= base_url('article/delete_article/' . $article->id_article . '/' . $article->image) ?>" class="btn btn-danger">Hapus Artikel</a>
<h1><?= $article->title ?></h1>
<img src="<?= base_url('assets/images/artikel/' . $article->image) ?>">
<p><?= $article->description ?></p>
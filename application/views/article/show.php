<a href="<?= base_url('article/delete_article/' . $article->id_article . '/' . $article->image) ?>" class="btn btn-danger">Hapus Artikel</a>
<a href="<?= base_url('article/update_article/' . $article->id_article) ?>" class="btn btn-primary">Update Article</a>
<h1><?= $article->title ?></h1>
<img src="<?= base_url('assets/images/artikel/' . $article->image) ?>">
<p><?= $article->description ?></p>
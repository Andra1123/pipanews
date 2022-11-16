<a href="<?= base_url('galery/delete_galery/' . $galery->id_galery . '/' . $galery->image) ?>" class="btn btn-danger">Hapus Galery</a>
<a href="<?= base_url('galery/update_galery/' . $galery->id_galery) ?>" class="btn btn-primary">Update galery</a>
<img src="<?= base_url('assets/images/galery/' . $galery->image) ?>">
<p><?= $galery->description ?></p>
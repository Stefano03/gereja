<div class="site-wrap">
	<h2>Baca Juga Lainnya Disini</h2>

	<div class="card-columns">
		<?php foreach ($renungan as $r) : ?>
	  <div class="card btn-outline-success">
	    <img class="card-img-top" src="<?= base_url('asset/image/img/') . $r['gambar']; ?>" alt="Card image cap">
	    <a href="<?= base_url(); ?>home/detail/<?= $r['id']; ?>" data-id="<?= $r['id']; ?>">
	    <div class="text-dark">
	      <h7><b><?= $r['judul']; ?></b></h7>
	    </div>
	  </div>
	  <?php endforeach; ?>
	</div>

</div>
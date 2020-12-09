<div class="site-wrap">

	<h2><?= $renungan ['judul']; ?></h2>
	 <img class="card-img-left slide-in align-left figure-img img-fluid" src="<?= base_url('asset/image/img/') . $renungan['gambar']; ?>" class="slide-in" alt="Card image cap" >
	<?= $renungan ['content']; ?>
	<div class="float-right time">
	Di upload sejak, <?= date('d F yy', $renungan['time']); ?>
	</div>
</div>
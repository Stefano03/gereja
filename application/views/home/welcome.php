<div class="site-wrap">
	<h2>Selamat Datang Di Website Destiny_Church</h2>
    <hr class="sidebar-divider bg-secondary">
    
	<div class="card-body">

    <p>Selamat datang di website <b>destiny_church</b>.  </p>  
    <span style="font-size: 150px;">&#128525;</span>         
  </div>

<div class="card-columns ">
	<?php foreach ($renungan as $r) : ?>
  <div class="card btn-outline-danger">
    <img class="card-img-top" src="<?= base_url('asset/image/img/') . $r['gambar']; ?>" alt="Card image cap">
    <a href="<?= base_url(); ?>home/detail/<?= $r['id']; ?>" data-id="<?= $r['id']; ?>">
    <div class="text-dark">
      <p><?= $r['judul']; ?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<!-- 
<p><img class="rounded-circle" style="width: 30px;" src="https://photos.app.goo.gl/u3aQUw1ekSR3SKsb8" href="#" target="blank">Telegram</a></p>
<iframe src="https://web.facebook.com/destinychurchbali/videos/239817893734256/?t=8"></iframe>
<embed>
<iframe width="702" height="392" src="https://photos.app.goo.gl/u3aQUw1ekSR3SKsb8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</embed>

<embed src=""></embed> -->

	<br><br>

  <div class="float-right time text-primary">
	<b><a href="<?= base_url('home/ListRenungan') ?>"> Baca Juga Harian Lain Disini &#128519; </a></b>
	</div>
</div>
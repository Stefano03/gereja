<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title; ?></title>
  <link rel="icon" type="image/png" href="<?= base_url('asset/img/profile/default.jpg'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/home.style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>asset/css/sb-admin-2.min.css">
  <link href="<?= base_url(); ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="spantylesheet">
</head>
<body>

  
  <header style="background-image: url(<?= base_url('asset/image/') . $poster; ?>);">
    <h1><?= $judul; ?></h1>
    <!-- <video controls autoplay>
      <source src="<?= base_url('asset/image/') . $poster; ?>);" type="video/mp4">
    </video> -->
  </header>

<nav id="main" class="navbar navbar-expand-lg navbar-light">
  <li class="logo"><a href="<?= base_url('home/sejarah'); ?>"><img src="<?= base_url('asset/image/logo.jpg'); ?>" class="rounded rounded-circle"></a></li>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-5">
      <li class="nav-item dropdown">
        <a class="nav-link btn-outline-danger text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> HOME </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('home/welcome'); ?>">Welcome</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('home/Pastors'); ?>">Pastor's Profile</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('home/service_times'); ?>">Service Times</a>
      </li>

      <li class="nav-item dropdown ml-5">
        <a class="nav-link btn-outline-danger text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ABOUT_US</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('home'); ?>">The Story</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('home/vision_mission'); ?>">Vision & Mision</a>
      </li>

      <li class="nav-item dropdown ml-5">
        <a class="nav-link btn-outline-danger text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MINISTRIES</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Our Ministries</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cell Group</a>
      </li>

       <li class="nav-item dropdown ml-5">
        <a class="nav-link btn-outline-danger text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">FOUNDATION</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('home/destiny_bible'); ?>">Destiny Bible</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('home/encounter'); ?>">Encounter</a>
      </li>

      <li class="nav-item dropdown ml-5">
        <a class="nav-link btn-outline-danger text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MEDIA</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Galery</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Trip</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('home/ListRenungan'); ?>">Others</a>
        </div>
      </li>

      <li class="nav-item dropdown ml-5">
        <a class="nav-link btn-outline-danger text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MUSING</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Testimony</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('home/ListRenungan'); ?>">Separated link</a>
        </div>
      </li>

      <li class="nav-item ml-5">
        <a class="nav-link btn-outline-danger text-white" href="<?= base_url('home/contact_location'); ?>">CONTAC_US</a>
      </li>

      <li class="nav-item btn-outline-danger ml-5">
        <a class="nav-link text-white" href="<?= base_url('auth'); ?>">LOGIN</a>
      </li>
    </ul>
  </div>
</nav>
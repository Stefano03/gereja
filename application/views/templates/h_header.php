<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" type="image/png" href="<?= base_url('asset/img/profile/default.jpg'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/sb-admin-2.min.css">
    <link href="<?= base_url(); ?>asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="spantylesheet">

    <title><?= $title; ?></title>
  </head>
 <body>
    <div class="header">

      <nav class="navbar navbar-expand-lg navbar-light position-fixed header">
        <a class="navbar-brand text-light" href="<?= base_url('home'); ?>"> <img src="<?= base_url('asset/image/logo.jpg'); ?>" class="rounded gambar"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link ml-5 text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Home
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Welcome</a>
                  <a class="dropdown-item" href="<?= base_url ('home/pastors'); ?>">Pastor's Profile</a>
                  <a class="dropdown-item" href="#">Service</a>
                </div>
              </li>
            <li class="nav-item active ml-5">
              <a class="nav-link text-light" href="#">AboutUs<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link text-light" href="#">Link</a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item">
              <a class="nav-link text-danger" href="<?= base_url ('auth'); ?> ">Login</a>
            </li>
          </ul>
          </form>
        </div>
      </nav>
      
    </div>

  <div class="content">

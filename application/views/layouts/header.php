<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <title>FOSSBAT</title>
  </head>
  
  <body class="bg-light">

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/kebutuhan/fossbat.png" width="150" height="60" alt=""> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('home')?>">Home</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="<?=site_url('home/jadwal')?>">Jadwal Pertandingan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('home/gallery')?>">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('home/contact')?>">Hubungi Kami</a>
      </li>
    </ul>
    <?=form_open('home/cari_aksi');?>
    <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Cari Pemain..">
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="cari">
    <?=form_close();?>
    </div>
  </div>
</nav>
</div>
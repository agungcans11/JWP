<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/all.min.css">
</head>
<body class="bg-light">
    <div class="flash-success" data-flashsuccess="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error'); ?>"></div>
    <div class="flash-warning" data-flashwarning="<?= $this->session->flashdata('warning'); ?>"></div>
        
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="<?=base_url()?>assets/kebutuhan/fossbat.png" width="150" height="60" alt="">      
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav justify-content-center bg-light">
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?=site_url('admin/berita_read')?>">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?=site_url('admin/pemain_read')?>">Data Pemain</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?=site_url('admin/jadwal')?>">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?=site_url('admin/hasil_read')?>">Hasil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?=site_url('admin/lokasi_read')?>">Lokasi</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-success text-light" href="#"><?= $this->session->userdata('username')?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-danger text-light ml-2" href="<?=site_url('auth/logout')?>">Keluar</a>
        </li>
    </ul>
  </div>
</nav>

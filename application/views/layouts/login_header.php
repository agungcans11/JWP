<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/all.min.css">
</head>

<body class="bg-light">
    <div class="flash-success" data-flashsuccess="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error'); ?>"></div>
    <div class="flash-warning" data-flashwarning="<?= $this->session->flashdata('warning'); ?>"></div>
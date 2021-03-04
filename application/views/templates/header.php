<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/iconfonts/mdi/css/materialdesignicons.css') ?>">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/shared/style.css') ?>">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/demo_1/style.css') ?>">
    <link href="<?= base_url('files/js/summernote/') ?>summernote.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <!--load all styles -->

    <!-- Layout style -->
    <!-- <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>" /> -->
</head>

<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
        <div class="t-header-brand-wrapper">
            <img class="logo" src="<?= base_url('assets/images/logo.png') ?>" alt="">
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <ul class="nav mr-auto">
                    <li>
                        <h6><?= $title ?></h6>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
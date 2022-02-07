<?php

session_start();

if(!isset($_SESSION['email'])){
  die('Giriş Yetkiniz Yoktur');
} 

require_once('baglan.php');

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Dashboard Template · Bootstrap v4.6</title>

  <!-- Css Files -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/dist/css/dashboard.css" rel="stylesheet">
  <link href="../assets/dist/css/style.css" rel="stylesheet">

  <!-- Ck Editör 4 Cdn -->
  <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">ABC Admin Paneli</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
    <a href="sayfaekle.php" class="text-white text-decoration-none"><i class="bi bi-sticky"></i> Sayfa Ekle</a> &nbsp; 
    <a href="yaziekle.php" class="text-white text-decoration-none"><i class="bi bi-sticky"></i> Yazı Ekle</a> &nbsp; 
    <a href="urunekle.php" class="text-white text-decoration-none"><i class="bi bi-cart"></i> Ürün Ekle</a> &nbsp; 
    <a href="kategoriler.php" class="text-white text-decoration-none"><i class="bi bi-tags"></i> Kategori Ekle</a>
    </div>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Güvenli Çıkış</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="bi bi-house-door"></i>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sayfalar.php">
                <i class="bi bi-sticky"></i>
                Sayfalar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="yazilar.php">
                <i class="bi bi-sticky"></i>
                Yazılar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="siparisler.php">
                <i class="bi bi-wallet2"></i>
                Siparişler
              </a>
            <li class="nav-item">
              <a class="nav-link" href="urunler.php">
                <i class="bi bi-cart"></i>
                Ürünler
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kargo.php">
                <i class="bi bi-truck"></i>
                Kargo Ayarları
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kategoriler.php">
                <i class="bi bi-tags"></i>
                Kategoriler
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="uyeler.php">
                <i class="bi bi-people"></i>
                Üyeler
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ayarlar.php">
                <i class="bi bi-gear-wide"></i>
                Ayarlar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entegrasyonlar.php">
                <i class="bi bi-layers"></i>
                Entegrasyonlar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                Güvenli Çıkış
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
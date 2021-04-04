<?php 
include 'koneksi.php';
if (!isset($_SESSION)) {
    session_start();
 }
 if (!isset($_SESSION['user'])) {
    echo "<script>alert('Anda harus login dahulu');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
 }
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Quisku - Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Quisku</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Admin</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?halaman=kecamatan" class="nav-link">
                    <i class="nav-icon fas fa-map-marker-alt"></i>
                    <p>Kecamatan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?halaman=pertanyaan" class="nav-link">
                    <i class="nav-icon fas fa-question"></i>
                    <p>Pertanyaan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?halaman=hasil" class="nav-link">
                    <i class="nav-icon fas fa-check-double"></i>
                    <p>Hasil</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?halaman=user" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>User</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
        <?php
            if (isset($_GET['halaman'])) {
                if ($_GET['halaman'] == "pertanyaan") {
                    include 'pertanyaan.php';
                } elseif ($_GET['halaman'] == "tambahpertanyaan") {
                    include 'tambahpertanyaan.php';
                } elseif ($_GET['halaman'] == "editpertanyaan") {
                    include 'editpertanyaan.php';
                } elseif ($_GET['halaman'] == "hapuspertanyaan") {
                    include 'hapuspertanyaan.php';
                } elseif ($_GET['halaman'] == "hasil") {
                    include 'hasil.php';
                } elseif ($_GET['halaman'] == "hapushasil") {
                    include 'hapushasil.php';
                } elseif ($_GET['halaman'] == "user") {
                    include 'user.php';
                } elseif ($_GET['halaman'] == "tambahuser") {
                    include 'tambahuser.php';
                } elseif ($_GET['halaman'] == "edituser") {
                    include 'edituser.php';
                } elseif ($_GET['halaman'] == "hapususer") {
                    include 'hapususer.php';
                } elseif ($_GET['halaman'] == "kecamatan") {
                    include 'kecamatan.php';
                } elseif ($_GET['halaman'] == "hapuskecamatan") {
                    include 'hapuskecamatan.php';
                } elseif ($_GET['halaman'] == "tambahkecamatan") {
                    include 'tambahkecamatan.php';
                } elseif ($_GET['halaman'] == "editkecamatan") {
                    include 'editkecamatan.php';
                }
            } else {
                include 'home.php';
            }
        ?>
        </div>
    </div>
</div>



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Version : 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020<a href="https://okriiza.com"> Okriiza</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->


<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/plugins/toastr/toastr.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    
  });
</script>
</body>
</html>
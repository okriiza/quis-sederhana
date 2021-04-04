<?php
include "admin/koneksi.php";
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

  <title>Quisku</title>

  <link rel="stylesheet" href="admin/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="admin/assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="admin/assets/plugins/icheck-bootstrap/icheck-material.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-primary navbar-dark">
<div class="container">
    <a href="index.php" class="navbar-brand">
    <!-- <img src="admin/assets/dist/img/k.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> -->
    <span class="brand-text font-weight-bold">Quisku</span>
    </a>
    
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <!-- Left navbar links -->
    <!-- <form class="form-inline ml-0 ml-md-3">
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
            </button>
        </div>
        </div>
    </form> -->
    
    </div>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
        <a href="hasil.php" class="nav-link">Hasil </a>
        </li>
    </ul>
    </ul>
</div>
</nav>



<div class="content-wrapper">
<div class="content-header">
    <div class="container">
    <div class="row mb-2 align-items-center">
        <div class="col-sm-6">
        <h1 class="mb-2 text-uppercase">Kuesioner Penelitian Dampak COVID-19 Berdasarkan Kecamatan Kota Bandung</h1>
        <p class="text-justify">Dengan Adanya Kuesioner Ini , di harapkan bisa memantau dampak yang terjadi di daerah kota bandung berdasarkan Kecamatan, Kuesioner Ini Menyangkut Pekerjaan , keluarga dan lingkungan. </p>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-lg"> Mulai Kuesioner</button>
        </div>
        <div class="col-sm-6">
        <img src="img/quis.jpg" width="500" height="500">
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Kuesioner</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kuis-tab" data-toggle="pill" href="#kuis" role="tab" aria-controls="kuis" aria-selected="false">Kuesioner</a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="" method="post">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama*</label>
                                                <input type="text" name="nama" class="form-control" require>
                                            </div>
                                            <div class="form-group">
                                                <label>Umur*</label>
                                                <input type="text" name="umur" class="form-control" require>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin*</label>
                                                <input type="text" name="jeniskelamin"  list="jk" class="form-control" require>
                                                <datalist id="jk">
                                                <option value="Laki Laki">Laki Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                                </datalist>
                                            </div>
                                            <div class="form-group">
                                                <label>Kecamatan*</label>
                                                <input type="text" name="kecamatan" list="kecamatan" class="form-control" require>
                                                <datalist id="kecamatan">
                                                <?php $ambil = $koneksi->query("SELECT * FROM kecamatan") ;?>
                                                <?php while ($kec = $ambil->fetch_assoc()) {;?>
                                                <option value="<?php echo $kec['nama_kecamatan']  ;?>"></option>
                                                <?php } ;?>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kelurahan*</label>
                                                <input type="text" name="kelurahan" class="form-control" require>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>No HP</label>
                                                <input type="text" name="nohp" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="kuis" role="tabpanel" aria-labelledby="kuis-tab">
                                <?php 
                                $nomor = 1;
                                $ambil = $koneksi->query("SELECT * FROM pertanyaan");?>
                                <?php while ($pertanyaan = $ambil->fetch_array()) {;?>
                                <div class="form-group">
                                    <label for="">No. <?php echo $nomor++?> <?php echo $pertanyaan['pertanyaan']?></label>
                                    <input type="hidden" name="id_pertanyaan"  value="<?php echo $pertanyaan['id']?>">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="j[<?php echo $pertanyaan['id'] ;?>]" value="<?php echo $pertanyaan['pilihan1']?>">
                                        <label class="form-check-label"><?php echo $pertanyaan['pilihan1']?></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="j[<?php echo $pertanyaan['id'] ;?>]" value="<?php echo $pertanyaan['pilihan2']?>">
                                        <label class="form-check-label"><?php echo $pertanyaan['pilihan2']?></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="j[<?php echo $pertanyaan['id'] ;?>]" value="<?php echo $pertanyaan['pilihan3']?>">
                                        <label class="form-check-label"><?php echo $pertanyaan['pilihan3']?></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="j[<?php echo $pertanyaan['id'] ;?>]" value="<?php echo $pertanyaan['pilihan4']?>">
                                        <label class="form-check-label"><?php echo $pertanyaan['pilihan4']?></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="j[<?php echo $pertanyaan['id'] ;?>]" value="<?php echo $pertanyaan['pilihan5']?>">
                                        <label class="form-check-label"><?php echo $pertanyaan['pilihan5']?></label>
                                    </div>
                                </div>
                                <?php }?>
                                <button name="submit" class="btn btn-outline-primary btn-sm" onclick="return confirm('Cek Kembali Pilihan Anda, Jika Sudah Terisi Semua Maka Lanjutkan :D')">Kirim Kuesioner</button>
                                </form>

                                <?php
                                if (isset($_POST['submit'])) {
                                $id_pertanyaan = ['id_pertanyaan'];
                                $nama = $_POST['nama'];
                                $umur = $_POST['umur'];
                                $jeniskelamin = $_POST['jeniskelamin'];
                                $kecamatan = $_POST['kecamatan'];
                                $kelurahan = $_POST['kelurahan'];
                                    if (empty($nama AND $umur AND $jeniskelamin AND $kecamatan AND $kelurahan)) {
                                        echo "<script>alert('Data Profile Belum Terpenuhi!')</script>";
                                    } else {

                                        $val_in = $di_jawab_1 = $di_jawab_2 = $di_jawab_3 = $di_jawab_4 = $di_jawab_5 = array();
                                        foreach ($_POST['j'] as $key => $value) {
                                            if (empty($value)) {
                                                $pesan_gagal = "Ada yang belum diisi";
                                                break;
                                            }
                                            //key = id_soal, value=jawaban A/B/C/D
                                            $val_in[] = "(" . $key . ",'" . $value . "')";
                                            if ($value == 'Senang Sekali') {
                                                $di_jawab_1[] = $key;
                                            }
                                            if ($value == 'Senang') {
                                                $di_jawab_2[] = $key;
                                            }
                                            if ($value == 'Biasa') {
                                                $di_jawab_3[] = $key;
                                            }
                                            if ($value == 'Tidak Senang') {
                                                $di_jawab_4[] = $key;
                                            }
                                            if ($value == 'Tidak Senang Sekali') {
                                                $di_jawab_5[] = $key;
                                            }
                                        }
                                        $value_sql_to_in = implode(",", $val_in);
                                        $sql_in_jawaban = "INSERT INTO fixhasil
                                            (id_pertanyaan,jawaban)
                                            VALUES " . $value_sql_to_in;
                                        mysqli_query($koneksi, $sql_in_jawaban);

                                        $jawaban_1 = count($di_jawab_1);
                                        $jawaban_2 = count($di_jawab_2);
                                        $jawaban_3 = count($di_jawab_3);
                                        $jawaban_4 = count($di_jawab_4);
                                        $jawaban_5 = count($di_jawab_5);
                                        
                                        $koneksi->query("INSERT INTO hasil (nama,umur,jenis_kelamin,kecamatan,kelurahan,email,no_hp,pilihan1,pilihan2,pilihan3,pilihan4,pilihan5) VALUE ('$_POST[nama]','$_POST[umur]','$_POST[jeniskelamin]','$_POST[kecamatan]','$_POST[kelurahan]','$_POST[email]','$_POST[nohp]','$jawaban_1','$jawaban_2','$jawaban_3','$jawaban_4','$jawaban_5')");

                                        echo "<script>alert('Data Berhasil Di Kirim')</script>";
                                        echo "<script>location='hasil.php';</script>";
                                        
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <footer class="main-footer fixed-bottom">
    <div class="float-right d-none d-sm-inline">
      Version 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="https://okriiza.com"> Okriiza</a>.</strong> All rights reserved.
  </footer>
</div>

<script src="admin/assets/plugins/jquery/jquery.min.js"></script>
<script src="admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/assets/dist/js/adminlte.min.js"></script>
</body>
</html>

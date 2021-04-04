<?php
$ambil = $koneksi->query("SELECT * FROM pertanyaan WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pertanyaan WHERE id='$_GET[id]'");
echo "<script>alert('Pertanyaan Berhasil Terhapus');</script>";
echo "<script>location='index.php?halaman=pertanyaan';</script>";

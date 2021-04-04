<?php
$ambil = $koneksi->query("SELECT * FROM hasil WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM hasil WHERE id='$_GET[id]'");
echo "<script>alert('Hasil Berhasil Terhapus');</script>";
echo "<script>location='index.php?halaman=hasil';</script>";

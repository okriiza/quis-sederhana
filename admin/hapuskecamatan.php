<?php
$ambil = $koneksi->query("SELECT * FROM kecamatan WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$filegeojson = $pecah['geojson_kecamatan'];
if (file_exists("../geojson/$filegeojson")) {
    unlink("../geojson/$filegeojson");
}
$koneksi->query("DELETE FROM kecamatan WHERE id='$_GET[id]'");
echo "<script>alert('Kecamatan Terhapus');</script>";
echo "<script>location='index.php?halaman=kecamatan';</script>";
?>
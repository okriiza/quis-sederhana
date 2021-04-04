<?php
include "admin/koneksi.php";
$return_arr = array();
$ambil = $koneksi->query("SELECT 
id, kecamatan, 
COUNT(pilihan1),
COUNT(pilihan2),
COUNT(pilihan3),
COUNT(pilihan4),
COUNT(pilihan5) 
FROM hasil GROUP BY kecamatan") ;
while ($inidia = $ambil->fetch_assoc()) { 
        $id = $inidia['id'];
        $kecamatan = $inidia['kecamatan'];
        $pilihan1 = $inidia['pilihan1'];
        $pilihan2 = $inidia['pilihan2'];
        $pilihan3 = $inidia['pilihan3'];
        $pilihan4 = $inidia['pilihan4'];
        $pilihan5 = $inidia['pilihan5'];
        $return_arr[] = array("id" => $id,"kecamatan" => $kecamatan,"pilihan1" => $pilihan1,"pilihan2" => $pilihan2,"pilihan3" => $pilihan3,"pilihan4" => $pilihan4,"pilihan5" => $pilihan5);
}

echo json_encode($return_arr);
?>
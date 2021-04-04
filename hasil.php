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
    <link rel="stylesheet" href="admin/assets/plugins/leaflet/leaflet.css">
    <style type="text/css">
    #map{
			width: 100%;
			height: 100vh
		}
        .list-covid{
        height: 100vh;
        overflow-x: hidden;
        }
        .list-group-item:hover{
        cursor: pointer;
        }
        ::-webkit-scrollbar {
        width: 5px;
        }

        ::-webkit-scrollbar-track {
        background: #eee;
        }

        ::-webkit-scrollbar-thumb {
        background: #ccc;
        }

        ::-webkit-scrollbar-thumb:hover {
        background: #bbb;
        }
    </style>
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
    <h2>Data Hasil Tiap Kecamatan</h2>
        <div class="row ">
            <div class="col-md-3">
                <ul class="list-group list-covid">
                <?php  
                $ambil = $koneksi->query("SELECT 
                id, kecamatan, 
                SUM(pilihan1) AS pil1,
                SUM(pilihan2) AS pil2,
                SUM(pilihan3) AS pil3,
                SUM(pilihan4) AS pil4,
                SUM(pilihan5) AS pil5 
                FROM hasil GROUP BY kecamatan");
                while ($inidia = $ambil->fetch_assoc()) { 
                ?>
                    <li class="list-group-item" data-id="<?php echo $inidia['kecamatan'] ;?>">
                        <h5><b><?php echo $inidia['kecamatan'] ;?></b></h5>
                        <span class="text-primary">Senang Sekali : <?php echo $inidia['pil1'] ;?></span>
                        <span class="text-success">Senang : <?php echo $inidia['pil2'] ;?></span> 
                        <span class="text-info">Biasa : <?php echo $inidia['pil3'] ;?></span> 
                        <span class="text-warning">Tidak Senang : <?php echo $inidia['pil4'] ;?></span> 
                        <span class="text-danger">Tidak Senang Sekali : <?php echo $inidia['pil5'] ;?></span>
                    </li>
                <?php } ;?>
                </ul>
            </div>
            <div class="col-md-9">
                <div id="map"></div>
            </div>    
        </div>
    </div>
</div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Version 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="https://okriiza.com"> Okriiza</a>.</strong> All rights reserved.
  </footer>
</div>

<script src="admin/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/assets/dist/js/adminlte.min.js"></script>
<script src="admin/assets/plugins/leaflet/leaflet.js"></script>
<script src="admin/assets/plugins/leaflet/leaflet.ajax.js"></script>

<script>
    var mymap = L.map('map').setView([-6.9242297,107.6093803], 12);

    // ovj = JSON.parse(api);
    // console.log(ovj)
    


//     L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
//     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
//     maxZoom: 18,
//     id: 'mapbox/streets-v11',
//     tileSize: 512,
//     zoomOffset: -1,
//     accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
// }).addTo(mymap);

    var datahasil=[];
    var datapilihan1=[];
    var geojson=[];

    $(document).on("click",".list-covid .list-group-item",function(){
         var id=$(this).data("id");
         var set=geojson[id];
         set.eachLayer(function(feature){
            feature.openPopup();
            mymap.fitBounds(feature.getBounds());
         });
      });
    
      function onEachFeature(f, layer) {

          var kecamatan=f.properties.nama_kecamatan;

            // datakecamatan = datahasil[kecamatan];
//             datapilihan1 = datapilihan1[pilihan1];
// console.log(datapilihan1)

            var popUp='<table>'+
                    '<tr>'+
                        '<td colspan="4"><h6><b>'+kecamatan+'</b></h6></td>'+
                    '</tr>'+
                    // '<tr>'+
                    //     '<td>Senang Sekali : </td>'+
                    //     '<td id="pilihan1">'+datakecamatan.pilihan1+'</td>'+
                    // '</tr>'+
                    // '<tr>'+
                    //     '<td>Senang : </td>'+
                    //     '<td id="pilihan2">'+data.pilihan2+'</td>'+
                    // '</tr>'+
                    // '<tr>'+
                    //     '<td>Biasa : </td>'+
                    //     '<td id="pilihan2">'+data.pilihan3+'</td>'+
                    // '</tr>'+
                    // '<tr>'+
                    //     '<td>Tidak Senang : </td>'+
                    //     '<td id="pilihan2">'+data.pilihan4+'</td>'+
                    // '</tr>'+
                    // '<tr>'+
                    //     '<td>Tidak Senang Sekali : </td>'+
                    //     '<td id="pilihan2">'+data.pilihan5+'</td>'+
                    // '</tr>'+
                    '</table>';
        layer.bindPopup(popUp);
    
    }

   
    <?php $ambil = $koneksi->query("SELECT * FROM kecamatan");?>
    <?php while ($geojson = $ambil->fetch_array()) {;?>
        var myStyle<?php echo $geojson['id']?> = {
                    "color": "<?php echo $geojson['warna']?>",
                    "weight": 1,
                    "opacity": 1,
                    "fillOpacity": 0.5
                };

    $.getJSON("geojson/<?php echo $geojson['nama_kecamatan'] ?>.geojson",function(data) {
        // console.log(data)
        var nama_kecamatan=data.features[0].properties.nama_kecamatan;
        geojson[nama_kecamatan]=L.geoJSON(data,{
            onEachFeature:onEachFeature,style: myStyle<?php echo $geojson['id']?>
        }).addTo(mymap);

    });
    
    <?php }?>

</script>



</body>
</html>

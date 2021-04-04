<?php
$ambil = $koneksi->query("SELECT * FROM kecamatan WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>


<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Kecamatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item ">Pertanyaan</li>
            <li class="breadcrumb-item active">Edit Kecamatan</li>
        </ol>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
            <div class="card card-primary card-outline ">
                <div class="card-header">
                    <h3 class="card-title">Edit Kecamatan</h3>
                    <div class="card-tools">
                        <a href="index.php?halaman=kecamatan" class="btn btn-warning btn-sm float-right"><i class="fa fa-undo"></i> kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label>Kode Kecamatan</label>
                        <input type="text" name="kodekecamatan" class="form-control" value="<?php echo $pecah['kd_kecamatan']; ?>">
                        </div>
                        <div class="form-group">
                        <label>Nama Kecamatan</label>
                        <input type="text" name="namakecamatan" class="form-control" value="<?php echo $pecah['nama_kecamatan']; ?>">
                        </div>
                        <div class="form-group">
                        <label>GeoJson Kecamatan</label>
                        <input type="file" name="geojsonkecamatan" class="form-control">
                        </div>

                        <button name="update" class="btn btn-primary btn-sm "><i class="fa fa-save"></i> Update</button>
                    </form>
                    <?php
                    if (isset($_POST['update'])) {
                        $namageo = $_FILES['geojsonkecamatan']['name'];
                        $lokasi = $_FILES['geojsonkecamatan']['tmp_name'];
                        if (!empty($namageo)) {
                            $ambil = $koneksi->query("SELECT * FROM kecamatan WHERE id='$_GET[id]'");
                            $pecah = $ambil->fetch_assoc();
                            $filegeojson = $pecah['geojson_kecamatan'];
                            if (file_exists("../geojson/$filegeojson")) {
                                unlink("../geojson/$filegeojson");
                            }
                            move_uploaded_file($lokasi, '../geojson/'.$namageo);
                            $koneksi->query("UPDATE kecamatan SET kd_kecamatan='$_POST[kodekecamatan]',nama_kecamatan='$_POST[namakecamatan]',geojson_kecamatan='$namageo' WHERE id='$_GET[id]'");
                        } else {
                            $koneksi->query("UPDATE kecamatan SET kd_kecamatan='$_POST[kodekecamatan]',nama_kecamatan='$_POST[namakecamatan]' WHERE id='$_GET[id]'");
                        
                        }
                        echo "<script>alert('Data Kecamatan telah diubah')</script>";
                        echo "<script>location='index.php?halaman=kecamatan';</script>";
                    }
                    ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
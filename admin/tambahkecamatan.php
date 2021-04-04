<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tambah Kecamatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item ">Pertanyaan</li>
            <li class="breadcrumb-item active">Tambah Kecamatan</li>
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
                    <h3 class="card-title">Tambah Kecamatan</h3>
                    <div class="card-tools">
                    <a href="index.php?halaman=kecamatan" class="btn btn-warning btn-sm float-right"><i class="fa fa-undo"></i> kembali</a>
                    </div>
                </div>
                <?php
                if (isset($_POST['simpan'])) {
                    $nama = $_FILES['geojsonkecamatan']['name'];
                    $lokasi = $_FILES['geojsonkecamatan']['tmp_name'];
                    move_uploaded_file($lokasi, '../geojson/'.$nama);
                    $koneksi->query("INSERT INTO kecamatan (kd_kecamatan,nama_kecamatan,geojson_kecamatan) VALUE ('$_POST[kodekecamatan]','$_POST[namakecamatan]','$nama')");
                    echo "<script>alert('Data Berhasil Di Simpan')</script>";
                    echo "<script>location='index.php?halaman=kecamatan';</script>";
                }
                ?>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kode Kecamatan</label>
                        <input type="text" name="kodekecamatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Kecamatan</label>
                        <input type="text" name="namakecamatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>GeoJson Kecamatan</label>
                        <input type="file" name="geojsonkecamatan" class="form-control">
                    </div>
                    
                    <button name="simpan" class="btn btn-primary btn-sm "><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
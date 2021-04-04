<?php
$ambil = $koneksi->query("SELECT * FROM pertanyaan WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>


<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Pertanyaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item ">Pertanyaan</li>
            <li class="breadcrumb-item active">Edit Pertanyaan</li>
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
                    <h3 class="card-title">Barang</h3>
                    <div class="card-tools">
                        <a href="index.php?halaman=pertanyaan" class="btn btn-warning btn-sm float-right"><i class="fa fa-undo"></i> kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="pertanyaan" class="form-control" value="<?php echo $pecah['pertanyaan']; ?>">
                        </div>
                        <div class="form-group">
                        <label>Pilihan 1</label>
                        <input type="text" name="pilihan1" class="form-control" value="<?php echo $pecah['pilihan1']; ?>">
                        </div>
                        <div class="form-group">
                        <label>Pilihan 2</label>
                        <input type="text" name="pilihan2" class="form-control" value="<?php echo $pecah['pilihan2']; ?>">
                        </div>
                        <div class="form-group">
                        <label>Pilihan 3</label>
                        <input type="text" name="pilihan3" class="form-control" value="<?php echo $pecah['pilihan3']; ?>">
                        </div>
                        <div class="form-group">
                        <label>Pilihan 4</label>
                        <input type="text" name="pilihan4" class="form-control" value="<?php echo $pecah['pilihan4']; ?>">
                        </div>
                        <div class="form-group">
                        <label>Pilihan 5</label>
                        <input type="text" name="pilihan5" class="form-control" value="<?php echo $pecah['pilihan5']; ?>">
                        </div>

                        <button name="update" class="btn btn-primary btn-sm "><i class="fa fa-save"></i> Update</button>
                    </form>
                    <?php
                    if (isset($_POST['update'])) {
                        $koneksi->query("UPDATE pertanyaan SET pertanyaan='$_POST[pertanyaan]',pilihan1='$_POST[pilihan1]',pilihan2='$_POST[pilihan2]',pilihan3='$_POST[pilihan3]',pilihan4='$_POST[pilihan4]', pilihan5='$_POST[pilihan5]' WHERE id='$_GET[id]'");
                        echo "<script>alert('Data Pertanyaan telah diubah')</script>";
                        echo "<script>location='index.php?halaman=pertanyaan';</script>";
                    }
                    ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
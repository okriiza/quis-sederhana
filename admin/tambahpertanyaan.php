<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tambah Pertanyaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item ">Pertanyaan</li>
            <li class="breadcrumb-item active">Tambah Pertanyaan</li>
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
                    <h3 class="card-title">Tambah Pertanyaan</h3>
                    <div class="card-tools">
                    <a href="index.php?halaman=pertanyaan" class="btn btn-warning btn-sm float-right"><i class="fa fa-undo"></i> kembali</a>
                    </div>
                </div>
                <?php
                if (isset($_POST['simpan'])) {
                    $koneksi->query("INSERT INTO pertanyaan (pertanyaan,pilihan1,pilihan2,pilihan3,pilihan4,pilihan5) VALUE ('$_POST[pertanyaan]','$_POST[pilihan1]','$_POST[pilihan2]','$_POST[pilihan3]','$_POST[pilihan4]','$_POST[pilihan5]')");
                    echo "<script>alert('Data Berhasil Di Simpan')</script>";
                    echo "<script>location='index.php?halaman=pertanyaan';</script>";
                }
                ?>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <input type="text" name="pertanyaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pilihan 1</label>
                        <input type="text" name="pilihan1" list="pilihan1" class="form-control">
                        <datalist id="pilihan1">
                            <?php
                            $query = "SELECT * FROM skala_likert";
                            $ambil = $koneksi->query($query);
                            while ($pilihan = $ambil->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $pilihan['pilihan']; ?>"></option>
                            <?php }; ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label>Pilihan 2</label>
                        <input type="text" name="pilihan2" list="pilihan2" class="form-control">
                        <datalist id="pilihan2">
                            <?php
                            $query = "SELECT * FROM skala_likert";
                            $ambil = $koneksi->query($query);
                            while ($pilihan = $ambil->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $pilihan['pilihan']; ?>"></option>
                            <?php }; ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label>Pilihan 3</label>
                        <input type="text" name="pilihan3" list="pilihan3" class="form-control">
                        <datalist id="pilihan3">
                            <?php
                            $query = "SELECT * FROM skala_likert";
                            $ambil = $koneksi->query($query);
                            while ($pilihan = $ambil->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $pilihan['pilihan']; ?>"></option>
                            <?php }; ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label>Pilihan 4</label>
                        <input type="text" name="pilihan4" list="pilihan4" class="form-control">
                        <datalist id="pilihan4">
                            <?php
                            $query = "SELECT * FROM skala_likert";
                            $ambil = $koneksi->query($query);
                            while ($pilihan = $ambil->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $pilihan['pilihan']; ?>"></option>
                            <?php }; ?>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label>Pilihan 5</label>
                        <input type="text" name="pilihan5" list="pilihan5" class="form-control">
                        <datalist id="pilihan5">
                            <?php
                            $query = "SELECT * FROM skala_likert";
                            $ambil = $koneksi->query($query);
                            while ($pilihan = $ambil->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $pilihan['pilihan']; ?>"></option>
                            <?php }; ?>
                        </datalist>
                    </div>
                    
                    <button name="simpan" class="btn btn-primary btn-sm "><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
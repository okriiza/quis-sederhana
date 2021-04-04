<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Hasil Kuesioner</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hasil</li>
        </ol>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">Hasil Kuesioner</h5>
                <!-- <a href="index.php?halaman=tambahhasil" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> Tambah Hasil</a> -->
            </div>
            <div class="card-body table-responsive-md">
                <table id="example1" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width:5%;">No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th style="width:10%;">Pilihan 1</th>
                        <th style="width:10%;">Pilihan 2</th>
                        <th style="width:10%;">Pilihan 3</th>
                        <th style="width:10%;">Pilihan 4</th>
                        <th style="width:10%;">Pilihan 5</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM hasil "); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td align="center"><?php echo $nomor++; ?></td>
                            <td><?php echo $pecah['nama']; ?></td>
                            <td><?php echo $pecah['umur']; ?></td>
                            <td><?php echo $pecah['jenis_kelamin']; ?></td>
                            <td><?php echo $pecah['kecamatan']; ?></td>
                            <td><?php echo $pecah['kelurahan']; ?></td>
                            <td><?php echo $pecah['email']; ?></td>
                            <td><?php echo $pecah['no_hp']; ?></td>
                            <td><?php echo $pecah['pilihan1']; ?></td>
                            <td><?php echo $pecah['pilihan2']; ?></td>
                            <td><?php echo $pecah['pilihan3']; ?></td>
                            <td><?php echo $pecah['pilihan4']; ?></td>
                            <td><?php echo $pecah['pilihan5']; ?></td>
                            <td style="width: 16%">
                                <!-- <a href="index.php?halaman=edithasil&id=<?php echo $pecah['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit "></i> Edit</a> -->
                                <a href="index.php?halaman=hapushasil&id=<?php echo $pecah['id']; ?>" onclick="return confirm('yakin akan hapus Hasil ini ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php }; ?>
                </table>
            </div>
        </div>
    </div>
</div>

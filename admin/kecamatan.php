<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Kecamatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kecamatan</li>
        </ol>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">Data Kecamatan</h5>
                <a href="index.php?halaman=tambahkecamatan" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> Tambah Kecamatan</a>
            </div>
            <div class="card-body table-responsive-md">
                <table id="example1" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width:5%;">No</th>
                        <th>Kode Kecamatan</th>
                        <th>Nama Kecamatan</th>
                        <th>GeoJson Kecamatan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM kecamatan"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td align="center"><?php echo $nomor++; ?></td>
                            <td><?php echo $pecah['kd_kecamatan']; ?></td>
                            <td><?php echo $pecah['nama_kecamatan']; ?></td>
                            <td><a href="../geojson/<?php echo $pecah['geojson_kecamatan']; ?>" target="_blank" ><?php echo $pecah['geojson_kecamatan']; ?></a></td>
                            <td style="width: 16%">
                                <a href="index.php?halaman=editkecamatan&id=<?php echo $pecah['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit "></i> Edit</a>
                                <a href="index.php?halaman=hapuskecamatan&id=<?php echo $pecah['id']; ?>" onclick="return confirm('yakin akan hapus kecamatan ini ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php }; ?>
                </table>
            </div>
        </div>
    </div>
</div>

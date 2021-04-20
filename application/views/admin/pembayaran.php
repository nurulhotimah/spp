<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Panel Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Siswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <!-- <button class="btn btn-primary btn-sm" data-target="#tambahdata" data-toggle="modal"> <i class="fa fa-plus"></i> Tambah Siswa</button> -->
                                <a href="" style="margin-left: 830px;">Data Pembayaran</a>
                            </div>
                        </div>
                        <!-- .card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id Spp</th>
                                        <th>Nama Petugas</th>
                                        <th>Nama Siswa</th>
                                        <th>/Tahun</th>
                                        <th>Tanggal</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Spp/Bulan</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $queryPembayaran = "SELECT * FROM pembayaran  inner join spp on`spp`.`id_spp` = `pembayaran`.`id_spp`inner join siswa on `siswa`.`nisn` = `pembayaran`.`nisn` inner join petugas on `petugas`.`id_petugas` = `pembayaran`.`id_petugas`";
                                $Pembayaran = $this->db->query($queryPembayaran)->result_array();
                                ?>
                                <tbody>
                                    <?php foreach ($Pembayaran as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['id_pembayaran'] ?></td>
                                            <td><?php echo $row['nama_petugas'] ?></td>
                                            <td><?php echo $row['nama'] ?></td>
                                            <td><?php echo $row['nominal'] ?></td>
                                            <td><?php echo $row['tgl_bayar'] ?></td>
                                            <td><?php echo $row['bulan_dibayar'] ?></td>
                                            <td><?php echo $row['tahun_dibayar'] ?></td>
                                            <td><?php echo $row['perbulan'] ?></td>
                                            <td><?php echo $row['jumlah_bayar'] ?></td>
                                            <td><?php
                                                if ($row['status'] == '2') {
                                                    echo 'Lunas';
                                                }
                                                if ($row['status'] == '1') {
                                                    echo 'Belum diBayar';
                                                }
                                                ?></td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?php echo $row['id_pembayaran'] ?>">Bayar</a>
                                                <!-- <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $row['nisn'] ?>"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                                            </td>
                                        </tr>


                                        <!-- modal Edit Kelas -->
                                        <div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['id_pembayaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="row">


                                                    <div class="col-sm-10">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <img src="<?= base_url() ?>assets/img/icon/love.png" height="30px">
                                                                <h5 class="modal-title ml-2" id="exampleModalLabel">FORM EDIT KELAS</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="card">
                                                                <div class="modal-body">
                                                                    <?php echo form_open_multipart('menu_admin/pembayara/update'); ?>
                                                                    <form action="<?php echo base_url() . 'menu_admin/pengaduan/update'; ?>" method="post">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Bayar Perbulan</label>
                                                                            <input type="hidden" name="id_pembayaran" class="form-control" value="<?php echo $row['id_pembayaran'] ?>">
                                                                            <input type="hidden" name="tgl_bayar" class="form-control col-sm-6" value="<?php echo date("Y-m-d"); ?>">
                                                                            <input type="hidden" name="status" class="form-control col-sm-6" value="2">
                                                                            <input type="number" name="jumlah_bayar" class="form-control  col-sm-6">
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-8 ml-auto">
                                                                                <button type=" submit" class="btn btn-primary">Bayar</button>
                                                                            </div>


                                                                        </div>

                                                                    </form>
                                                                    <footer><i class="fas fa-copyright"></i>SPP~NurulHotimah</footer>



                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- akhir modal Edit -->


                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
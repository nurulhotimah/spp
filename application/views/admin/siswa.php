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
                                <button class="btn btn-primary btn-sm" data-target="#tambahdata" data-toggle="modal"> <i class="fa fa-plus"></i> Tambah Siswa</button> <a href="" style="margin-left: 830px;">Data Siswa</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Spp</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $querySiswa = "SELECT * FROM siswa inner join kelas on `kelas`.`id_kelas` = `siswa`.`id_kelas` inner join spp on`spp`.`id_spp` = `siswa`.`id_spp`";
                                $siswa = $this->db->query($querySiswa)->result_array();
                                ?>
                                <tbody>
                                    <?php foreach ($siswa as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['nisn'] ?></td>
                                            <td><?php echo $row['nis'] ?></td>
                                            <td><?php echo $row['nama'] ?></td>
                                            <td><?php echo $row['nama_kelas'] ?></td>
                                            <td><?php echo $row['alamat'] ?></td>
                                            <td><?php echo $row['no_telp'] ?></td>
                                            <td><?php echo $row['nominal'] ?></td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#view<?php echo $row['nisn'] ?>"><i class="fas fa-eye"></i></a>
                                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $row['nisn'] ?>"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <!-- modal Tambah Kelas -->
                                        <div class="modal fade bd-example-modal-lg" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="row">


                                                    <div class="col-sm-10">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <img src="<?= base_url() ?>assets/img/icon/love.png" height="30px">
                                                                <h5 class="modal-title ml-2" id="exampleModalLabel">FORM TAMBAH SISWA</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="card">
                                                                <div class="modal-body">

                                                                    <form action="<?php echo base_url() . 'menu_admin/siswa/tambah'; ?>" method="post">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nisn</label>
                                                                            <input type="text" name="nisn" class="form-control col-sm-6">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nis</label>
                                                                            <input type="text" name="nis" class="form-control col-sm-6">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nama</label>
                                                                            <input type="text" class="form-control col-sm-6" name="nama" class="form-control">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Kelas</label>
                                                                            <select name="id_kelas" id="" class="form-control col-sm-6">
                                                                                <option value="0" disabled>Pilih Kelas</option>
                                                                                <?php echo "<option value=" . $row['id_kelas'] . ">$row[nama_kelas]</option>"; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-8 ml-auto">
                                                                                <button type=" submit" class="btn btn-primary">Tambah Kelas</button>
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
                                        <!-- akhir modal TAmbah-->


                                        <!-- modal Edit Kelas -->
                                        <div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['nisn'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <?php echo form_open_multipart('menu_admin/siswa/update'); ?>
                                                                    <form action="<?php echo base_url() . 'menu_admin/pengaduan/update'; ?>" method="post">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nis</label>
                                                                            <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row['nisn'] ?>">
                                                                            <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row['nis'] ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nama</label>
                                                                            <input type="text" name="nama" class="form-control  col-sm-6" value="<?php echo $row['nama'] ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nama</label>
                                                                            <input type="text" name="nama_kelas" class="form-control  col-sm-6" value="<?php echo $row['nama_kelas'] ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nama</label>
                                                                            <input type="text" name="alamat" class="form-control  col-sm-6" value="<?php echo $row['alamat'] ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nama</label>
                                                                            <input type="text" name="no_telp" class="form-control  col-sm-6" value="<?php echo $row['no_telp'] ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Pengaduan</label>
                                                                            <select name="id_pengaduan" id="" class="form-control col-sm-5">
                                                                                <option value=""><?php echo $row['nominal'] ?></option>

                                                                            </select>
                                                                        </div>





                                                                        <div class="row">
                                                                            <div class="col-sm-8 ml-auto">
                                                                                <button type=" submit" class="btn btn-primary">Edit Kelas</button>
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

                                        <!-- modal View Kelas -->
                                        <div class="modal fade bd-example-modal-lg" id="view<?php echo $row['nisn'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="row">


                                                    <div class="col-sm-10">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <img src="<?= base_url() ?>assets/img/icon/love.png" height="30px">
                                                                <h5 class="modal-title ml-2" id="exampleModalLabel">DATA KELAS</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="card">
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nama Kelas</label>
                                                                            <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_kelas ?>">
                                                                            <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->nama_kelas ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Kompetensi Keahlian</label>
                                                                            <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_kelas ?>" disabled>
                                                                            <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->kompetensi_keahlian ?>" disabled>
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
                                        <!-- akhir modal View Kelas -->
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
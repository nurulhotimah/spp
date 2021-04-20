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
                        <li class="breadcrumb-item active">Kelas</li>
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
                                <button class="btn btn-primary btn-sm" data-target="#tambahdata" data-toggle="modal"> <i class="fa fa-plus"></i> Tambah Kelas</button> <a href="" style="margin-left: 830px;">Data Kelas</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($spp as $row) : ?>
                                        <tr>
                                            <td><?php echo $row->id_spp ?></td>
                                            <td><?php echo $row->tahun ?></td>
                                            <td><?php echo $row->nominal ?></td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#view<?php echo $row->id_spp ?>"><i class="fas fa-eye"></i></a>
                                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $row->id_spp ?>"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>


                                        <!-- modal Tambah SPP -->
                                        <div class="modal fade bd-example-modal-lg" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="row">


                                                    <div class="col-sm-10">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <img src="<?= base_url() ?>assets/img/icon/love.png" height="30px">
                                                                <h5 class="modal-title ml-2" id="exampleModalLabel">FORM TAMBAH SPP</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="card">
                                                                <div class="modal-body">
                                                                    <form action="<?php echo base_url() . 'menu_admin/spp/tambah'; ?>" method="post">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Id Spp</label>
                                                                            <input type="text" name="id_spp" class="form-control col-sm-6">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Tahun</label>
                                                                            <input type="text" name="tahun" class="form-control col-sm-6">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nominal</label>
                                                                            <input type="text" name="nominal" class="form-control col-sm-6">
                                                                        </div>





                                                                        <div class="row">
                                                                            <div class="col-sm-8 ml-auto">
                                                                                <button type=" submit" class="btn btn-primary">Tambah Spp</button>
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

                                        <!-- modal Edit SPP -->
                                        <div class="modal fade bd-example-modal-lg" id="edit<?php echo $row->id_spp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="row">


                                                    <div class="col-sm-10">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <img src="<?= base_url() ?>assets/img/icon/love.png" height="30px">
                                                                <h5 class="modal-title ml-2" id="exampleModalLabel">FORM EDIT SPP</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="card">
                                                                <div class="modal-body">
                                                                    <?php echo form_open_multipart('menu_admin/pengaduan/update'); ?>
                                                                    <form action="<?php echo base_url() . 'menu_admin/pengaduan/update'; ?>" method="post">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Tahun</label>
                                                                            <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_spp ?>">
                                                                            <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->tahun ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nominal</label>
                                                                            <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->nominal ?>">
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
                                        <div class="modal fade bd-example-modal-lg" id="view<?php echo $row->id_spp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="row">


                                                    <div class="col-sm-10">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <img src="<?= base_url() ?>assets/img/icon/love.png" height="30px">
                                                                <h5 class="modal-title ml-2" id="exampleModalLabel">DATA SPP</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="card">
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Nama Kelas</label>
                                                                            <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_spp ?>">
                                                                            <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->tahun ?>">
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3">Kompetensi Keahlian</label>
                                                                            <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->nominal ?>" disabled>
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
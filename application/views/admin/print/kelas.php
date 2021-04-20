<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <a>Data Kelas</a>
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
                                    <!-- <th class="text-center">Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kelas as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->id_kelas ?></td>
                                        <td><?php echo $row->nama_kelas ?></td>
                                        <td><?php echo $row->kompetensi_keahlian ?></td>
                                        <!-- <td class="text-center">
                                            <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#view<?php echo $row->id_kelas ?>"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?php echo $row->id_kelas ?>"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td> -->
                                    </tr>


                                    <!-- modal Tambah Kelas -->
                                    <div class="modal fade bd-example-modal-lg" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="row">


                                                <div class="col-sm-10">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <img src="<?= base_url() ?>assets/img/icon/love.png" height="30px">
                                                            <h5 class="modal-title ml-2" id="exampleModalLabel">FORM TAMBAH KELAS</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="card">
                                                            <div class="modal-body">
                                                                <form action="<?php echo base_url() . 'menu_admin/kelas/tambah'; ?>" method="post">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3">Id Kelas</label>
                                                                        <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_kelas ?>">
                                                                        <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->nama_kelas ?>">
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3">Nama Kelas</label>
                                                                        <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_kelas ?>">
                                                                        <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->nama_kelas ?>">
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3">Kompetensi Keahlian</label>
                                                                        <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_kelas ?>">
                                                                        <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->kompetensi_keahlian ?>">
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
                                    <!-- akhir modal TAmbah-->

                                    <!-- modal Edit Kelas -->
                                    <div class="modal fade bd-example-modal-lg" id="edit<?php echo $row->id_kelas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <?php echo form_open_multipart('menu_admin/pengaduan/update'); ?>
                                                                <form action="<?php echo base_url() . 'menu_admin/pengaduan/update'; ?>" method="post">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3">Nama Kelas</label>
                                                                        <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_kelas ?>">
                                                                        <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->nama_kelas ?>">
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3">Kompetensi Keahlian</label>
                                                                        <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $row->id_kelas ?>">
                                                                        <input type="text" name="tgl_pengaduan" class="form-control col-sm-6" value="<?php echo $row->kompetensi_keahlian ?>">
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
                                    <div class="modal fade bd-example-modal-lg" id="view<?php echo $row->id_kelas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script>
    window.print();
</script>
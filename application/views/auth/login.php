<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class=" col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-4">
                                <div class="text-center mb-2">
                                    <img src="<?= base_url() ?>assets/img/pelnus/logo.ico" width="70px" alt="">
                                    <h2 class="h4 text-gray-900 mb-2">Selamat Datang di Halaman Login</h2>
                                    <h6 class="mt-2">Admin PPDB SMK Pelnus Serang</h6>



                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="Masukan Username Anda" value="<?= set_value('email'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Buat Akun Baru! </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
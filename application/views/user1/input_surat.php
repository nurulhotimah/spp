<!-- Begin Page Content -->
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?php if ($this->session->flashdata('flash')) : ?>
		<?php endif; ?>


		<!-- Page Heading -->
		<!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


		<section class="content">

			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="<?php echo base_url() ?>user/input_surat" role="tab" aria-controls="nav-home" aria-selected="true">Surat Tugas</a>
					<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_ortu" role="tab" aria-controls="nav-profile" aria-selected="false">Data Orang Tua / Wali</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-siswa" role="tabpanel" aria-labelledby="nav-home-tab">
					<!-- isi Content -->
					<div class="card">
						<div class="card-body">
							<h6>Surat Tugas</h6>
							<?php echo form_open_multipart('user/input_surat/save'); ?>
							<form action="<?php echo base_url('user/input_surat/save') ?>" method="post">
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Nama " name="nama_guru" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Nip</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Nip" name="nip" required>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Pangkat/Golongan</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="Nisn" name="pangkat_gol" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Jabatan</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Nis" name="jabatan" required>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Keperluan</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Nomor Seri SHUN" value="DN -" name="keperluan" required>
									</div>
								</div>
							
									<div class="col-sm-5">
										<input type="hidden" class="form-control" name="username" value="<?= $user['username']; ?>">
									</div>
								</div><br>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-primary col-sm-4">SIMPAN</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			</div>

					<!-- akhir Content -->

				</div>
			</div>





		</section>
		<!-- section content -->





	</div>
	<!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->
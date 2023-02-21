<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Daftar Petugas</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="dashboard">Home</a></li>
						<li class="breadcrumb-item active">Petugas</li>
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
					<!-- /.card -->

					<div class="card">
						<div class="card-header">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
								Registrasi Petugas
							</button>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Username</th>
										<th>Telepon</th>
										<th>Jabatan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        <td>1</td>
                                        <td>Irfan Fauziah</td>
                                        <td>VaanFz</td>
                                        <td>08497390902</td>
                                        <td>Admin</td>
                                        <td>
											<a class="btn btn-warning"
												href="<?= base_url('') ?>"><i
													class="fa fa-edit"></i></a>
											<a class="btn btn-danger"
												href="<?= base_url('') ?>"
												onclick="return confirm('Apakah Anda ingin menghapus data : ()');"><i
													class="fa fa-trash"></i></a>
										</td>
                                    </tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- MODAL -->


<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Petugas</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form method="post" action="<?= base_url('Telur/simpan_ambiltelur')?>">
	
				<div class="modal-body">
					<div class="container">
						<div class="row mt-4">
							<div class="col">
							
								<label> Nama </label>
								<div class="input-group">
									<input type="text" class="form-control" required autocomplete="off" name="nama" id="search-box"
										placeholder="Contoh Nama : Farhan Kebab" type="text" value="">
										
									<span class="input-group-btn">
									</span>
								</div>

								<label> Username </label>
								<div class="input-group">
									<input type="text" class="form-control" required autocomplete="off" name="username" id="search-box"
										placeholder="Buat Username Anda" type="text" value="">
										
									<span class="input-group-btn">
									</span>
								</div>
								
                                <label> Password </label>
								<div class="input-group">
									<input type="password" class="form-control" required autocomplete="off" name="password" id="search-box"
										placeholder="Buat Password Anda" type="text" value="">
										
									<span class="input-group-btn">
									</span>
								</div>
                                
                                <label> Telepon </label>
								<div class="input-group">
									<input type="number" class="form-control" required autocomplete="off" name="telp" id="search-box"
										placeholder="Telepon Anda" type="text" value="">
										
									<span class="input-group-btn">
									</span>
								</div>


								<label> Level </label>
								
								<select class="form-control" name="id_telur">
									<option> Pilih Level </option>
									<?php foreach($telur as $row){ ?>
									<option value="<?php echo $row->id_telur; ?>"><?php echo $row->sumber; ?></option>
									<?php } ?>
									
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
				</div>
		</div>
		</form>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Pengaduan Nonvalid</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Home</a></li>
						<li class="breadcrumb-item active">Nonvalid</li>
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
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Pengadu</th>
										<th>Tanggal Pengaduan</th>
										<th>Foto Penunjang</th>
										<th>Isi Aduan</th>
										<th>Status</th>
										<th>Verifikasi</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td>1</td>
										<td>Irfan  Fauziah</td>
										<td>09-10-2023</td>
										<td>Ini Foto</td>
										<td>Wifinya lag</td>
										<td>Belum valid</td>
										<td>
                      <a class="btn btn-success" href="">Validasi</a>
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



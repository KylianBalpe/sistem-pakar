<?php
$current_title = 'Diagnosa';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("user/_partials/head.php"); ?>
	<title>Sistem Pakar - <?php echo $current_title; ?></title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view("user/_partials/navbar.php"); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view("user/_partials/sidebar.php"); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Diagnosa Tipe Kepribadian</h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card elevation-1">
								<div class="card-body">
									<?= ($this->session->flashdata('alert')); ?>
									<table class="table table-bordered table-hover table-sm">
										<thead>
											<tr>
												<th class="text-center">Kode</th>
												<th>Nama</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<form method="POST" action="<?= site_url('Diagnosa/proses'); ?>" enctype="multipart/form-data">
												<?php if ($cekdata > 0) { ?>
													<?php foreach ($ciri as $item) { ?>
														<input type="hidden" name="kode_ciri[]" value="<?= $item->kode ?>">
														<tr>
															<td class="text-center"><?= $item->kode; ?></td>
															<td><?= $item->nama; ?></td>
															<td>
																<select class="custom-select" name="cf_user[]">
																	<option value=0>--Pilih salah satu--</option>
																	<option value=0.1>Tidak Yakin</option>
																	<option value=0.2>Cukup Tidak Yakin</option>
																	<option value=0.4>Sedikit Tidak Yakin</option>
																	<option value=0.6>Sedikit Yakin</option>
																	<option value=0.8>Cukup Yakin</option>
																	<option value=1>Yakin</option>
																</select>
															</td>
														</tr>
													<?php } ?>
												<?php } else { ?>
													<tr>
														<td colspan="7" align="center">
															<h4>Data Kosong</h4>
														</td>
													</tr>
												<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="card-footer justify-content-center" style="display: flex;">
									<button class="btn btn-primary" type="submit">Diagnosa</button>
								</div>
								</form>
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
		<footer class="main-footer">
			<?php $this->load->view("user/_partials/footer.php"); ?>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<?php $this->load->view("user/_partials/js.php"); ?>
</body>

</html>
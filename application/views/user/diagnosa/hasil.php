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
							<h1 class="m-0">Hasil Diagnosa Kepribadian</h1>
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
									<?php if ($hasil->nilai == 0) : ?>
										<h3 class="font-weight-bold">Maaf sepertinya anda perlu melakukan diagnosa kembali...</h3>
										<a href="<?php echo site_url('User/Diagnosa'); ?>">Kembali</a>
									<?php else : ?>
										<h4 class="font-weight-bold">Kepribadian anda adalah :</h4>
										<h4><?= $hasil->nama_kepribadian ?></h4>
										<br>
										<h4 class="font-weight-bold">Detail :</h4>
										<h4><?= $hasil->detail_kepribadian ?></h4>
										<br>
										<h4 class="font-weight-bold">Saran :</h4>
										<h4><?= $hasil->saran_kepribadian ?></h4>
									<?php endif; ?>
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
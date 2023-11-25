<?php
$current_title = 'Ciri';
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
                            <h1 class="m-0">Ciri - ciri Kepribadian</h1>
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
                                <!-- <div class="card-header">
                                    <a href="<?= site_url('Menu/add'); ?>" class="btn btn-primary">Tambah <?php echo ucfirst($this->uri->segment(1)) ?></a>
                                </div> -->
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?= ($this->session->flashdata('alert')); ?>
                                    <table id="example2" class="table table-bordered table-hover table-sm">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <!-- <th class="text-center">Kode</th> -->
                                                <th>Nama</th>
                                                <!-- <th>Nilai CF Pakar</th> -->
                                                <!-- <th class="text-center">Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($cekdata > 0) {
                                                $no = 1;
                                                foreach ($ciri as $item) { ?>
                                                    <tr>
                                                        <td class="text-center"><?= $no++; ?></td>
                                                        <!-- <td class="text-center"><?= $item->kode; ?></td> -->
                                                        <td><?= $item->nama; ?></td>
                                                        <!-- <td><?= $item->cf_pakar; ?></td> -->
                                                        <!-- <td class="text-center">
                                                            <a href="<?= site_url('Kepribadian/getid/' . $item->kode); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                            <a href="<?= site_url('Kepribadian/delete/' . $item->kode); ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Apakah anda yakin ingin menghapus <?= $item->nama; ?>?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td> -->
                                                    </tr><?php }
                                                    } else { ?>
                                                <tr>
                                                    <td colspan="7" align="center">
                                                        <h4>Data Kosong</h4>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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
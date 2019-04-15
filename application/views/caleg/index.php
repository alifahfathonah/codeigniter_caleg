<?php $this->load->view('layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-center text-gray-800"><?php echo $this->session->userdata('nama_user') ?></h1>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Perolehan Suara</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    if (empty($total_suara)) {
                                        echo '0';
                                    }
                                    else {
                                        echo $total_suara;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Saksi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_saksi ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card text-center">
                    <div class="card-body">
                        <p class="card-text">Rekapitulasi Data Lebih Cepat dan Realtime, Tambahkan Saksi Sekarang Juga!</p>
                        <a href="<?= site_url('welcome/caleg/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp; Input Saksi</a>
                        <a href="<?= site_url('welcome/caleg/daftar-saksi') ?>" class="btn btn-warning"><i class="fa fa-eye"></i> &nbsp; Daftar Saksi</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('layouts/footer') ?>

</body>
</html>
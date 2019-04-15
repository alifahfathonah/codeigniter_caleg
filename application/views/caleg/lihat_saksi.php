<?php $this->load->view('layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-center text-gray-800">Data Saksi</h1>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $saksi->nama_sks ?></h6>
                </div>
                <div class="card-body">
                  <p>Username : <strong><?= url_title($saksi->nama_sks, '.', TRUE) ?></strong></p>
                  <p>Telepon : <strong><?= $saksi->tlp_sks ?></strong></p>
                </div>
            </div>

            <a href="<?= site_url('welcome/saksi/hapus/'.$saksi->id_sks) ?>" class="btn btn-sm btn-danger mt-3 float-center">Hapus</a>
            
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('layouts/footer') ?>

<!-- script jquery custom -->

</body>
</html>
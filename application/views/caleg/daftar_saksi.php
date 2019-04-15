<?php $this->load->view('layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-center text-gray-800">Daftar Saksi </h1>
            </div>

            <div class="card mt-4">
                <!-- <div class="card-body"> -->
                    <ul class="list-group">
                        <?php foreach ($daftar_saksi as $saksi): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $saksi->nama_sks ?>
                            <div class="float-right">
                                <a href="<?= site_url('welcome/saksi/lihat/'.$saksi->id_sks) ?>"><i class="fa fa-eye"></i></a> &nbsp;
                                <a href="<?= site_url('welcome/saksi/hapus/'.$saksi->id_sks) ?>"><i class="fa fa-trash"></i></a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                <!-- </div> -->
            </div>

            <a href="<?= site_url('welcome/caleg') ?>" class="btn btn-sm btn-warning mt-3 float-right">Kembali</a>
            
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('layouts/footer') ?>

<!-- script jquery custom -->

</body>
</html>
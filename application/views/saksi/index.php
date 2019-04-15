<?php $this->load->view('layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-center text-gray-800"><?= $this->session->userdata('nama_user') ?></h1>
            </div>

            <!-- <div class="row"> -->
            <div class="card">
                <div class="card-body">
                    <form action="<?= site_url('saksi/input') ?>" method="POST">
                        <div class="form-group">
                            <label for="txt_kota">Kota/Kabupaten</label>
                            <input type="text" class="form-control" name="txt_kota" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_kec">Kecamatan</label>
                            <input type="text" class="form-control" name="txt_kec" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_kel">Kelurahan</label>
                            <input type="text" class="form-control" name="txt_kel" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_tps">TPS</label>
                            <input type="text" class="form-control" name="txt_tps" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_jum">Jumlah Suara</label>
                            <input type="number" class="form-control" name="txt_jum" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-primary">Input</button>
                            <button type="reset" class="btn btn-sm btn-warning">Ulang</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> --> 
            
            <div class="card mt-4">
                <ul class="list-group">
                    <?php foreach ($daftar_suara as $suara): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>TPS <?= $suara->tps_sra ?></strong><strong>SUARA: <?= $suara->jum_sra ?></strong>
                        <div class="float-right">
                            <a href="<?= site_url('saksi/lihat/hapus/'.$suara->id_sra) ?>"><i class="fa fa-trash"></i></a>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('layouts/footer') ?>

<!-- script jquery custom -->

</body>
</html>
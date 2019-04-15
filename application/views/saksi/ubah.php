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
                    <form action="<?= site_url('saksi/edit/'.$suara->id_sra) ?>" method="POST">
                        <div class="form-group">
                            <label for="txt_kota">Kota/Kabupaten</label>
                            <input type="text" class="form-control" name="txt_kota" value="<?= $suara->kota_sra ?>">
                        </div>
                        <div class="form-group">
                            <label for="txt_kec">Kecamatan</label>
                            <input type="text" class="form-control" name="txt_kec" value="<?= $suara->kec_sra ?>">
                        </div>
                        <div class="form-group">
                            <label for="txt_kel">Kelurahan</label>
                            <input type="text" class="form-control" name="txt_kel" value="<?= $suara->kel_sra ?>">
                        </div>
                        <div class="form-group">
                            <label for="txt_tps">TPS</label>
                            <input type="number" class="form-control" name="txt_tps" value="<?= $suara->tps_sra ?>">
                        </div>
                        <div class="form-group">
                            <label for="txt_jum">Jumlah Suara</label>
                            <input type="number" class="form-control" name="txt_jum" value="<?= $suara->jum_sra ?>">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> --> 
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('layouts/footer') ?>

<!-- script jquery custom -->

</body>
</html>
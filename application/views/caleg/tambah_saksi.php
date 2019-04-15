<?php $this->load->view('layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-center text-gray-800">Tambah Saksi </h1>
            </div>

            <!-- <div class="row"> -->
            <div class="card">
                <div class="card-body">
                    <form action="<?= site_url('saksi/tambah') ?>" method="POST">
                        <div class="form-group">
                            <label for="txt_nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="txt_nama" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_tlp">No. Telepon</label>
                            <input type="number" class="form-control" name="txt_tlp" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_ket">Keterangan</label>
                            <textarea name="txt_ket" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                            <button type="reset" class="btn btn-sm btn-warning">Ulang</button>
                            <a href="<?= site_url('welcome/caleg') ?>" class="btn btn-sm btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->

            <!-- <div class="row"> -->
                <div class="card mt-4">
                    <div class="card-header">Catatan!</div>
                    <div class="card-body">
                        <ol>
                            <li>Username Saksi adalah <strong>nama lengkap</strong> saat didaftarkan tetapi dipisahkan dengan tanda <strong>'.(titik)'</strong></li>
                            <li>Contoh username jika nama lengkapn <strong>irfan permana</strong> maka username saksi adalah <strong>irfan.permana</strong></li>
                            <li>Password Saksi adalah <strong>6 Digit Nomer Telepon dari belakang</strong></li>
                            <li>Contoh password jika nomer hp <strong>08115544266</strong> maka password saksi adalah <strong>544266</strong></li>
                        </ol>
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
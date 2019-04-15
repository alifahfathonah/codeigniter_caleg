<?php $this->load->view('layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Categories
                        <div class="float-right">
                            <a href="<?php echo site_url('home/categories/create') ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i> &nbsp; Insert</a>
                        </div>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5">No.</th>
                                    <th width="50%">Categories</th>
                                    <th width="50%">Slug</th>
                                    <th width="40">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('layouts/footer') ?>

<!-- script jquery custom -->
<script>
    $(document).ready(function() {
        table = $('#dataTable').DataTable({
            "processing" : true,
            "serverside" : true,
            "ajax" : {
                "url" : "<?php echo site_url('categories/data') ?>",
                "type" : "GET"
            }
        });
    });

    function deleteData(id) {
        if (confirm("Are You Sure For Delete Now ?")) {
            $.ajax({
                url: "<?php echo site_url('categories/delete/') ?>"+id,
                type: "POST",
                success: function(data){
                    table.ajax.reload();
                },
                error: function(){
                    alert('data not deleted');
                }
            });
        }
    }
</script>
</body>
</html>
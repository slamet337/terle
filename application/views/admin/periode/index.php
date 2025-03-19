<section>
    <!-- <a href="<?php echo base_url(); ?>export/view_csv" target="_blank">
        <button type="button">View CSV</button>
    </a> -->
    <div class="container">

        <p class="mb-4"></p>
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>
        </div>
        <?php endif;?>
        <?php if ($this->session->flashdata('delete')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('delete');?>
        </div>
        <?php endif;?>
        <a class="btn btn-danger mb-2" href="<?php echo base_url(); ?>periode/inputdata"><i class="fa fa-upload"></i>
            Tambah Periode</a>

        <div class="card shadow-md mb-4">
            <div class="card-header py-3">
                <!-- <h6 class="m-0 font-weight-bold text-primary">PPK Index</h6> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive" id="dataTable" cellspacing="0">

                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tahun Periode</th>
                                <th>status</th>
                                <th>aksi</th>
                            </tr>
                        </thead>


                        <?php $no=1; foreach ($periode as $data): ?>
                        <tr>
                            <!-- Data -->
                            <td style="text-align: center;"><?php echo $no++;?></td>
                            <td><?php echo $data->periode;?></td>
                            <td><?php echo $data->status;?></td>
                            <td><?php if ($data->status == 'NO') { ?>
                                <a href="<?= base_url('periode/aktif/'.$data->id) ?>" class="btn btn-danger btn-sm"
                                    style="width : 60%" type="button">Tidak Aktif</a>
                                <?php } else { ?>
                                <a href="<?= base_url('periode/nonaktif/'.$data->id) ?>" type="button"
                                    class="btn btn-primary btn-sm" style="width : 60%">Aktif</a>
                                <?php } ?>
                            </td>
                        </tr>
</section>
<?php endforeach; ?>
</div>

</div>
</tbody>
</table>
<footer class="mt-5 mb-3">
    <div class="container my-auto">
        <div class="text-center my-auto">
            <span>developed by <b>Yakuza</b></span>
        </div>
    </div>
</footer>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true
    });
});
</script>
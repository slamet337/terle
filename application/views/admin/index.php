<section>
    <!-- <a href="<?php echo base_url(); ?>export/view_csv" target="_blank">
        <button type="button">View CSV</button>
    </a> -->
    <!-- <div class="container"> -->
    <div class="row-mt-3">

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
        <a class="btn btn-danger mb-2" href="<?php echo base_url(); ?>ppk/inputdata"><i class="fa fa-upload"></i>
            Tambah Data</a>

        <div class="card shadow-md mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">PPK Index</h6>
            </div>
            <!-- <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive" id="dataTable" cellspacing="0">

                        <thead>
                            <tr>
                                <th style="width: 10px;">No.</th>
                                <th width="15%">Kode Mak</th>
                                <th width="13%">Anggaran</th>
                                <th width="13%">Perusahaan</th>
                                <th width="20%">Pekerjaan</th>
                                <th width="10%">Sumber Anggaran</th>
                                <th style="width: 20px;">Status</th>
                                <th style="width: 10px;">Aksi</th>

                            </tr>
                        </thead>


                        <?php $no=1; foreach ($ppk as $data): ?>
                        <tr>
                            <!-- Data -->
                            <td style="text-align: center;"><?php echo $no++;?></td>
                            <td><?php echo $data->kode;?>.<?php echo wordwrap(htmlspecialchars($data->mak),20,"<br>\n", true);?>
                            </td>
                            <td><?php echo 'Rp ' . number_format($data->nilai_kon, 0, ',', '.'); ?></td>
                            <td><?php echo wordwrap(htmlspecialchars($data->penye), 20, "<br>\n", true);?></td>
                            <td><?php echo wordwrap(htmlspecialchars($data->pek), 20, "<br>\n", true);?></td>
                            <td><?php echo wordwrap(htmlspecialchars($data->sumber), 20, "<br>\n", true);?></td>
                            <td><?php echo $data->status;?></td>
                            <td style="text-align: center;">
                                <button type="button" class="btn btn-info viewItem" data-id="<?php echo $data->id; ?>"
                                    data-toggle="modal" data-target="#myModal<?php echo $data->id; ?>"><i
                                        class="fa fa-search"></i>
                                </button>
                                <br>
                                <!-- Tombol Edit dan Hapus -->
                                <a href="<?php echo base_url(); ?>ppk/hapusdata/<?php echo $data->id; ?>"
                                    class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a><br>
                                <a href="<?php echo base_url(); ?>ppk/edit/<?php echo $data->id; ?>"
                                    class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>

                            <!-- Tombol View -->
                        </tr>

</section>
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $data->id; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Kontrak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Unit:</strong> <?php echo $data->unit; ?></p>
                <p><strong>Kode Mak:</strong> <?php echo $data->kode . '.' . $data->mak; ?>
                </p>
                <p><strong>Pekerjaan:</strong> <?php echo $data->pek; ?></p>
                <p><strong>Anggaran:</strong>
                    <?php echo 'Rp '. number_format($data->nilai_kon, 0, ',' , '.'); ?></p>
                <p><strong>Perusahaan:</strong> <?php echo $data->penye; ?></p>
                <p><strong>Kalender Kerja:</strong> <?php echo $data->kalender; ?></p>
                <p><strong>SP2DP:</strong>
                    <?php echo 'Rp' . number_format($data->sp2dp, 0,',','.'); ?></p>
                <p><strong>SP2D:</strong>
                    <?php echo 'Rp' . number_format($data->sp2d, 0,',','.'); ?></p>
                <!-- <p><strong>NILAI Bersih:</strong>
                            <?php echo 'Rp' . number_format($data->nilai, 0,',','.'); ?></p> -->
                <p><strong>Kode Pembayaran:</strong> <?php echo $data->sumber; ?></p>
                <p><strong>Kwitansi:</strong> <?php echo 'Rp '. number_format( $data->nilai_kwi, 0, ',' , '.'); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
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
<!-- <style>
table {
    border-spacing: 0px;
    table-layout: fixed;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

td {
    /* border: 1px solid black; */
    max-width: 100px;
    /* Set a maximum width */
    overflow-wrap: break-word;
    /* Break long words */
    word-break: break-all;
    /* Break if no spaces */
    white-space: normal;
    /* Allow the text to wrap */
    text-align: left;

}

td:nth-child(1) {
    width: 30%;
    /* Sesuaikan lebar kolom pertama */
}

td:nth-child(2),
td:nth-child(3),
td:nth-child(4) {
    width: 20%;
    /* Sesuaikan lebar untuk kolom lainnya */
}
</style> -->
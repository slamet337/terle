<section>
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
        <a class="btn btn-danger mb-2" href="<?php echo base_url(); ?>termin/input"><i class="fa fa-upload"></i>
            Tambah Data</a>
        <div class="card shadow-sm mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">termin</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 30px;">No.</th>
                                <th>KETERANGAN</th>
                                <th>KONTRAK</th>
                                <th>KWITANSI</th>
                                <th style="width: 70px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;
                            foreach ($Termin as $ky): ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $no++;?></td>
                                <td><?php echo $ky->ket;?></td>
                                <td><?php echo 'Rp ' . number_format($ky->kode, 0, ',', '.'); ?></td>
                                <td><?php echo 'Rp ' . number_format($ky->kwit, 0, ',', '.'); ?></td>
                                <td style="text-align: center;">
                                    <!-- <button type="button" class="btn btn-info viewItem" data-id="<?php echo $ky->id; ?>"
                                        data-toggle="modal" data-target="#myModal<?php echo $ky->id; ?>">View</button> -->

                                    <a href="<?php echo base_url(); ?>termin/deleteData/<?php echo $ky->id; ?>"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    <a href="<?php echo base_url(); ?>termin/editTermin/<?php echo $ky->id; ?>"
                                        class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo $ky->id; ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Termin</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php 
                                             foreach ($ppk as $p): 
                                             ?>
                                            <p><strong>Pekerjaan:</strong> <?php echo $p->pek; ?></p>
                                            <?php endforeach; ?>
                                            <!-- <p><strong>Kode Mak:</strong> <?php echo $data->kode . '.' . $data->mak; ?>
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
                                            <p><strong>NILAI Bersih:</strong>
                                                <?php echo 'Rp' . number_format($data->nilai, 0,',','.'); ?></p>
                                            <p><strong>Kode Pembayaran:</strong> <?php echo $data->sumber; ?></p> -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- batas modal -->

                </div>
                <?php endforeach; ?>

                </tbody>
                </table>
            </div>
        </div>
    </div>
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
        $('#dataTable').DataTable();
    });
    </script>
</section>
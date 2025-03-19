<section>
    <div class="container mt-3">

        <!-- <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>ppk"
                    style="color: #155724">Lihat data</a></u>
        </div>
        <?php endif;?> -->
        <form method="POST" action="<?php echo site_url('periode/savedata'); ?>" enctype="multipart/form-data">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Periode</h6>
                </div>
                <div class="card-body">
                    <!-- Input Fields -->
                    <label for="periode">Tahun</label>
                    <div class="form-group">
                        <input type="text" id="periode" class="form-control form-control-user" name="periode"
                            required="">
                    </div>
                    <button class="btn btn-success btn-user btn-block" type="submit">Simpan</button>
                    <a href="<?php echo site_url('periode')?>" class="btn btn-danger btn-user btn-block">Kembali</a>
                </div>
            </div>
        </form>
    </div>
    </body>

</section>
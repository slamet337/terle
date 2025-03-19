<section>
    <div class="container">

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>termin"
                    style="color: #155724">Lihat</a></u>
        </div>
        <?php endif;?>

        <form method="POST" action="<?php echo site_url('termin/edit/' . $termin->id); ?>"
            enctype="multipart/form-data">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Termin</h6>
                </div>
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo $termin->id;?>">

                    <div class="form-group">
                        <label for="ket">Termin</label>
                        <input type="text" id="ket" class="form-control" name="ket" required
                            value="<?php echo $termin->ket;?>" readonly>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                            Simpan Data</button>
                        <a href="<?php echo base_url('ppk');?>" class="btn btn-default">Batal</a>
                    </div>
                </div>
        </form>
    </div>


</section>
<section>
    <div class="container mt-3">

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>termin"
                    style="color: #155724">Lihat data</a></u>
        </div>
        <?php endif;?>
        <form method="POST" action="<?php echo base_url();?>termin/simpan" enctype="multipart/form-data">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6> -->
                </div>
                <div class="card-body">
                    <!-- Input Fields -->
                    <label for="ket">Termin</label>
                    <div class="form-group">
                        <input type="text" id="ket" class="form-control form-control-user" name="ket" required="">
                    </div>
                    <label for="kwit">Kwitansi</label>
                    <div class="form-group">
                        <input type="text" id="kwit" class="form-control form-control-user" name="kwit" required="">
                    </div>
                    <label for="sp2dt">SP2D</label>
                    <div class="form-group">
                        <input type="number" readonly id="sp2dt" class="form-control form-control-user" name="sp2dt"
                            required="">
                    </div>
                    <label for="no_sp2dt">nomor SP2D</label>
                    <div class="form-group">
                        <input type="text" id="no_sp2dt" class="form-control form-control-user" name="no_sp2dt"
                            required="">
                    </div>
                    <label for="no_sp2dpt">nomor SP2DP</label>
                    <div class="form-group">
                        <input type="text" id="no_sp2dpt" class="form-control form-control-user" name="no_sp2dpt"
                            required="">
                    </div>
                    <label for="sp2dpt">SP2DP</label>
                    <div class="form-group">
                        <input type="number" readonly id="sp2dpt" class="form-control form-control-user" name="sp2dpt"
                            required="">
                    </div>
                    <label for="bastt">BAST</label>
                    <div class="form-group">
                        <input type="text" id="bastt" class="form-control form-control-user" name="bastt" required="">
                    </div>
                    <label for="ppnt">ppn</label>
                    <div class="form-group">
                        <input type="text" id="ppnt" class="form-control form-control-user" name="ppnt" required="">
                    </div>
                    <label for="ppht">pph</label>
                    <div class="form-group">
                        <input type="text" id="ppht" class="form-control form-control-user" name="ppht" required="">
                    </div>
                    <label for="bersiht">Terima Bersih</label>
                    <div class="form-group">
                        <input type="text" readonly id="bersiht" class="form-control form-control-user" name="bersiht"
                            required="">
                    </div>
                    <label for="kode">Kontrak</label>
                    <div class="form-group">
                        <input type="text" id="kode" class="form-control form-control-user" name="kode" required="">
                    </div>

                    <button class="btn btn-success btn-user btn-block" type="submit">Simpan</button>
                    <a href="<?php echo site_url('termin')?>" class="btn btn-danger btn-user btn-block">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    function calculateValues() {
        // let nilaiKon = parseFloat(document.getElementById('nilai_kon').value) || 0;
        let ppnt = parseFloat(document.getElementById('ppnt').value) || 0;
        let ppht = parseFloat(document.getElementById('ppht').value) || 0;
        let kwit = parseFloat(document.getElementById('kwit').value) || 0;
        // let sp2d = parseFloat(document.getElementById('sp2d').value) || 0;


        let sp2dpt = ppnt + ppht;
        let bersiht = sp2dpt - kwit;
        // let sisa = nilaikwi - nilaiKon;
        let sp2dt = sp2dpt - kwit;

        document.getElementById('sp2dpt').value = sp2dpt.toFixed(0);
        // document.getElementById('nilai').value = nilai.toFixed(0);
        document.getElementById('bersiht').value = bersiht.toFixed(0);
        document.getElementById('sp2dt').value = sp2dt.toFixed(0);
    }

    // document.getElementById('nilai_kon').addEventListener('input', calculateValues);
    document.getElementById('ppnt').addEventListener('input', calculateValues);
    document.getElementById('ppht').addEventListener('input', calculateValues);
    document.getElementById('kwit').addEventListener('input', calculateValues);
    document.getElementById('sp2dt').addEventListener('input', calculateValues);
});
</script>
<section>
    <div class="container mt-3">

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>ppk"
                    style="color: #155724">Lihat data</a></u>
        </div>
        <?php endif;?>
        <form method="POST" action="<?php echo site_url('ppk/savedata'); ?>" enctype="multipart/form-data">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <!-- Input Fields -->
                    <label for="unit">Nama Unit</label>
                    <div class="form-group">
                        <input type="text" id="unit" class="form-control form-control-user" name="unit" required="">
                    </div>
                    <label for="kode">Kode</label>
                    <div class="form-group">
                        <input type="text" id="kode" class="form-control form-control-user" name="kode" required="">
                    </div>
                    <label for="mak">mak</label>
                    <div class="form-group">
                        <input type="number" id="mak" class="form-control form-control-user" name="mak" required="">
                    </div>
                    <label for="pek">Pekerjaan</label>
                    <div class="form-group">
                        <input type="text" id="pek" class="form-control form-control-user" name="pek" required="">
                    </div>
                    <label for="penye">Penyedia</label>
                    <div class="form-group">
                        <select name="penye" class="form-control form-control-user" id="penye">
                            <option value="">--PILIH PENYEDIA--</option>
                            <?php foreach($penye as $p):?>
                            <option value="<?php echo $p->nama;?>"><?php echo $p->nama;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" id="penye" class="form-control form-control-user" name="penye" required="">
                    </div> -->
                    <label for="spk">Nomor SPK</label>
                    <div class="form-group">
                        <input type="text" id="spk" class="form-control form-control-user" name="spk" required="">
                    </div>
                    <label for="kalender">Kalender</label>
                    <div class="form-group">
                        <input type="text" id="kalender" class="form-control form-control-user" name="kalender"
                            required="">
                    </div>
                    <label for="nilai_kon">Nilai Kontrak</label>
                    <div class="form-group">
                        <input type="number" id="nilai_kon" class="form-control form-control-user" name="nilai_kon"
                            required="">
                    </div>
                    <label for="nilai_kwi">Nilai Kwitansi</label>
                    <div class="form-group">
                        <input type="number" id="nilai_kwi" class="form-control form-control-user" name="nilai_kwi"
                            required="">
                    </div>
                    <label for="sisa">Sisa</label>
                    <div class="form-group">
                        <input type="text" id="sisa" class="form-control form-control-user" name="sisa" readonly>
                    </div>
                    <label for="sp2d">SP2D</label>
                    <div class="form-group">
                        <input type="number" id="sp2d" class="form-control form-control-user" name="sp2d" readonly>
                    </div>
                    <label for="no_sp2d">Nomor SP2D</label>
                    <div class="form-group">
                        <input type="text" id="no_sp2d" class="form-control form-control-user" name="no_sp2d"
                            required="">
                    </div>
                    <label for="sp2dp">SP2DP</label>
                    <div class="form-group">
                        <input type="text" id="sp2dp" class="form-control form-control-user" name="sp2dp" readonly>
                    </div>
                    <label for="no_sp2dp">Nomor SP2DP</label>
                    <div class="form-group">
                        <input type="text" id="no_sp2dp" class="form-control form-control-user" name="no_sp2dp"
                            required="">
                    </div>
                    <label for="bast">BAST</label>
                    <div class="form-group">
                        <input type="text" id="bast" class="form-control form-control-user" name="bast" required="">
                    </div>
                    <label for="sumber">Sumber Dana</label>
                    <div class="form-group">
                        <select id="sumber" class="form-control form-control-user" name="sumber" required="">
                            <option value="">pilih</option>
                            <option value="BLU">BLU</option>
                            <option value="LS">Langsung</option>
                            <option value="RM">Rupiah Murni</option>
                        </select>
                    </div>
                    <label for="ppn">PPN</label>
                    <div class="form-group">
                        <input type="number" id="ppn" class="form-control form-control-user" name="ppn" required="">
                    </div>
                    <label for="pph">PPH</label>
                    <div class="form-group">
                        <input type="number" id="pph" class="form-control form-control-user" name="pph" required="">
                    </div>
                    <label for="kualifikasi">Kualifikasi</label>
                    <div class="form-group">
                        <input type="text" id="kualifikasi" class="form-control form-control-user" name="kualifikasi"
                            required="">
                    </div>
                    <label for="denda">Denda</label>
                    <div class="form-group">
                        <input type="number" id="denda" class="form-control form-control-user" name="denda" required="">
                    </div>
                    <label for="nilai">Nilai</label>
                    <div class="form-group">
                        <input type="text" id="nilai" class="form-control form-control-user" name="nilai" readonly>
                    </div>
                    <label for="tahun">tahun</label>
                    <div class="form-group">
                        <?php if (!empty($periode)): ?>
                        <input type="text" name="tahun" class="form-control form-control-user" id="tahun"
                            value="<?php echo $periode[0]->periode; ?>" readonly>
                        <input type="hidden" name="tahun" value="<?php echo $periode[0]->id; ?>">
                        <?php else: ?>
                        <input type="text" class="form-control form-control-user" id="tahun"
                            value="Tidak ada tahun aktif" readonly>
                        <?php endif; ?>
                    </div>
                    <label for=" status">Status</label>
                    <div class="form-group">
                        <select id="status" class="form-control form-control-user" name="status" required="">
                            <option value="">pilih</option>
                            <option value="On_Going">on going</option>
                            <option value="Selesai">selesai</option>

                        </select>
                    </div>
                    <button class="btn btn-success btn-user btn-block" type="submit">Simpan</button>
                    <a href="<?php echo site_url('ppk')?>" class="btn btn-danger btn-user btn-block">Kembali</a>
                </div>
            </div>
        </form>
    </div>
    </body>

</section>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    function calculateValues() {
        let nilaiKon = parseFloat(document.getElementById('nilai_kon').value) || 0;
        let ppn = parseFloat(document.getElementById('ppn').value) || 0;
        let pph = parseFloat(document.getElementById('pph').value) || 0;
        let nilaikwi = parseFloat(document.getElementById('nilai_kwi').value) || 0;
        let denda = parseFloat(document.getElementById('denda').value) || 0;


        let sp2dp = ppn + pph;
        let nilai = sp2dp - nilaikwi;
        let sisa = nilaikwi - nilaiKon;
        let sp2d = sp2dp - nilaikwi - denda;
        

        document.getElementById('sp2dp').value = sp2dp.toFixed(0);
        document.getElementById('nilai').value = nilai.toFixed(0);
        document.getElementById('sisa').value = sisa.toFixed(0);
        document.getElementById('sp2d').value = sp2d.toFixed(0);
    }

    document.getElementById('nilai_kon').addEventListener('input', calculateValues);
    document.getElementById('ppn').addEventListener('input', calculateValues);
    document.getElementById('pph').addEventListener('input', calculateValues);
    document.getElementById('nilai_kwi').addEventListener('input', calculateValues);
    document.getElementById('denda').addEventListener('input', calculateValues);
});
</script>
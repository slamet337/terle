<section>
    <div class="container">

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>ppk"
                    style="color: #155724">Lihat</a></u>
        </div>
        <?php endif;?>

        <form method="POST" action="<?php echo site_url('ppk/edit/' . $ppk->id); ?>" enctype="multipart/form-data">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
                </div>
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo $ppk->id;?>">

                    <div class="form-group">
                        <label for="unit">Nama Unit</label>
                        <input type="text" id="nama" class="form-control" name="unit" required
                            value="<?php echo $ppk->unit;?>" readonly>
                    </div>
                    <label for="kode">Kode</label>
                    <div class="form-group">
                        <input type="text" id="kode" class="form-control form-control-user" name="kode" required
                            value="<?php echo $ppk->kode;?>" readonly>
                    </div>
                    <label for="mak">mak</label>
                    <div class="form-group">
                        <input type="number" id="mak" class="form-control form-control-user" name="mak" required
                            value="<?php echo $ppk->mak;?>" readonly>
                    </div>
                    <label for="pek">Pekerjaan</label>
                    <div class="form-group">
                        <input type="text" id="pek" class="form-control form-control-user" name="pek" required
                            value="<?php echo $ppk->pek;?>" readonly>
                    </div>
                    <label for="penye">Penyedia</label>
                    <div class="form-group">
                        <input type="text" id="penye" class="form-control form-control-user" name="penye" required
                            value="<?php echo $ppk->penye;?>" readonly>
                    </div>
                    <label for="spk">Nomor SPK</label>
                    <div class="form-group">
                        <input type="text" id="spk" class="form-control form-control-user" name="spk" required
                            value="<?php echo $ppk->spk;?>" readonly>
                    </div>
                    <label for="kalender">Kalender</label>
                    <div class="form-group">
                        <input type="text" id="kalender" class="form-control form-control-user" name="kalender" required
                            value="<?php echo $ppk->kalender;?>" readonly>
                    </div>
                    <label for="nilai_kon">Nilai Kontrak</label>
                    <div class="form-group">
                        <input type="number" id="nilai_kon" class="form-control form-control-user" name="nilai_kon"
                            required value="<?php echo $ppk->nilai_kon;?>">
                    </div>
                    <label for="nilai_kwi">Nilai Kwitansi</label>
                    <div class="form-group">
                        <input type="number" id="nilai_kwi" class="form-control form-control-user" name="nilai_kwi"
                            required value="<?php echo $ppk->nilai_kwi;?>">
                    </div>
                    <label for="sisa">Sisa</label>
                    <div class="form-group">
                        <input type="text" id="sisa" class="form-control form-control-user" name="sisa" readonly
                            required value="<?php echo $ppk->sisa;?>">
                    </div>
                    <label for="sp2d">SP2D</label>
                    <div class="form-group">
                        <input type="text" id="sp2d" class="form-control form-control-user" name="sp2d" required
                            value="<?php echo $ppk->sp2d;?>" readonly>
                    </div>
                    <label for="no_sp2d">Nomor SP2D</label>
                    <div class="form-group">
                        <input type="text" id="no_sp2d" class="form-control form-control-user" name="no_sp2d" required
                            value="<?php echo $ppk->no_sp2d;?>">
                    </div>
                    <label for="sp2dp">SP2DP</label>
                    <div class="form-group">
                        <input type="text" id="sp2dp" class="form-control form-control-user" name="sp2dp" required
                            value="<?php echo $ppk->sp2d;?>" readonly>
                    </div>
                    <label for="no_sp2dp">Nomor SP2DP</label>
                    <div class="form-group">
                        <input type="text" id="no_sp2dp" class="form-control form-control-user" name="no_sp2dp" required
                            value="<?php echo $ppk->no_sp2dp;?>">
                    </div>
                    <label for=" bast">BAST</label>
                    <div class="form-group">
                        <input type="text" id="bast" class="form-control form-control-user" name="bast" required
                            value="<?php echo $ppk->bast;?>">
                    </div>
                    <label for=" sumber">Sumber Dana</label>
                    <div class="form-group">
                        <input type="text" id="sumber" class="form-control form-control-user" name="sumber" required
                            value="<?php echo $ppk->sumber;?>" readonly>
                        <!-- <select id="sumber" class="form-control form-control-user" name="sumber" required
                            value="<?php echo $ppk->sumber;?>">
                            <option value="">pilih</option>
                            <option value=" BlU">BLU</option>
                            <option value="LS">Langsung</option>
                            <option value="RM">Rupiah Murni</option>
                        </select> -->
                    </div>
                    <label for="ppn">PPN</label>
                    <div class="form-group">
                        <input type="number" id="ppn" class="form-control form-control-user" name="ppn" required
                            value="<?php echo $ppk->ppn;?>">
                    </div>
                    <label for=" pph">PPH</label>
                    <div class="form-group">
                        <input type="number" id="pph" class="form-control form-control-user" name="pph" required
                            value="<?php echo $ppk->pph;?>">
                    </div>
                    <label for=" kualifikasi">Kualifikasi</label>
                    <div class="form-group">
                        <input type="text" id="kualifikasi" class="form-control form-control-user" name="kualifikasi"
                            required value="<?php echo $ppk->kualifikasi;?>">
                    </div>
                    <label for=" denda">Denda</label>
                    <div class="form-group">
                        <input type="number" id="denda" class="form-control form-control-user" name="denda" required
                            value="<?php echo $ppk->denda;?>">
                    </div>
                    <label for=" nilai">Nilai</label>
                    <div class="form-group">
                        <input type="text" id="nilai" class="form-control form-control-user" name="nilai" readonly
                            required value="<?php echo $ppk->nilai;?>">
                    </div>
                    <label for="tahun">tahun</label>
                    <div class="form-group">
                        <input type="text" id="tahun" class="form-control form-control-user" name="tahun" readonly
                            required value="<?php echo $ppk->tahun;?>">
                    </div>
                    <label for=" status">Status</label>
                    <div class="form-group">
                        <select id="status" class="form-control form-control-user" name="status" required
                            value="<?php echo $ppk->status;?>">
                            <option value="<?php echo $ppk->status;?>">pilih</option>
                            <option value="On_Going">on going</option>
                            <option value="Selesai">selesai</option>

                        </select>
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                        Simpan Data</button>
                    <a href="<?php echo base_url('ppk');?>" class="btn btn-default">Batal</a>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url(); ?>/assets/jquery/jquery.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
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
            let sisa = nilaikwi - nilaiKon - denda;
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
</section>
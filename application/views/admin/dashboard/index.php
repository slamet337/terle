<div class="row">
    <form method="get" action="<?= base_url('dashboard') ?>">
        <label for="tahun">Pilih Tahun:</label>
        <select name="tahun" id="tahun" onchange="this.form.submit()">
            <option value="0" <?= $tahun == '0' ? 'selected' : '' ?>>Pilih</option>
            <option value="1" <?= $tahun == '1' ? 'selected' : '' ?>>2024</option>
            <option value="2" <?= $tahun == '2' ? 'selected' : '' ?>>2025</option>
        </select>
    </form>
    <div class="col-xl-2 col-sm-2 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Pengadaan</p>
                            <h4 class="font-weight-bolder">
                                <?= $ppk; ?>
                            </h4>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-danger text-center rounded-circle">
                            <i class="ni ni-single-02 text-white text-sm opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-2 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Kontrak</p>
                            <h3 class="font-weight-bolder">
                                <?php echo $total; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-success text-center rounded-circle">
                            <i class="ni ni-collection text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3  col-sm-2">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">RM</p>
                            <h3 class="font-weight-bolder">
                                <?= $rm; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-warning text-center rounded-circle">
                            <i class="ni ni-ruler-pencil text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-xl-2  col-sm-2">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">LS</p>
                            <h3 class="font-weight-bolder">
                                <= $ls; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-warning text-center rounded-circle">
                            <i class="ni ni-ruler-pencil text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-xl-3  col-sm-2">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">BLU</p>
                            <h4 class="font-weight-bolder">
                                <?= $blu; ?>
                            </h4>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-warning text-center rounded-circle">
                            <i class="ni ni-ruler-pencil text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 mb-3 bg-transparent">
                <div class="row">
                    <div class="x-content">
                        <h3 class="text-capitalize">Welcome to Yakuza Gilingan</h3>
                        <table class="table table-bordered" style="font-size: 15px;">
                            <tr>
                                <th>No</th>
                                <th>Perusahaan</th>
                                <th>Total</th>
                                <th>Total Kontrak</th>
                                <th>Total Bersih</th>
                            </tr>
                            <?php
                                $no = 1;
                                $tot = 0;
                                $tot1 = 0;
                                foreach ($ppk2->result() as $t) {
                             ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $t->nama ?></td>
                                <td><?= number_format($t->total, 0, ',', '.') ?></td>
                                <td><?= number_format($t->nilai_kon, 0, ',', '.') ?></td>
                                <td><?= number_format($t->nilai, 0, ',', '.') ?></td>
                            </tr>
                            <?php
                             $tot += $t->total;
                             $tot1 += $t->nilai_kon;
                             $no++;
                                }
                            ?>
                            <tr>
                                <th colspan="2">Total</th>
                                <th><?= number_format($tot, 0, ',', '.') ?></th>
                                <th><?= number_format($tot1, 0, ',', '.') ?></th>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
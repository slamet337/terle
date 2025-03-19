<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=daftar_kontrak$unit.xls");

header("Pragma: no-cache");

header("Expires: 0");
header("Content-Type: application/vnd.ms-excel");


?>
<!-- <table style="font-size: 10px; font-weight: bold; margin-left: 570px"> -->
<!-- <tr>
		<td>Lampiran</td>
		<td>: Keputusan Rektor Universitas Tadulako</td>
	</tr>
	<tr>
		<td>Nomor</td>
		<td>: </td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td>: </td>
	</tr> -->
<!-- </table> -->
<!-- <p align="center"><b><u>WISUDAWAN FAKULTAS ANGKATAN <= $angkatan ?></u></b></p><br><br>
<b>PROGRAM STUDI : </b> -->
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>UNIT</th>
            <th>KODE MAK</th>
            <th>PEKERJAAN</th>
            <th>PENYEDIA</th>
            <th>NOMOR SPK</th>
            <th>KALENDER</th>
            <th>NILAI KONTRAK</th>
            <th>KWITANSI</th>
            <th>SP2D</th>
            <th>NOMOR SP2D</th>
            <th>SP2DP</th>
            <th>NOMOR SP2DP</th>
            <th>BAST</th>
            <th>SUMBER</th>
            <th>TERIMA BERSIH</th>
            <th>PPH</th>
            <th>PPN</th>
            <th>KUALIFIKASI</th>
            <th>DENDA</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
		foreach ($a->result() as $row) {
		
		?>
        <tr>
            <td style="text-align: center"><?= $no ?></td>
            <td><?= $row->unit ?></td>
            <td style="text-align: center" style="mso-number-format:\@;"><?= $row->kode.$row->mak ?></td>
            <td style="text-align: center"><?= $row->pek ?></td>
            <td style="text-align: center"><?= $row->penye ?></td>
            <td style="text-align: center"><?= $row->spk ?></td>
            <td style="text-align: center"><?= $row->kalender ?></td>
            <td style="text-align: center"><?= $row->nilai_kon ?></td>
            <td style="text-align: center"><?= $row->nilai_kwi ?></td>
            <td style="text-align: center"><?= $row->sp2d ?></td>
            <td style="text-align: center"><?= $row->no_sp2d ?></td>
            <td style="text-align: center"><?= $row->sp2dp ?></td>
            <td style="text-align: center"><?= $row->no_sp2dp ?></td>
            <td style="text-align: center"><?= $row->sumber ?></td>
            <td style="text-align: center"><?= $row->nilai ?></td>
            <td style="text-align: center"><?= $row->ppn ?></td>
            <td style="text-align: center"><?= $row->pph ?></td>
            <td style="text-align: center"><?= $row->kualifikasi ?></td>
            <td style="text-align: center"><?= $row->denda ?></td>
            <td style="text-align: center"></td>
        </tr>
        <?php $no++;
		} ?>
    </tbody>
</table>
<br><br><br><br><br><br>
<!-- <table style="font-size: 12px; font-weight: bold; margin-left: 570px">
	<tr>
		<td>Prof.Dr.Ir.Muhammad Basir, S.E., M.S.</td>
	</tr>
	<tr>
		<td>NIP.19610202 198903 1 001</td>
	</tr>
</table> -->
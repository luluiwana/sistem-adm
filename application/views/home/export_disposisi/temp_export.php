<link href="<?php echo base_url('files/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


<!-- Custom styles for this template-->
<link href="<?php echo base_url('files/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="<?php echo base_url('files/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



<table border="1" style="width:100%;border-collapse:collapse;border-spacing:0px;table-layout:fixed">
    <tr>
        <th style=" padding-left:10px;padding-top:10px;padding-bottom: 10px;text-align:left;border-bottom:0px;border-right:0px;">DISPOSISI</th>
        <th style="border-left:0px;border-bottom:0px"></th>
    </tr>
    <tr>
        <td style="font-weight:bold;text-align:left;border-top:0px;border-right:0px;border-bottom:0px;padding-left:10px">Indeks : <span style="font-weight: normal;"><?= $indeks ?></span></td>
        <td style="font-weight:bold;border-left:0px; text-align:right;border-top:0px;border-bottom:0px;padding-right:20px;">Rahasia :<span style="font-weight: normal;">&nbsp;&nbsp;<?= $rahasia ?></span></td>
    </tr>
    <tr>
        <td style="text-align:left;text-align:left;border-top:0px;border-right:0px;border-bottom:0px"></td>
        <td style="font-weight:bold;border-left:0px; text-align:right;border-top:0px;border-bottom:0px;padding-right:20px">Penting :<span style="font-weight: normal;">&nbsp;&nbsp;<?= $penting ?></span></td>
    </tr>
    <tr>
        <td style="text-align:left;text-align:left;border-top:0px;border-right:0px;border-bottom:1px"></td>
        <td style=" font-weight:bold; text-align:right;border-left:0px;border-top:0px;border-bottom:1px;padding-right:20px;padding-bottom: 10px;">Biasa :<span style="font-weight: normal;">&nbsp;&nbsp;<?= $biasa ?></span></td>
    </tr>
    <tr>
        <td style=" font-weight:bold;padding-bottom: 10px;text-align:left;text-align:left;border-top:1px;border-right:0px;border-bottom:0px;padding-left:10px">Kode : <span style="width:30px;font-weight: normal;"><?= $kode_surat ?></span></td>
        <td style="font-weight:bold; border-left:0px; text-align:right;border-top:1px;border-bottom:0px;padding-right:20px;padding-bottom: 10px;width:80%">Tanggal Penyelesian :<span style="font-weight: normal;"><?= $tanggal_penyelesaian ?></span> </td>
    </tr>
    <tr>
        <td style="border-top:0px">
            <table width="525" border="none" style="border-right: 1px solid black;border-top: 1px ;">
                <tr>
                    <td width="75" style="padding-left:10px;font-weight:bold;text-align:left;border-bottom:0px;border-right:0px;border-top:0px;padding-right:0px" padding-left:10px> Tanggal No :</td>
                    <td width="" style="text-align:left;border-left:0px;border-top:0px;border-bottom:0px;padding-right:20px;"><span style="font-weight: normal;"><?= $no_tgl ?></span> </td>
                </tr>
                <tr>
                    <td style="font-weight:bold;text-align:left;border-top:0px;border-right:0px;border-bottom:0px;padding-left:10px" colspan="1">Asal :</td>
                    <td style="border-left:0px;border-top:0px;border-bottom:0px;padding-right:20px;text-align:left"><span style="font-weight: normal;"><?= $asal ?></span> </td>
                </tr>
                <tr>
                    <td style="padding-left:10px;vertical-align:top;font-weight:bold;text-align:left;border-top:0px;border-right:0px;border-bottom:0px;padding-bottom: 10px;" colspan="1">Isi Ringkas :</td>
                    <td style="border-left:0px;border-top:0px;border-bottom:0px;padding-right:10px;text-align:left;text-align:left;padding-bottom: 10px;"><?= $ringkasan ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="padding-left:10px;font-weight:bold;padding-bottom: 10px;text-align:left;text-align:left;border-top:1px;border-right:0px;border-bottom:0px">Instruksi / Informasi :</td>
        <td style="font-weight:bold; border-left:0px; text-align:right;border-top:1px;border-bottom:0px;padding-right:10px;padding-bottom: 10px;">Diteruskan Kepada :<span style="font-weight: normal;"><?= $diteruskan ?></span> </td>
    </tr>
    <tr>
        <td colspan="2" style="padding-left:10px;width:100%;text-align:left;border-bottom:0px;border-right:1px;border-top:1px;padding-bottom: 10px;"> <?= $instruksi ?> </td>
    </tr>
    <tr>
        <td colspan="2" style="padding-left:10px;font-weight:bold;width:100%;text-align:left;border-bottom:1px;border-right:0px;border-top:1px;padding-bottom: 0px;"> SESUDAH DIGUNAKAN HARAP SEGERA KEMBALI </td>
    </tr>
    <tr>
        <td style="padding-left:10px;font-weight:bold;text-align:left;border-top:0px;border-right:0px;border-bottom:0px;" colspan="2">Kepada : <?= $kepada ?></td>

    </tr>
    <tr>
        <td style="padding-left:10px;font-weight:bold;text-align:left;border-top:0px;border-right:0px;border-bottom:0px;padding-bottom: 10px;" colspan="2">Tanggal : <?= $tgl_kembali ?></td>

    </tr>
    <tr>
        <td colspan="" style="padding-left:10px;padding-top:10px;font-weight:bold;width:100%;text-align:left;border-bottom:1px;border-right:0px;border-top:1px;padding-bottom: 0px;">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?php if ($kategori == "Penting") echo 'checked' ?> id="defaultCheck1">
                <label class="form-check-label" style="vertical-align: top;">
                    Penting
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?php if ($kategori == "Rahasia") echo 'checked' ?> id="defaultCheck2">
                <label class="form-check-label" style="vertical-align: top;">
                    Rahasia
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?php if ($kategori == "Segera") echo 'checked' ?> id="defaultCheck1">
                <label class="form-check-label" style="vertical-align: top;">
                    Segera
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?php if ($kategori == "Biasa") echo 'checked' ?> id="defaultCheck2">
                <label class="form-check-label" style="vertical-align: top;">
                    Biasa
                </label>
            </div>

        </td>

        <td style="padding-top:10px;font-weight:bold;border-left:0px; text-align:left;border-top:1px;border-bottom:1px;padding-right:20px">Tgl-Surat :<span style="font-weight: normal;margin-bottom:5px"><?= $tgl_surat ?></span><br>No-Surat :<span style="margin-bottom:5px;font-weight: normal;"><?= $nomor ?></span><br>Hal (Code) : <span style="margin-bottom:5px;font-weight: normal;"><?= $code ?></span></td>

    </tr>

    <tr>
        <td colspan="2" style=" font-weight:bold;padding-bottom: 10px;text-align:left;text-align:left;border-top:1px;border-right:1px;border-bottom:1px;padding-left:10px">Tanggal Terima : <span style="width:30px;font-weight: normal;">Sabtu 11/01/2012</span></td>
    </tr>
    <tr>
        <td colspan="2" style=" font-weight:normal;padding-bottom: 10px;text-align:left;text-align:left;border-top:1px;border-right:1px;border-bottom:0px;padding-left:10px">


            <table border="0" width="575">
                <tr>
                    <td style="vertical-align: top;">
                        1. Mohon mendapat saran/masukan <br>
                        2. Mohon Pentunjuk <br>
                        3. Mohon Keputusan <br>
                        4. Untuk Perhatian <br>
                        5. Siapkan Konsep <br>
                        6. Siapkan Laporan <br>
                        7. Sudah diselesaikan <br>
                        8. Edarkan / Kirimkan <br>
                        9. Gandakan <br>
                        10. Simpan / Arsip <br>
                        11. Tunggu <br>
                        12. Diajukan <br>
                        13. Mohon Paragraf<br>
                        14. Mohon Tanda Tangan <br>
                    </td>
                    <td style="vertical-align: top;">
                        15. Selesaikan Sesuai Konsep<br>
                        16. Setuju Diselesaikan</span> <br>
                        17. Teliti Diselesaikan<br>
                        18. Untuk Datan<br>
                        19. Mohon Koreksi Konsep<br>
                        20. Mohon Periksa Catatan<br>
                        21. Teliti / Ikuti Perkembangan<br>
                        22. Harap Dicek & Dilaporkan<br>
                        23. Sudah Diketahuin<br>
                        24. Sudah di Tanda Tangani<br>
                        25. Mohon Diproses<br>
                        26. Mohon Persetujuan<br>
                        27. Mohon SPPD<br>
                    </td>
                </tr>

            </table>

            <!-- <div class="row">
                <div class="col-md-6">
                  
                </div>

                <div class="col-md-6">
                  
                </div> -->



        </td>
    </tr>
    <tr>
        <td style="border-top:0px;border-bottom:0px;border-right:0px">
            <table width="525" border="none" style="border-right: 0px solid black;border-top: 1px ;">
                <tr>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px> Tanggal </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px> Kepada</td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px> No Disposisi :</td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px> Dari :</td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:0px;border-top:0px;padding-right:0px" padding-left:10px> Paraf :</td>
                </tr>

            </table>
        </td>
        <td style="border-right: 0px;border-left:0px;border-bottom: 0px;border-top:0px">

        </td>

    </tr>
    <tr>
        <td style="border-top:0px;border-bottom:0px;border-right:0px">
            <table width="525" border="none" style="border-right: 0px solid black;border-top: 1px ;">
                <tr>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>1. <?= $tgl_surat ?> </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>1. <?= $kepada ?></td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>1.<?= $no_disposisi ?> </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>1. <?= $dari ?> </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:0px;border-top:0px;padding-right:0px" padding-left:10px> </td>
                </tr>

            </table>
        </td>
        <td style="border-right: 0px;border-left:0px;border-bottom: 0px;border-top:0px">

        </td>

    </tr>

    <tr>
        <td style="border-top:0px;border-bottom:0px;border-right:0px">
            <table width="525" border="none" style="border-right: 0px solid black;border-top: 1px ;">
                <tr>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>2. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>2. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>2. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>2. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:0px;border-top:0px;padding-right:0px" padding-left:10px> </td>
                </tr>

            </table>
        </td>
        <td style="border-right: 0px;border-left:0px;border-bottom: 0px;border-top:0px">

        </td>

    </tr>
    <tr>
        <td style="border-top:0px;border-bottom:0px;border-right:0px">
            <table width="525" border="none" style="border-right: 0px solid black;border-top: 1px ;">
                <tr>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>3. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>3. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>3. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:1px;border-top:0px;padding-right:0px" padding-left:10px>3. </td>
                    <td width="75" style="padding-left:10px;font-weight:normal;text-align:left;border-bottom:0px;border-right:0px;border-top:0px;padding-right:0px" padding-left:10px> </td>
                </tr>

            </table>
        </td>
        <td style="border-right: 0px;border-left:0px;border-bottom: 0px;border-top:0px">

        </td>

    </tr>




</table>
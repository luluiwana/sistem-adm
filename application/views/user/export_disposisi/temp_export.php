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
                        <input type="checkbox" style="margin-top:5px">
                        Mohon mendapat saran/masukan <br Mohon Pentunjuk <br>
                        <input type="checkbox" style="margin-top:5px"> Mohon Keputusan <br>
                        <input type="checkbox" style="margin-top:5px"> Untuk Perhatian <br>
                        <input type="checkbox" style="margin-top:5px"> Siapkan Konsep <br>
                        <input type="checkbox" style="margin-top:5px"> Siapkan Laporan <br>
                        <input type="checkbox" style="margin-top:5px"> Sudah diselesaikan <br>
                        <input type="checkbox" style="margin-top:5px"> Edarkan / Kirimkan <br>
                        <input type="checkbox" style="margin-top:5px"> Gandakan <br>
                        <input type="checkbox" style="margin-top:5px"> Simpan / Arsip <br>
                        <input type="checkbox" style="margin-top:5px"> Tunggu <br>
                        <input type="checkbox" style="margin-top:5px"> Diajukan <br>
                        <input type="checkbox" style="margin-top:5px"> Mohon Paragraf<br>
                        <input type="checkbox" style="margin-top:5px"> Mohon Tanda Tangan <br>
                    </td>
                    <td style="vertical-align: top;">
                        <input type="checkbox" style="margin-top:5px"> Selesaikan Sesuai Konsep<br>
                        <input type="checkbox" style="margin-top:5px"> Setuju Diselesaikan</span> <br>
                        <input type="checkbox" style="margin-top:5px"> Teliti Diselesaikan<br>
                        <input type="checkbox" style="margin-top:5px"> Untuk Datang<br>
                        <input type="checkbox" style="margin-top:5px"> Mohon Koreksi Konsep<br>
                        <input type="checkbox" style="margin-top:5px"> Mohon Periksa Catatan<br>
                        <input type="checkbox" style="margin-top:5px"> Teliti / Ikuti Perkembangan<br>
                        <input type="checkbox" style="margin-top:5px"> Harap Dicek & Dilaporkan<br>
                        <input type="checkbox" style="margin-top:5px"> Sudah Diketahui<br>
                        <input type="checkbox" style="margin-top:5px"> Sudah di Tanda Tangani<br>
                        <input type="checkbox" style="margin-top:5px"> Mohon Diproses<br>
                        <input type="checkbox" style="margin-top:5px"> Mohon Persetujuan<br>
                        <input type="checkbox" style="margin-top:5px"> Mohon SPPD<br>
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
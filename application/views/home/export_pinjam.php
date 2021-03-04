<style>
    @page {
        margin: 5px;
    }

    body {
        margin: 5px;
        margin-top: 5px;
    }

    td {
        padding-left: 15px;
        padding-bottom: 4px;
    }
</style>
<?php
$str = date('Y-m-d')
?>

<p><?= 'Tanggal cetak : ' . date("d/m/Y", strtotime($str)) ?></p>

<table width="100%" cellspacing="0" border="1" style="font-size: 12px;">
    <tr>
        <td colspan="4" padding='0px'>
            <strong>
                <center>
                    <h4 style="height:5px;"> KARTU BUKTI PINJAM ARSIP/BERKAS</h4>
                </center>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Peminjam</td>
        <td>Nama</td>
        <td colspan="2"><?= $nama_peminjam ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Unit Kerja</td>
        <td colspan="2"><?= $unit_kerja ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Tanda Tangan</td>
        <td height='35px' colspan="2"></td>
    </tr>
    <tr>
        <td colspan="4">
            <strong>
                <center>
                    <h5 style="height:5px"> KARTU BUKTI PINJAM ARSIP/BERKAS</h5>
                </center>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Perihal Surat</td>
        <td colspan="3"><?= $dokumen_dipinjam ?></td>
    </tr>
    <tr>
        <td>Tanggal Surat</td>
        <td><?= $alamat ?></td>
        <td>No Surat</td>
        <td><?= $nomor_peminjam ?></td>
    </tr>
    <tr>
        <td rowspan="2">Dari / Kepada</td>
        <td height='20px' colspan="3"><?= $owner ?></td>
    </tr>
    <tr>
        <td height='20px' colspan="3"><?= $tanggal_awal ?></td>
    </tr>
    <tr>
        <td>Tanggal Dipinjam</td>
        <td><?= $tanggal_pinjam ?></td>
        <td>Batas Waktu</td>
        <td><?= $tanggal_kembali ?></td>
    </tr>
    <tr>
        <td height='35px'>Paraf Petugas</td>
        <td colspan="3"></td>
    </tr>



</table>


<table width="100%" cellspacing="0" border="1" style="margin-top:10px;background-color:lightblue;font-size:12px">
    <tr>
        <td colspan="4" padding='0px'>
            <strong>
                <center>
                    <h4 style="height:5px;"> KARTU BUKTI PINJAM ARSIP/BERKAS</h4>
                </center>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Peminjam</td>
        <td>Nama</td>
        <td colspan="2"><?= $nama_peminjam ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Unit Kerja</td>
        <td colspan="2"><?= $unit_kerja ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Tanda Tangan</td>
        <td height='35px' colspan="2"></td>
    </tr>
    <tr>
        <td colspan="4">
            <strong>
                <center>
                    <h5 style="height:5px"> KARTU BUKTI PINJAM ARSIP/BERKAS</h5>
                </center>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Perihal Surat</td>
        <td colspan="3"><?= $dokumen_dipinjam ?></td>
    </tr>
    <tr>
        <td>Tanggal Surat</td>
        <td><?= $alamat ?></td>
        <td>No Surat</td>
        <td><?= $nomor_peminjam ?></td>
    </tr>
    <tr>
        <td rowspan="2">Dari / Kepada</td>
        <td height='20px' colspan="3"><?= $owner ?></td>
    </tr>
    <tr>
        <td height='20px' colspan="3"><?= $tanggal_awal ?></td>
    </tr>
    <tr>
        <td>Tanggal Dipinjam</td>
        <td><?= $tanggal_pinjam ?></td>
        <td>Batas Waktu</td>
        <td><?= $tanggal_kembali ?></td>
    </tr>
    <tr>
        <td height='35px'>Paraf Petugas</td>
        <td colspan="3"></td>
    </tr>

</table>


<table width="100%" cellspacing="0" border="1" style="margin-top:10px;background-color:lightcoral;font-size:12px">
    <tr>
        <td colspan="4" padding='0px'>
            <strong>
                <center>
                    <h4 style="height:5px;"> KARTU BUKTI PINJAM ARSIP/BERKAS</h4>
                </center>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Peminjam</td>
        <td>Nama</td>
        <td colspan="2"><?= $nama_peminjam ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Unit Kerja</td>
        <td colspan="2"><?= $unit_kerja ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Tanda Tangan</td>
        <td height='35px' colspan="2"></td>
    </tr>
    <tr>
        <td colspan="4">
            <strong>
                <center>
                    <h5 style="height:5px"> KARTU BUKTI PINJAM ARSIP/BERKAS</h5>
                </center>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Perihal Surat</td>
        <td colspan="3"><?= $dokumen_dipinjam ?></td>
    </tr>
    <tr>
        <td>Tanggal Surat</td>
        <td><?= $alamat ?></td>
        <td>No Surat</td>
        <td><?= $alamat ?></td>
    </tr>
    <tr>
        <td rowspan="2">Dari / Kepada</td>
        <td height='20px' colspan="3"><?= $owner ?></td>
    </tr>
    <tr>
        <td height='20px' colspan="3"><?= $tanggal_awal ?></td>
    </tr>
    <tr>
        <td>Tanggal Dipinjam</td>
        <td><?= $tanggal_pinjam ?></td>
        <td>Batas Waktu</td>
        <td><?= $tanggal_kembali ?></td>
    </tr>
    <tr>
        <td height='35px'>Paraf Petugas</td>
        <td colspan="3"></td>
    </tr>




</table>
<style>
    @page {
        margin: 40px;
    }

    .text-center {
        text-align: center;
    }

    .bold {
        font-weight: bold;
    }

    .small {
        font-size: small;
    }

    .border {
        border: 1px solid black
    }

    .p-1 {
        padding: 3px;
    }

    .top {
        vertical-align: top;
    }
</style>
<?php $base = base_url("") ?>
<table>
    <tr>
        <td width="160px" style="vertical-align: top;"> <img width="100px" src="<?= $base . "files/img/" . $instansi['logo'] ?>" alt=""></td>
        <td>
            <table>
                <tr>
                    <td class="text-center bold"><?= $instansi['header_1'] ?></td>
                </tr>
                <tr>
                    <td class="text-center bold"><?= $instansi['header_2'] ?></td>
                </tr>
                <tr>
                    <td class="text-center bold"><?= $instansi['header_3'] ?></td>
                </tr>
                <tr>
                    <td class="text-center small"><?= $instansi['header_4'] ?></td>
                </tr>
                <tr>
                    <td class="text-center small"><?= $instansi['header_5'] ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<hr style="border: 2px solid black;">
<table class="border small" style=" border-collapse:collapse">
    <tr class=" border bold">
        <td class="border p-1">No. Urut</td>
        <td class="border p-1">Tgl. Surat</td>
        <td class="border p-1 text-small">Tgl. Agenda</td>
        <td class="border p-1">No. Surat</td>
        <td class="border p-1">M</td>
        <td class="border p-1">K</td>
        <td class="border p-1">Dari/kepada</td>
        <td class="border p-1">Isi Ringkasan</td>
        <td class="border p-1">Ket.</td>
    </tr>
    <?php foreach ($agenda as $row) : ?>
        <?php
        $image = $base . "assets/images/check.png";
        if ($row->dari == "") {
            $m = "";
        } else {
            $m = "<img src='$image' width='20px'>";
            $dr_kpd = $row->dari;
        }
        if ($row->kepada == "") {
            $k = "";
        } else {
            $k = "<img src='$image' width='20px'>";
            $dr_kpd = $row->kepada;
        }
        ?>
        <tr class=" border">
            <td class="border p-1 top"><?= $row->no_urut ?></td>
            <td class="border p-1 top"><?= tgl_indo($row->tanggal_surat) ?></td>
            <td class="border p-1 top"><?= tgl_indo($row->tanggal_simpan) ?></td>
            <td class="border p-1 top"><?= $row->no_surat ?></td>
            <td class="border p-1 top"><?= $m ?></td>
            <td class="border p-1 top"><?= $k ?></td>
            <td class="border p-1 top"><?= $dr_kpd ?></td>
            <td class="border p-1 top">
                <p style="color:blue"><?= $row->isi_ringkasan ?></p>
            </td>
            <td class="border p-1 top"></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- <span><?= $instansi['logo'] ?></span> -->

<!-- <img src="https://localhost/sistem-adm/files/img/<?= $instansi['logo'] ?>" alt=""> -->
<!-- <span>https://localhost/sistem-adm/files/img/<?= $instansi['logo'] ?></span> -->

<?php
function tgl_indo($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date('H:i:s', strtotime($waktu));

    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return "$hari, $tanggal $bulan $tahun";
}


?>
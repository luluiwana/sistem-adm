 <style>
td {
    padding-left: 15px;
}
 </style>
 <div style="text-align:center; font-size:14; font-weight:bold">
AGENDA KEGIATAN PIMPINAN
 </div>
 <br>
 <br>
 <table width="100%" cellspacing="0" border="1">
     <thead>
         <tr>
             <td>No</td>
             <td>Tanggal</td>
             <td>Pukul</td>
             <td>Kegiatan</td>
             <td>Tempat</td>
             <td>Keterangan</td>
         </tr>
     </thead>
     <tbody>
         <?php $numb=1; foreach ($surat_masuk as $dt) : ?>
         <tr>
             <td><?php echo $numb; ?></td>
             <td><?php echo tgl_indo($dt->tgl_rapat); ?></td>
             <td><?php echo $dt->waktu_rapat; ?></td>
             <td><?php echo $dt->perihal; ?></td>
             <td><?php echo $dt->tempat_rapat; ?></td>
             <td><?php echo $dt->isi_ringkasan; ?></td>
         </tr>


         <?php $numb++; endforeach; ?>

     </tbody>
 </table>

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
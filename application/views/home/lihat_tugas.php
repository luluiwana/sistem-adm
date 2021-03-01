<?php
function deadline($tgl)
{
    return substr($tgl, 8, 2)."-".substr($tgl, 5, 2)."-".substr($tgl, 0, 4)." (".substr($tgl, 11, 5)." WIB)";
}
?>
<a href="<?=base_url('home/akses_kelas/'.$kelas)?>" class="btn btn-primary mb-3"><i
        class="mdi mdi-chevron-double-left"></i> Kembali ke Kelas</a>
<div class="card">
    <div class="card-header bg-dark text-white">Detail Tugas</div>
    <div class="card-body">
        <?php foreach($tugas as $row):?>
        <a href="<?=base_url('home/edittugas/'.$row->id_tugas)?>" class="btn btn-sm btn-primary float-right">Edit
            Tugas</a>
        <h6><?=$row->judul_tugas?></h6>
        <p class="mt-1"><?=$row->deskripsi_tugas?></p>
        <p class="mt-3"><b>Batas Pengumpulan: </b><?=deadline($row->dateline)?></p>
        <a href="<?=base_url('home/download_tugas/'.$row->id_tugas)?>" class="btn btn-sm btn-link mt-2 p-1"><i
                class="mdi mdi-download"></i> Download
            Lampiran</a>
        <?php endforeach;?>
    </div>
</div>
<div class="card">
    <div class="card-header bg-dark text-white">Hasil Tugas</div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>NIM</th>
                <th>Nama</th>
                <th>Whatsapp</th>
                <th>Status</th>
                <th>Nilai</th>
                <th>Komentar</th>
                <th>Opsi</th>
            </thead>
            <tbody>
                <?php foreach($mhs as $row):?>
                <tr>
                    <td><?=$row->username?></td>
                    <td><?=$row->nama?></td>
                    <td><?=$row->whatsapp?></td>
                    <td><?= ($row->status=="Selesai") ?  "<label class='badge badge-success'>Selesai</label>" :  "<label class='badge badge-warning'>Proses</label>" ;?></td>
                    <td><?=$row->nilai?></td>
                    <td><?=$row->komentar?></td>
                    <td><a href="<?=base_url('home/hasil_tugas/'.$row->id.'/'.$row->id_tgs)?>" class="btn btn-sm btn-info p-1">Lihat Hasil<i class="mdi mdi-arrow-right ml-2">
                            </i></a> </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
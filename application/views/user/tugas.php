<?php $i=1; foreach($tugas as $row):?>
<div class="card pb-3 mb-5 border border-dark">
    <div class="card-header bg-dark text-white "><?=$row->judul_tugas?></div>
    <div class="card-body row">
        <div class="col-md-8 " style="border-right:1px solid lightgray">
            <div class="text-wrap"><?=$row->deskripsi_tugas ?></div>
            <a href="<?=base_url("user/download_tugas/".$row->id_tgs)?>" class="btn btn-link p-1 mb-3"><i class="mdi mdi-download mr-2"></i> Download Lampiran Tugas</a>
            <br>
            <span class="font-weight-bold ">Batas Pengumpulan : </span><span><?= tgl_indo($row->dateline)." (".jam($row->dateline).")";?></span>
        </div>
        <div class="col-md-4 pt-3">
            <?php if($row->status!="Selesai"):?>
            <div class=" text-center "><span class="text-danger"> Anda belum mengumpulkan tugas</span> <br>
                <button class="btn btn-primary p-1 mt-3 text-white" data-toggle="modal"
                    data-target="#submit-tugas<?=$row->id_tgs?>">
                    <i class="mdi mdi-bookmark-check"></i> Kumpulkan Tugas
                </button>
                <!-- The Modal -->
                <div class="modal" id="submit-tugas<?=$row->id_tgs?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h5 class="modal-title">Yakin ingin mengumpulkan tugas ini?</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="pb-3"><?=$row->judul_tugas?></div>
                                <a href="<?=base_url('user/submit_tugas/'.$row->id_tgs)?>" class="btn btn-primary px-5" >Ya</a>
                                <button type="button" class="btn btn-danger px-5 ml-3" data-dismiss="modal">Tidak</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <?php else:?>
            <div class="text-success"><i class="mdi mdi-bookmark-check mr-2"></i>Selesai : <?=tgl_indo($row->tgl_selesai)." (".jam($row->tgl_selesai).")"?></div>

            <div class="bg-secondary p-4">
            
                <h4 class="text-dark"><i class="mdi mdi-checkbox-multiple-marked-circle-outline"></i> Nilai:
                    <?=$row->nilai?></h4>
                <div class="text-dark pt-3"><b>Catatan: </b><?=$row->komentar?></div>
            </div>

            <?php endif;?>

        </div>
    </div>
</div>
<?php $i++; endforeach;?>

<?php
function jam($waktu)
{
    return substr($waktu,11,5)." WIB";
}

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
<?php $i=1; foreach($tugas as $row):?>
<div class="card pb-3">
    <div class="card-header bg-info text-white">Daftar Tugas</div>
    <div class="card-body">
        <h6><?=$row->judul_tugas?></h6>
        <?=$row->deskripsi_tugas ?>
        <?=$row->dateline?>
        Nilai
        <h1><?=$row->nilai?></h1>
    </div>
</div>
<?php $i++; endforeach;?>
<div class="card">
    <div class="card-header bg-dark text-white">Daftar Tugas</div>
    <div class="card-body">
    <table class="table">
    <thead>
    <th>No.</th>
    <th>Tugas</th>
    <th>Nilai</th>
    <th>Komentar</th>
    </thead>
    <tbody>
    <?php $i=1; foreach($tugas as $row):?>
    <tr>
    <td><?=$i?>.</td>
    <td><?=$row->judul_tugas?></td>
    <td><?=$row->nilai?></td>
    <td class="text-wrap"><?=$row->komentar?></td>
    </tr>
    <?php $i++; endforeach;?>
    </tbody>
    </table>
    </div>
</div>
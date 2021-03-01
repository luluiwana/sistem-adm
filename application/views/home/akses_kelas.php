<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark text-white">Daftar Tugas</div>
            <div class="card-body">
                <a href="<?=base_url('home/tambah_tugas/'.$id_kelas)?>" class="btn btn-primary mt-3 mb-3">Tambah Tugas</a>
                <table class="table table-hover">
                    <?php foreach($tugas as $row):?>
                    <tr>
                        <td class="table-wrap"><a
                                href="<?=base_url('home/lihat_tugas/'.$row->id_tugas)?>"><?=$row->judul_tugas?></a></td>
                      
                    </tr>
                    <?php endforeach;?>
                </table>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header  bg-dark text-white">Daftar Mahasiswa <?=$title?></div>
            <div class="card-body">
                <table class="table table-responsive mt-3">
                    <thead>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Nomor Whatsapp</th>
                    </thead>
                    <tbody>
                        <?php foreach($mhs as $row):?>
                        <tr>
                            <td><?=$row->username?></td>
                            <td><?=$row->nama?></td>
                            <td><?=$row->whatsapp?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
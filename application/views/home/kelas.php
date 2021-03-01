<div class="card">
    <div class="card-body" >
        <button class="btn btn-primary" data-toggle="modal" data-target="#buat_kelas">Buat Kelas</button>
        <div class="modal" id="buat_kelas">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Buat Kelas</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="<?=base_url('home/add_kelas')?>" method="post">
                            <input type="text" name="nama_kelas" id="" placeholder="Masukkan Nama Kelas"
                                class="form-control">
                            <input type="submit" value="Buat Kelas" class="btn btn-info btn-sm form-control mt-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 row">
         <table class="table table-responsive table-hover">
         <thead>
         <th>Daftar Kelas</th>
         <th>Jumlah Mahasiswa</th>
         <th></th>
         <th></th>
         </thead>
         <tbody>
         <?php foreach($kelas as $row):?>
         <tr>
         <td><?=$row->nama_kelas?></td>
         <td><?=$row->jml?></td>
         <td><a class="btn btn-info btn-sm" href="<?=base_url('home/akses_kelas/'.$row->id_kelas)?>">Akses Kelas</a></td>
         <td>
         <button class="btn btn-link" data-toggle="modal" data-target="#edit_kelas<?=$row->id_kelas?>">Edit Kelas</button>
         <div class="modal" id="edit_kelas<?=$row->id_kelas?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Kelas</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="<?=base_url('home/update_kelas/'.$row->id_kelas)?>" method="post">
                            <input type="text" name="nama_kelas" id="" placeholder="Masukkan Nama Kelas"
                                class="form-control" value="<?=$row->nama_kelas?>">
                            <input type="submit" value="Edit Kelas" class="btn btn-info btn-sm form-control mt-3">
                        </form>
                        <a href="<?=base_url('home/delete_kelas/'.$row->id_kelas)?>" class="btn btn-danger btn-sm form-control mt-2 text-white">Hapus Kelas</a>
                    </div>
                </div>
            </div>
        </div>
         </td>
         </tr>
         <?php endforeach;?>
         </tbody>
         </table>
          </div>
        </div>
    </div>
</div>
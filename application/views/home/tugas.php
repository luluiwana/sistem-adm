<div class="container-fluid">
    <?php if ($isTugas==true) : ?>
    <div class="card">
        <div class="card-body">
            <?php foreach ($getTugas as $row) :?>
            <div class="row">
                <div class="col-md-12">
                    <span style="color: black;font-weight: bold;font-size: larger;"><?=$row->judul_tugas?></span>
                    <p class="mt-3" style="text-indent:35px"><?=$row->deskripsi_tugas?></p>
                    <a href="<?=base_url('home/download_tugas')?>" target="_blank" class="btn btn-sm btn-primary">Download Tugas</a> <a href="<?=base_url('home/edittugas/'.$row->id_tugas)?>"
                        class="btn btn-info btn-sm">Edit Tugas</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="card">
            <div class="card-body" style="overflow-x:auto">
                <table class="table table-sm table-hover" id="user_table">
                    <thead style="font-weight:bold">
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Kelas</td>
                        <td>Status</td>
                        <td>Nilai</td>
                        <td>Komentar</td>
                        <td>Hasil</td>
                    </thead>
                    <?php foreach ($getMhs as $row) :?>
                    <?php if ($row->status=="Proses" || $row->status==NULL ) {
                            $status="<span class='text-danger'>Proses</span>";
                        }else {
                            $status="<span class='text-success'>Selesai</span>";
                        }
                        ?>
                    <tr>
                        <td><?=$row->username?></td>
                        <td><?=$row->nama?></td>
                        <td><?=$row->kelas?></td>
                        <td><?=$status?></td>
                        <td><?=$row->nilai?></td>
                        <td><?=$row->komentar?></td>
                        <td><a href="<?=base_url('home/hasil_tugas/').$row->id?>" class="btn btn-sm btn-primary">Lihat
                                Hasil</a></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
        <?php else :?>
        <div class="card">
            <div class="card-header">Buat Tugas</div>
            <div class="card-body">
                <?php
                if (isset($error)) {
                    echo $error;
                }
            ?>
                <?php echo form_open_multipart('home/tambahtugas');?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul Tugas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='judul_tugas' placeholder="Masukkan Judul Tugas"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi Tugas</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi_tugas" id="" cols="30" rows="10"
                            required>Deskripsi Tugas</textarea>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 col-form-label">Lampiran</label>
                    <input type="file" name="lampiran" id="" accept="application/pdf, application/zip, .rar" required> <br>
                    <label class="col-sm-2 col-form-label"> </label>
                    <span class="small">(Berkas dengan ekstensi .pdf, .zip, atau .rar)</span>
                </div>
                


                <button type="submit" class="btn btn-primary btn-block">Buat Tugas</button>

                </form>
            </div>

            <?php endif?>
        </div>
    </div>
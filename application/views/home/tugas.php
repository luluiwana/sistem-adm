<div class="container-fluid">
    <?php if ($isTugas==true) : ?>
    <div class="card">
        <div class="card-body">
            <?php foreach ($getTugas as $row) :?>
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-borderless table-sm">
                        <tr>
                            <td style="color: black;font-weight: bold;font-size: larger;"><?=$row->judul_tugas?></td>
                        </tr>
                        <tr>
                            <td><?=$row->deskripsi_tugas?></td>
                        </tr>
                        <tr>
                            <td><a href="<?=base_url('home/lihatlampiran')?>" target="_blank"
                                    class="btn btn-sm btn-primary">Lihat Lampiran</a> <a
                                    href="<?=base_url('home/edittugas/'.$row->id_tugas)?>"
                                    class="btn btn-info btn-sm">Edit Tugas</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="card">
            <div class="card-body" style="overflow-x:auto">
                    <table class="table table-sm" id="user_table">
                        <thead style="font-weight:bold">
                            <td>NIM</td>
                            <td>Nama</td>
                            <td>Status</td>
                            <td>Nilai</td>
                            <td>Komentar</td>
                            <td>Hasil</td>
                        </thead>
                        <?php foreach ($getMhs as $row) :?>
                        <tr>
                            <td><?=$row->username?></td>
                            <td><?=$row->nama?></td>
                            <td>Status</td>
                            <td>Nilai</td>
                            <td>Komentar</td>
                            <td><a href="" class="btn btn-sm btn-primary">Lihat Hasil</a><?=$row->id?></td>
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
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lampiran</label>
                    <input type="file" name="lampiran" id="" required>
                    <div class="col-sm-10">

                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-block">Buat Tugas</button>

                </form>
            </div>

            <?php endif?>
        </div>
    </div>
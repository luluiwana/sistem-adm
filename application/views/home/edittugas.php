<div class="container-fluid">

    <div class="card">
        <div class="card-header">Edit Tugas</div>
        <div class="card-body">
            <?php
                if (isset($error)){
                    echo $error;
                }
            ?>
            <?php foreach ($getTugas as $row) :  ?>
            <?php echo form_open_multipart('home/edit_tugas/'.$row->id_tugas);?>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Judul Tugas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul_tugas' value="<?=$row->judul_tugas?>"
                        placeholder="Masukkan Judul Tugas" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Deskripsi Tugas</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi_tugas" id="" cols="30" rows="10"
                        required><?=$row->deskripsi_tugas?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Batas Pengumpulan</label>
                <div class="col-sm-3">
                    <input type="datetime-local" name="dateline" id="" class="form-control" value="<?=$row->dateline?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">Lampiran</label>
                <input type="file" name="lampiran" id="" accept="application/pdf, application/zip, .rar"> <br>
                <label class="col-sm-2 col-form-label"> </label>
                <span class="small">(Berkas dengan ekstensi .pdf, .zip, atau .rar)</span>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Edit Tugas</button>

            </form>
            <a href=<?=base_url('home/delete_tugas/'.$row->id_tugas)?> type="submit"
                class="btn btn-danger btn-block mt-3 text-white">Hapus Tugas</a>
            <?php endforeach;?>
        </div>


    </div>
</div>
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
                        <input type="text" class="form-control" name='judul_tugas' value="<?=$row->judul_tugas?>" placeholder="Masukkan Judul Tugas"
                            required>
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
                    <label class="col-sm-2 col-form-label">Lampiran</label>
                    <input type="file" name="lampiran" id="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Edit Tugas</button>
                <?php endforeach;?>
                </form>
            </div>

          
        </div>
    </div>
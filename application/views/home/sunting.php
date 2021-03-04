<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        Perbarui Data Password Akun
    </div>
    <?= $this->session->flashdata('message') ?>
    <div class="card-body bg-white">
        <button type="button" data-toggle="modal" data-target="#modal_sunting" class="btn btn-success btn-md" style="margin-bottom: 30px;">Edit Informasi Akun</button>
        <div class="col-md-12 col-lg-12 col-sm-12">
            <form action='<?php base_url('home/edit_profil'); ?>' method="post">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name='name' placeholder="Masukkan Username">
                        <?php echo form_error('name', "<small class='text-danger pl-3'>", ' </small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputEmail3" name='password1' placeholder="Masukkan Password Lama">
                        <?php echo form_error('password1', "<small class='text-danger pl-3'>", ' </small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputEmail3" name='password2' placeholder="Masukkan Password Baru">
                        <?php echo form_error('password2', "<small class='text-danger pl-3'>", ' </small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputEmail3" name='password3' placeholder="Masukkan Kembali Password Baru">
                        <?php echo form_error('password3', "<small class='text-danger pl-3'>", ' </small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Perbarui Password</button>

            </form>
        </div>
    </div>
</div>

<div id="modal_sunting" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Keterangan Akun
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name='name' placeholder="Masukkan Username">
                            <?php echo form_error('name', "<small class='text-danger pl-3'>", ' </small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name='name' placeholder="Masukkan Username">
                            <?php echo form_error('name', "<small class='text-danger pl-3'>", ' </small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name='name' placeholder="Masukkan Username">
                            <?php echo form_error('name', "<small class='text-danger pl-3'>", ' </small>'); ?>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
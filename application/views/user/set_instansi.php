<div class="container-fluid">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">PREVIEW HEADER SAAT INI</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height:auto;width:100%" src=" <?= base_url('files/img/' . $logo); ?>" alt="">
                    </div>
                    <div class="col-8 mt-3 mb-4">
                        <h5 class="text-left"><?= $header_1 ?></h5>
                        <h5 class="text-left"><?= $header_2 ?></h5>
                        <h5 class="text-left"><?= $header_3 ?> </h5>
                        <h6 class="text-left"><?= $header_4 ?> </h6>
                        <h6 class="text-left font-italic"><?= $header_5  ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($this->session->flashdata('error_msg')) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php
        echo $this->session->flashdata('error_msg');
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span></button></div>';
    }
        ?>
        <div class="alert alert-success" role="alert">
            Perbarui Keterangan Detail dari Instansi Terkait
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="<?= base_url('user/update_instansi'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 1</label>
                        <input type="text" name="h1" value="<?= $header_1 ?>" class="col-sm-10 form-control"></div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 2</label>
                        <input type="text" name="h2" value="<?= $header_2 ?>" class=" col-sm-10 form-control"></div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 3</label>
                        <input type="text" name="h3" value="<?= $header_3 ?>" class=" col-sm-10 form-control"></div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 4</label>
                        <input type="text" name="h4" value="<?= $header_4 ?>" class=" col-sm-10 form-control"></div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 5 </label>
                        <input type="text" name="h5" value="<?= $header_5 ?>" class=" col-sm-10 form-control"></div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">LOGO </label>
                        <input type="file" name="logo" class=" col-sm-10 form-control"></div>

                    <button class="btn btn-info" type="submit">SIMPAN </button>
                </form>
            </div>


        </div>
        </div>
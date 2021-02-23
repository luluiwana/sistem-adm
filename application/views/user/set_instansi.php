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

                    <div class="form-group row ml-1">
                        <a href="<?php echo base_url('user/form_suratmasuk') ?>" class="btn btn-primary btn-sm " data-toggle="modal" data-target=".bd-example-modal-lg">Edit Data Unit Pokok</a>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 1</label>
                        <input type="text" name="h1" value="<?= $header_1 ?>" class="col-sm-10 form-control">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 2</label>
                        <input type="text" name="h2" value="<?= $header_2 ?>" class=" col-sm-10 form-control">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 3</label>
                        <input type="text" name="h3" value="<?= $header_3 ?>" class=" col-sm-10 form-control">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 4</label>
                        <input type="text" name="h4" value="<?= $header_4 ?>" class=" col-sm-10 form-control">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">HEADER 5 </label>
                        <input type="text" name="h5" value="<?= $header_5 ?>" class=" col-sm-10 form-control">
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">LOGO </label>
                        <input type="file" name="logo" class=" col-sm-10 form-control">
                    </div>

                    <button class="btn btn-info" type="submit">SIMPAN </button>
                </form>
            </div>


        </div>
        </div>

        <div id="modal_klasifikasi" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Unit Pokok & Pokok Masalah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Unit Pokok</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pokok Masalah</a>
                            </div>
                        </nav>
                        <div class="tab-content mt-4 mb-4" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <form class="mb-4" action="<?= base_url('user/addUnit') ?>" method="POST">
                                    <div class="form-group form-inline">
                                        <label for="inputPassword6 col-md-4">Tambah Data</label>
                                        <input type="text" name='pokok' required class="col-md-5 form-control mx-sm-3" placeholder="Masukkan Data Unit ">
                                        <input class="btn btn-primary col-md-2" type="submit" value="Tambah Data">
                                    </div>
                                </form>
                                <form class="mb-2" action="<?= base_url('user/editUnit') ?>" method="POST">
                                    <div class="form-inline form-group">
                                        <label for="inputPassword6 col-md-4 ">Edit Data Unit</label>
                                        <select name='id_unit' class="col-md-2 form-control mx-sm-2 ">
                                            <option value=""> ID Unit .. </option>
                                            <?php
                                            if (!empty($unit)) {
                                                foreach ($unit as $data) {
                                            ?>
                                                    <tr>
                                                        <option value="<?= $data['id'] ?>"><?= $data['id'] ?></option>

                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <input type="text" name='pokok_2' required class="col-md-3 form-control mx-sm-2" placeholder=" Data Unit Baru ">
                                        <input class="btn btn-primary col-md-2" type="submit" value="Edit Data">
                                    </div>
                                </form>

                                <div class="table-responsive mt-4">
                                    <table class="table table-bordered" width=" 100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <td width="101px">Kode Unit</td>
                                                <td>Nama Unit Pokok</td>
                                                <td width="60px">Setting</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            if (empty($unit)) {
                                            ?>

                                                <tr>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>

                                                <?php
                                            } else {
                                                foreach ($unit as $data) {
                                                ?>
                                                    <tr>
                                                        <td><?= $data['id'] ?></td>
                                                        <td><?= $data['unit'] ?></td>
                                                        <td><a href="<?= base_url('user/deleteUnit/' . $data['id']) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <form class="mb-4" action="<?= base_url('user/addMasalah') ?>" method="POST">
                                        <div class="form-group form-inline">
                                            <label for="inputPassword6 col-md-4">Add Pokok Masalah</label>
                                            <input type="text" name='masalah' required class="col-md-5 form-control mx-sm-3" placeholder="Masukkan Pokok Masalah ">
                                            <input class="btn btn-primary col-md-2" type="submit" value="Tambah Data">
                                        </div>
                                    </form>
                                    <form class="mb-2" action="<?= base_url('user/editMasalah') ?>" method="POST">
                                        <div class="form-inline form-group">
                                            <label for="inputPassword6 col-md-4 ">Edit Pokok Masalah</label>
                                            <select name='id_masalah' class="col-md-2 form-control mx-sm-2 ">
                                                <option value=""> ID ... </option>
                                                <?php
                                                if (!empty($pokok_masalah)) {
                                                    foreach ($pokok_masalah as $data2) {
                                                ?>
                                                        <tr>
                                                            <option value="<?= $data2['id'] ?>"><?= $data2['id'] ?></option>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <input type="text" name='masalah_2' required class="col-md-3 form-control mx-sm-2" placeholder=" Data Pokok Baru ">
                                            <input class="btn btn-primary col-md-2" type="submit" value="Edit Data">
                                        </div>
                                    </form>

                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered" width=" 100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <td width="101px">Kode Unit</td>
                                                    <td>Nama Unit Pokok</td>
                                                    <td width="60px">Setting</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if (empty($pokok_masalah)) {
                                                ?>

                                                    <tr>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>

                                                    <?php
                                                } else {
                                                    foreach ($pokok_masalah as $data2) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $data2['id'] ?></td>
                                                            <td><?= $data2['masalah'] ?></td>
                                                            <td><a href="<?= base_url('home/deleteMasalah/' . $data2['id']) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
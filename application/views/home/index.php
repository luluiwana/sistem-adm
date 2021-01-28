<?php
?>

<!-- Begin Page Content -->
<div class="container-fluid my-auto">

    <!-- Page Heading -->
    <div class="row">
    
        <div class="col-md-12">
            <div class="card mb-4 py-1 border-left-primary ">
                <div class="row p-2">
                    <div class="col-3"></div>
                    <div class="col-6  pb-0 float-right card-body">
                        <h4 class="text-center"><b>Selamat Datang di Sieren</b></h4>
                        <h6 class="text-center">Sistem Kearsipan Elektronik Berbasis Web Codeigniter</h6>
                    </div>

                </div>
                <div class="col-xs-7 mb-3  col-sm-7 mx-auto ">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-primary " disabled type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                        <input type="text" id='search_text' name="search_text" class="form-control bg-light border-0 small" placeholder="Search ... " aria-label="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-none" id="hasil">
        <div class="col-md-12">
            <div class="card mb-4 py-1 border-left-primary ">
                <div class="row p-3 ml-2">
                    <h5>Hasil Pencarian :</h5>
                    <div class="col-12 p-0" id="result_box">
                        <div class="row">
                            <div class="col-6" id='b1'></div>
                            <div class="col-6" id='b2'></div>
                            <div class="col-6" id='b3'></div>
                            <div class="col-6" id='b4'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="<?= base_url('home/laporan_suratmasuk') ?>">Jumlah Surat Masuk</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sm ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="<?php echo base_url('files/img/'); ?>inbox.png" alt="logo um" class="float-left mr-2" width="50"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="<?= base_url('home/laporan_suratkeluar') ?>">Jumlah Surat Keluar</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sk ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="<?php echo base_url('files/img/'); ?>outbox.png" alt="logo um" class="float-left mr-2" width="50"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <a href="<?= base_url('home/pinjam') ?>"> Arsip Dipinjam</a>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $ar ?></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="<?php echo base_url('files/img/'); ?>archive.png" alt="logo um" class="float-left mr-2" width="40"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <a href="<?= base_url('home/jadwal_retensi') ?>">Jadwal Retensi</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ret ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="<?php echo base_url('files/img/'); ?>retensi.png" alt="logo um" class="float-left mr-2" width="50"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

</div>
<!-- End of Main Content -->
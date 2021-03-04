

<!-- Begin Page Content -->
<div class="container-fluid my-auto">
    <!-- Page Heading -->
    
    <div class="col-xs-7 mb-3  col-sm-7 mx-auto mt-5">
        <div class="t-header-search-box">
            <div class="input-group">
                <input type="text" class="form-control" id='search_text' name="search_text" placeholder="Cari Arsip..."
                    autocomplete="off">
                <button class="btn btn-primary btn-sm" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
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
                                    <a href="<?= base_url('user/laporan_suratmasuk') ?>">Jumlah Surat Masuk</a>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sm ?></div>
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
                                    <a href="<?= base_url('user/laporan_suratkeluar') ?>">Jumlah Surat Keluar</a>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sk ?></div>
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
                                    <a href="<?= base_url('user/pinjam') ?>"> Arsip Dipinjam</a>
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $pin ?></div>
                                    </div>

                                </div>
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
                                    <a href="<?= base_url('user/jadwal_retensi') ?>">Jadwal Retensi</a>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ret ?></div>
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
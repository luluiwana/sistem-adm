<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"> Selamat Datang</h1>
                                </div>
                                <?php
                if ($this->session->flashdata('login-failed')) {
                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php
                  echo $this->session->flashdata('login-failed');
                  echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span></button></div>';
                }
                  ?>
                                    <form method="post" action="<?php echo base_url('auth/proses_login') ?>">

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Username Anda" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Password Anda"
                                                name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block"> Login
                                        </button>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo base_url('auth/daftar') ?>">buat akun
                                                baru</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<body>
    <div class="authentication-theme auth-style_1">

        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
                <div class="grid">
                    <div class="grid-body">
                        <div class="row">
                            <div class="col-12 logo-section">
                                <a href="<?=base_url("")?>" class="logo">
                                    <img src="<?=base_url('assets/images/logo.png')?>" alt="logo" />
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                                <form method="post" action="<?php echo base_url('auth/proses_daftar'); ?>">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" required
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Nama Anda" name="nama">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" required
                                                id="exampleInputEmail2" aria-describedby="emailHelp"
                                                placeholder="Masukan Nomor Induk" name="username">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input id="msg" type="text" class="form-control" name="whatsapp"
                                                    required placeholder="Nomor Whatsapp">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select name="kelas" id="" class="form-control" required>
                                                <option value="">--Pilih Kelas--</option>
                                                <?php foreach($kelas as $row):?>
                                                <option value="<?=$row->id_kelas?>"><?=$row->nama_kelas?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Password"
                                                name="password">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block"> Daftar </button>
                                    </div>
                                </form>
                                <div class="signup-link">
                                    <p>Sudah memiliki akun?</p>
                                    <a href="<?php echo base_url('auth/login') ?>">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth_footer">
            <p class="text-muted text-center">© ArsipKita 2021</p>
        </div>
    </div>
    <!--page body ends -->

    <!--page body ends -->
<!-- SCRIPT LOADING START FORM HERE /////////////-->
        <!-- plugins:js -->
        <script src="<?=base_url('assets/vendors/js/core.js')?>"></script>
        <script src="<?=base_url('assets/vendors/js/vendor.addons.js')?>"></script>
        <!-- endinject -->
        <!-- Vendor Js For This Page Ends-->
        <!-- Vendor Js For This Page Ends-->
        <!-- build:js -->
        <script src="<?=base_url('assets/js/template.js')?>"></script>
        <!-- endbuild -->
</body>


</html>
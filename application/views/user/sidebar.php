
   <!-- partial:partials/_sidebar.html -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                <?php $username = $this->session->userdata('username');?>
                    <img class="profile-img img-lg rounded-circle" src="https://api.um.ac.id/akademik/operasional/GetFoto.ptikUM?nim=<?=$username?>&angkatan=20<?=substr($username,0,2)?>"
                        alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name"><?=$this->session->userdata('nama')?></p>
                    <span class="display-income"><?=$username?></span>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MENU</li>
                <li >
                    <a href="<?php echo base_url('user') ?>">
                        <span class="link-title">Dashboard</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('user/tugas') ?>">
                        <span class="link-title">Tugas</span>
                        <i class="mdi mdi-school link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#arsip" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Manajemen Arsip</span>
                        <i class="mdi mdi-file-multiple link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="arsip">
                        <li>
                            <a href="<?php echo base_url('user/laporan_suratmasuk') ?>"  >Surat Masuk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user/laporan_suratkeluar') ?>"  >Surat Keluar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user/jadwal_retensi') ?>"  >Jadwal Retensi Arsip</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user/pinjam') ?>"  >Rekap Surat Dipinjam</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('user/buku_agenda') ?>">
                        <span class="link-title">Buku Agenda</span>
                        <i class="mdi mdi-book-minus link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('user/rapat_pimpinan') ?>">
                        <span class="link-title">Buku Agenda Rapat</span>
                        <i class="mdi mdi-calendar-clock link-icon"></i>
                    </a>
                </li>
                 <li class="nav-category-divider">Pengaturan Akun</li>
                 <li>
                    <a href="<?php echo base_url('user/edit_profil') ?>">
                        <span class="link-title">Edit Profil</span>
                        <i class="mdi mdi-account-key link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('auth/logout') ?>">
                        <span class="link-title">Keluar</span>
                        <i class="mdi mdi-logout link-icon"></i>
                    </a>
                </li>
                
            </ul>
           
        </div>
        <!-- partial -->
        <div class="page-content-wrapper">

   <!-- partial:partials/_sidebar.html -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="<?=base_url('assets/images/profile/admin.jpg')?>"
                        alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name"><?=$this->session->userdata('nama')?></p>
                    <span class="display-income"><?=$this->session->userdata('username')?></span>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MENU</li>
                <li >
                    <a href="<?php echo base_url('home') ?>">
                        <span class="link-title">Dashboard</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('home/kelas') ?>">
                        <span class="link-title">Kelas</span>
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
                            <a href="<?php echo base_url('home/laporan_suratmasuk') ?>"  >Surat Masuk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/laporan_suratkeluar') ?>"  >Surat Keluar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/jadwal_retensi') ?>"  >Jadwal Retensi Arsip</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/pinjam') ?>"  >Rekap Surat Dipinjam</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('home/buku_agenda') ?>">
                        <span class="link-title">Buku Agenda</span>
                        <i class="mdi mdi-book-minus link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('home/rapat_pimpinan') ?>">
                        <span class="link-title">Buku Agenda Rapat</span>
                        <i class="mdi mdi-calendar-clock link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('home/pengaturan_instansi') ?>">
                        <span class="link-title">Pengaturan Instansi</span>
                        <i class="mdi mdi-flag link-icon"></i>
                    </a>
                </li>
                 <li class="nav-category-divider">Pengaturan Akun</li>
                 <li>
                    <a href="<?php echo base_url('home/edit_profil') ?>">
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
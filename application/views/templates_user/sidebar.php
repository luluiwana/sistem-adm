    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url('files/img/'); ?>logo-um.png" alt="logo um" class="float-left " width="50px"></img>
        </div>
        <div class="sidebar-brand-text mx-3">
          <h4 class="mt-2">SIEREN</h4>
        </div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user') ?>">
          <!-- <i class="fa fa-envelope-open-text"></i> -->
          <img src="<?php echo base_url('files/img/'); ?>dashboard.png" alt="logo um" class="mr-2" width="20"></img>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/laporan_suratmasuk') ?>">
          <!-- <i class="fa fa-envelope-open-text"></i> -->
          <img src="<?php echo base_url('files/img/'); ?>inbox.png" alt="logo um" class="mr-2" width="20"></img>
          <span> Surat Masuk</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/laporan_suratkeluar') ?>">
          <!-- <i class="fa fa-envelope"></i> -->
          <img src="<?php echo base_url('files/img/'); ?>outbox.png" alt="logo um" class=" mr-2" width="20"></img>
          <span> Surat Keluar</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/jadwal_retensi') ?>">
          <img src="<?php echo base_url('files/img/'); ?>retensi.png" alt="logo um" class=" mr-2" width="20"></img>
          <span>Jadwal Retensi Arsip</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/penyusutan') ?>">
          <img src="<?php echo base_url('files/img/'); ?>susut.png" alt="logo um" class=" mr-2" width="20px"></img>
          <span>Penyusutan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/form_pinjamarsip') ?>">
          <img src="<?php echo base_url('files/img/'); ?>paper.png" alt="logo um" class=" mr-2" width="20px"></img>
          <span>Lembar Pinjam Arsip</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/pinjam') ?>">
          <img src="<?php echo base_url('files/img/'); ?>peminjaman.png" alt="logo um" class=" mr-2" width="20px"></img>
          <span>Rekap Surat Dipinjam</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/buku_agenda') ?>">
          <img src="<?php echo base_url('files/img/'); ?>open-book.png" alt="logo um" class=" mr-2" width="20px"></img>
          <span>Buku Agenda </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/pengaturan_instansi') ?>">
          <img src="<?php echo base_url('files/img/'); ?>building.png" alt="logo um" class=" mr-2" width="20px"></img>
          <span>Pengaturan Instansi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/edit_profil') ?>">
          <img src="<?php echo base_url('files/img/'); ?>add-friend.png" alt="logo um" class=" mr-2" width="20px"></img>
          <span>Sunting Profil</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/rapat_pimpinan') ?>">
          <img src="<?php echo base_url('files/img/'); ?>rapat.png" alt="logo um" class=" mr-2" width="20px"></img>
          <span>Buku Agenda Rapat</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/index') ?>">
          <i>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
            </svg>
          </i>
          <span>Keluar</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->
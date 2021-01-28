        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="alert alert-success" role="alert">
            Tabel Rekap Surat Dipinjam
          </div>

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-1 font-weight-bold text-primary"></h6><br>
              <a href="<?php echo base_url('user/form_pinjamarsip') ?>" class="btn btn-primary btn-sm float-left">Pinjam Arsip</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="pinjam" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <td>No Urut</td>
                      <td>No Surat</td>
                      <td>Nama Peminjam</td>
                      <td>Tanggal Pinjam</td>
                      <td>Tanggal Kembali</td>
                      <td>Selisih Peminjaman</td>
                      <td>Dokumen Dipinjam</td>
                      <td>Status</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($pinjam as $dtp) : ?>
                      <tr>
                        <td><?php echo $dtp['no_urut']; ?></td>
                        <td><?php echo $dtp['nomor_peminjam']; ?></td>
                        <td><?php echo $dtp['nama_peminjam']; ?></td>
                        <td><?php echo $dtp['tanggal_pinjam']; ?></td>
                        <td><?php echo $dtp['tanggal_kembali']; ?></td>
                        <td><?php $date = date_diff(date_create($dtp['tanggal_pinjam']), date_create($dtp['tanggal_kembali']));
                            echo  $date->format('%R%a Hari') ?></td>
                        <td><?php echo $dtp['dokumen_dipinjam']; ?></td>
                        <td><?php echo $dtp['status']; ?></td>
                        <td><a href="<?php echo base_url() ?>user/update_pinjam/<?php echo $dtp['no_urut']; ?>" class="btn btn-danger btn-sm">Dikembalikan</a></td>
                      </tr>

                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
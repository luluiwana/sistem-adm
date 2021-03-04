        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="alert alert-success" role="alert">
            Data Surat Keluar
          </div>
          <?php
          if ($this->session->flashdata('success')) {
          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php
            echo $this->session->flashdata('success');
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span></button></div>';
          }
            ?>
            <!-- Page Heading -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold text-primary"></h6><br>
                <a href="<?php echo base_url('home/form_suratkeluar') ?>" class="btn btn-primary btn-sm float-left">Tambah Data</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="surat_keluar" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td>#</td>
                        <td>No urut</td>
                        <td>Kepada</td>
                        <td>Lampiran</td>
                        <td>Tanggal Surat</td>
                        <td>Perihal</td>
                        <td>Tanggal Simpan</td>
                        <td colspan="1">Setting</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($surat_keluar as $dt) : ?>
                        <tr data-child-ringkasan='<?= htmlspecialchars($dt["isi_ringkasan"]) ?>' data-child-alamat='<?php echo $dt['alamat']; ?>' data-child-nomor='<?php echo $dt['no_surat']; ?>' data-child-nama='<?php echo $dt['nama']; ?>' data-child-kategori='<?= $dt["kategori"] ?>'>
                          <td class="detailed"><i class="fas fa-arrow-alt-circle-down"></i></td>
                          <td><?php echo $dt['no_urut']; ?></td>
                          <td><?php echo $dt['kepada']; ?></td>
                          <td><?php echo $dt['lampiran']; ?></td>
                          <td><?php echo $dt['tanggal_surat']; ?></td>
                          <td><?php echo $dt['perihal']; ?></td>
                          <td><?php echo $dt['tanggal_simpan']; ?></td>
                          <td>
                            <a href="<?php echo base_url() ?>home/update_datakeluar/<?php echo $dt['no_urut']; ?>" class="badge badge-primary"> Edit </a>
                            <a href="<?php echo base_url() ?>home/hapus_datakeluar/<?php echo $dt['no_urut']; ?>" class="badge badge-danger"> Hapus </a>
                          </td>
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
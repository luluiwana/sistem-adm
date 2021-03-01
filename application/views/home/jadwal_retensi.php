<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    Jadwal Retensi Surat
  </div>

  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-1 font-weight-bold text-primary"></h6><br>
      <a href="<?php echo base_url('home/form_jadwalretensi') ?>" class="btn btn-primary btn-sm float-left">Tambah Jadwal Retensi</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="retensi" width="100%" cellspacing="0">
          <thead>
            <tr>
              <td>No urut</td>
              <td>Editor</td>
              <td>Surat</td>
              <td>Tanggal Mulai</td>
              <td>Tanggal Berakhir</td>
              <td>Selisih Peminjaman</td>
              <td colspan="1">Setting</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($retensi as $dt) : ?>
              <tr>
                <td><?php echo $dt['no_urut']; ?></td>
                <td><?php echo $dt['nama']; ?></td>
                <td><?php echo $dt['surat']; ?></td>
                <td><?php echo $dt['tanggal_mulai']; ?></td>
                <td><?php echo $dt['tanggal_berakhir']; ?></td>
                <td><?php $date = date_diff(date_create($dt['tanggal_mulai']), date_create($dt['tanggal_berakhir']));
                    echo  $date->format('%R%a Hari') ?></td>
                <td>
                  <!-- <a href="<?php echo base_url() ?>home/update_dataretensi/<?php echo $dt['no_urut']; ?>" class="badge badge-primary"> Edit </a> -->
                  <a href="<?php echo base_url() ?>home/hapus_dataretensi/<?php echo $dt['no_urut']; ?>" class="badge badge-danger"> Hapus </a>
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
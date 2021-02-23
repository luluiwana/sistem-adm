<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    Penyusutan Arsip
  </div>

  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-1 font-weight-bold text-primary"></h6><br>
      <a href="<?php echo base_url('home/form_penyusutan') ?>" class="btn btn-primary btn-sm float-left">Tambah penyusutan surat</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <td width='20px'>No urut</td>
              <td>Editor</td>
              <td>Perihal Surat</td>
              <td>Setting</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($penyusutan as $dt) : ?>
              <tr>
                <td><?php echo $dt['no_urut']; ?></td>
                <td><?php echo $dt['nama']; ?></td>
                <td><?php echo $dt['surat']; ?></td>
                <td>
                  <!-- <a href="<?php echo base_url() ?>home/update_penyusutan/<?php echo $dt['no_urut']; ?>" class="badge badge-primary"> Edit </a> -->
                  <a href="<?php echo base_url() ?>home/hapus_penyusutan/<?php echo $dt['no_urut']; ?>" class="badge badge-danger"> Hapus </a>
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
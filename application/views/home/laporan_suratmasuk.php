        <style>
td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}

tr.details td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
}
        </style>
        <!-- Begin Page Content -->
        <div class="container-fluid">

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
                    <div class="card-header py-3 bg-dark text-white">
                        Data Surat Masuk

                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('home/form_suratmasuk') ?>"
                            class="btn btn-primary btn-sm float-left">Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="surat_masuk" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <td>No urut</td>
                                        <td>Editor</td>
                                        <td>Dari</td>
                                        <td>Alamat</td>
                                        <td>No Surat</td>
                                        <td>Lampiran</td>
                                        <td>Tanggal Surat</td>
                                        <td>Perihal</td>
                                        <td>Tanggal Simpan</td>
                                        <td>Kategori</td>
                                        <td>Isi Ringkasan</td>
                                        <td colspan="1">Setting</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($surat_masuk as $dt) : ?>
                                    <tr>
                                        <td><?php echo $dt['no_urut']; ?></td>
                                        <td><?php echo $dt['nama']; ?></td>
                                        <td><?php echo $dt['dari']; ?></td>
                                        <td><?php echo $dt['alamat']; ?></td>
                                        <td><?php echo $dt['no_surat']; ?></td>
                                        <td><?php echo $dt['lampiran']; ?></td>
                                        <td><?php echo $dt['tanggal_surat']; ?></td>
                                        <td><?php echo $dt['perihal']; ?></td>
                                        <td><?php echo $dt['tanggal_simpan']; ?></td>
                                        <td><?php echo $dt['kategori']; ?></td>
                                        <td><?php echo $dt['isi_ringkasan']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>home/update_datamasuk/<?php echo $dt['no_urut']; ?>"
                                                class="badge badge-primary"> Edit </a>
                                            <a href="<?php echo base_url() ?>home/hapus_datamasuk/<?php echo $dt['no_urut']; ?>"
                                                class="badge badge-danger"> Hapus </a>
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

        <script type="text/javascript">
var table;
$(document).ready(function() {

    //datatables
    table = $('#surat_masuk').DataTable({

        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?php echo site_url('home/get_data_user')?>",
            "type": "POST"
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
        }, ],

    });

});
        </script>
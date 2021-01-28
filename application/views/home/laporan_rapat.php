<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        Data Agenda Rapat
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
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ekspor PDF
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a href="<?= base_url('home/rapat_exp/Harian')?>" class="dropdown-item">Harian</a>
                        <a href="<?= base_url('home/rapat_exp/Mingguan')?>" class="dropdown-item">Mingguan</a>
                        <a href="<?= base_url('home/rapat_exp/Bulanan')?>" class="dropdown-item">Bulanan</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="jadwal_rapat" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Tanggal</td>
                                <td>Pukul</td>
                                <td>Kegiatan</td>
                                <td>Tempat</td>
                                <td>Keterangan</td>
                                <td colspan="1">Setting</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $numb = 1;
                            foreach ($surat_masuk as $dt) : ?>
                            <tr data-toggle="collapse" data-target="#collapseOne<?php echo $dt->no_urut; ?>">
                                <td><?php echo $numb; ?></td>
                                <td><?php echo tgl_indo($dt->tgl_rapat); ?></td>
                                <td><?php echo $dt->waktu_rapat; ?></td>
                                <td><?php echo $dt->perihal; ?></td>
                                <td><?php echo $dt->tempat_rapat; ?></td>
                                <td><?php echo $dt->isi_ringkasan; ?></td>
                                <?php if ($dt->dari=="" || $dt->dari=="-") {?>
                                <td>
                                    <a href="<?php echo base_url() ?>home/update_datakeluar/<?php echo $dt->no_urut; ?>"
                                        class="badge badge-primary"> Edit </a>
                                    <a href="<?php echo base_url() ?>home/hapus_datakeluar<?php echo $dt->no_urut; ?>"
                                        class="badge badge-danger"> Hapus </a>
                                </td>
                                <?php } else { ?>
                                <td>
                                    <a href="<?php echo base_url() ?>home/update_datamasuk/<?php echo $dt->no_urut; ?>"
                                        class="badge badge-primary"> Edit </a>
                                    <a href="<?php echo base_url() ?>home/hapus_datamasuk/<?php echo $dt->no_urut; ?>"
                                        class="badge badge-danger"> Hapus </a>
                                </td>
                                <?php } ?>
                            </tr>
                            <tr style="background-color:aquablue" class="collapse" id="collapseOne<?php echo $dt->no_urut;
; ?>">
                                <td></td>
                                <td colspan="3">
                                    <table class="table table-borderless table-sm">
                                        <tr>
                                            <td style="width:15%">No. Surat</td>
                                            <td>:</td>
                                            <td><?php echo $dt->no_surat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Editor</td>
                                            <td>:</td>
                                            <td><?php echo $dt->nama; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dari</td>
                                            <td>:</td>
                                            <td><?php echo $dt->dari; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td><?php echo $dt->alamat; ?></td>
                                        </tr>
                                    </table>
                                </td>
                                <td colspan="3">
                                    <table class="table table-borderless table-sm">
                                        <tr>
                                            <td style="width:28%">Lampiran</td>
                                            <td>:</td>
                                            <td><?php echo $dt->lampiran; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Surat</td>
                                            <td>:</td>
                                            <td><?php echo $dt->tanggal_surat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Simpan</td>
                                            <td>:</td>
                                            <td><?php echo $dt->tanggal_simpan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>:</td>
                                            <td><?php echo $dt->kategori; ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <?php $numb++; endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
function tgl_indo($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date('H:i:s', strtotime($waktu));
    
    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return "$hari, $tanggal $bulan $tahun";
}


?>
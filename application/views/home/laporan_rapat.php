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
                <form action="<?= base_url('home/getCustomRapat') ?>" method="POST">
                    <h6 class=" font-weight-bold text-primary">Rekap Jadwal Rapat</h6>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="inputZip">Tanggal Awal</label>
                            <input type="date" class="form-control" name="date_a">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputZip">Tanggal Akhir</label>
                            <input type="date" class="form-control" name="date_b">
                        </div>

                    </div>
                    <input type="submit" class="btn btn-md btn-primary" value="Cetak Data">
                </form>
            </div>

            <div class="card-body">
                <div class="btn-group float-right mb-3" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rekap Jadwal Berdasarkan :
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a href="<?= base_url('home/rapat_exp/Harian') ?>" class="dropdown-item">Harian</a>
                        <a href="<?= base_url('home/rapat_exp/Mingguan') ?>" class="dropdown-item">Mingguan</a>
                        <a href="<?= base_url('home/rapat_exp/Bulanan') ?>" class="dropdown-item">Bulanan</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td style="padding-right:22px">#</td>
                                <td>No</td>
                                <td>Tanggal</td>
                                <td>Pukul</td>
                                <td>Kegiatan</td>
                                <td>Tempat</td>

                                <td colspan="1">Setting</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $numb = 1;
                            foreach ($surat_masuk as $dt) : ?>
                                <tr data-toggle="collapse" data-target="#collapseOne<?php echo $dt->no_urut; ?>">
                                    <td><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></td>
                                    <td><?php echo $numb; ?></td>
                                    <td><?php echo tgl_indo($dt->tgl_rapat); ?></td>
                                    <td><?php echo $dt->waktu_rapat; ?></td>
                                    <td><?php echo $dt->perihal; ?></td>
                                    <td><?php echo $dt->tempat_rapat; ?></td>

                                    <?php if ($dt->dari == "" || $dt->dari == "-") { ?>
                                        <td>
                                            <a href="<?php echo base_url() ?>home/update_datakeluar/<?php echo $dt->no_urut; ?>" class="badge badge-primary"> Edit </a>
                                            <a href="<?php echo base_url() ?>home/hapus_datakeluar<?php echo $dt->no_urut; ?>" class="badge badge-danger"> Hapus </a>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <a href="<?php echo base_url() ?>home/update_datamasuk/<?php echo $dt->no_urut; ?>" class="badge badge-primary"> Edit </a>
                                            <a href="<?php echo base_url() ?>home/hapus_datamasuk/<?php echo $dt->no_urut; ?>" class="badge badge-danger"> Hapus </a>
                                        </td>
                                    <?php } ?>
                                </tr>
                                <tr style="background-color:aquablue" class="collapse" id="collapseOne<?php echo $dt->no_urut; ?>">
                                    <td></td>
                                    <td colspan="3">
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td style="width:15%">No. Surat</td>

                                                <td><?php echo $dt->no_surat; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Editor</td>

                                                <td><?php echo $dt->nama; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Dari</td>

                                                <td><?php echo $dt->dari; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>

                                                <td><?php echo $dt->alamat; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width:28%">Lampiran</td>
                                                <td>:</td>
                                                <td><?php echo $dt->lampiran; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Surat</td>

                                                <td><?php echo $dt->tanggal_surat; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Simpan</td>

                                                <td><?php echo $dt->tanggal_simpan; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kategori</td>

                                                <td><?php echo $dt->kategori; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Isi Ringkasan</b></td>

                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-wrap">
                                                    <?= $dt->isi_ringkasan ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                </tr>


                            <?php $numb++;
                            endforeach; ?>

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
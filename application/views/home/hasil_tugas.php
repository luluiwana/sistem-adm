<style>
tr.hide-table-padding td {
    padding: 0;
}

.expand-button {
    position: relative;
    font-size: 30px;
}

.accordion-toggle .expand-button:after {
    position: absolute;
    left: .75rem;
    top: 50%;
    transform: translate(0, -50%);
    content: "▾";

}

.accordion-toggle.collapsed .expand-button:after {
    content: "▸";
}
</style>

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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Identitas Mahasiswa
            </div>

            <div class="card-body">
                <table>
                    <?php foreach ($mhs as $row ) :?>
                    <?php if ($row->status=="Selesai") {
                        $phpdate = strtotime( $row->tgl_selesai );
                        $phpdate = date( 'H:i', $phpdate );
                        $status="<span class='text-success'>".tgl_indo($row->tgl_selesai)." (".$phpdate." WIB)</span>";
                    }else {
                        $status="<span class='text-danger'>Belum mengumpulkan</span>";
                    }
                    if ($row->id_user==NULL) {
                        $button="tambah_nilai"; //insert ke tabel nilai
                    }else {
                        $button="update_nilai"; //update tabel nilai
                    }
                    ?>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$row->nama?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?=$row->username?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$row->kelas?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Selesai</td>
                        <td>:</td>
                        <td><?=$status?></td>
                    </tr>
                    <tr>
                        <td rowspan="3">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-primary btn-sm mt-4" data-toggle="modal"
                                data-target="#<?=$button?>">Ubah Nilai</button>

                            <!-- Modal -->
                            <div id="tambah_nilai" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Penilaian</h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?=base_url('home/tambah_nilai')?>" method="post">
                                                <table class="table table-borderless">
                                                    <tr>
                                                        <td>Nilai</td>
                                                        <td>
                                                            <input type="hidden" name="id_user" value="<?=$row->id?>">
                                                            <input type="number" name="nilai" id=""
                                                                placeholder="Masukkan Nilai" class="form-control"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Komentar</td>
                                                        <td>
                                                            <textarea name="komentar" id="" cols="30" rows="7"
                                                                class="form-control"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <input type="submit" class="btn btn-primary form-control"
                                                                value="Ubah Nilai">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="update_nilai" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Penilaian</h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?=base_url('home/update_nilai/'.$row->id)?>" method="post">
                                                <table class="table table-borderless">
                                                    <tr>
                                                        <td>Nilai</td>
                                                        <td>
                                                            <input type="number" name="nilai" id=""
                                                                value="<?=$row->nilai?>" placeholder="Masukkan Nilai"
                                                                class="form-control" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Komentar</td>
                                                        <td>
                                                            <textarea name="komentar" id="" cols="30" rows="7"
                                                                class="form-control"><?=$row->komentar?></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <input type="submit" class="btn btn-primary form-control"
                                                                value="Ubah Nilai">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Hasil Tugas
            </div>
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#suratmasuk">Surat Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#suratkeluar">Surat Keluar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#retensi1">Retensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#penyusutan">Penyusutan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#peminjaman">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#agenda">Buku Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#jdw_rapat">Rapat Pimpinan</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="suratmasuk">
                        <div class="table-responsive" style="padding-top:20px">
                            <h5 class="text-center" style="font-weight:bold; color:black">Surat Masuk</h5>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="font-weight:bold;">
                                        <td style="padding-right:22px">#</td>
                                        <td>No urut</td>
                                        <td>Dari</td>
                                        <td>Alamat</td>
                                        <td>No Surat</td>
                                        <td>Jumlah Lampiran</td>
                                        <td>Tanggal Surat</td>
                                        <td>Perihal</td>
                                        <td>Tanggal Simpan</td>
                                        <td>Kategori</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=0;
                                    foreach ($surat_masuk as $row) : ?>
                                    <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse"
                                        data-parent="#accordion1" href="#collapse_suratmasuk<?=$i?>">
                                        <td class="expand-button"></td>
                                        <td><?php echo $row->no_urut; ?></td>
                                        <td><?php echo $row->dari; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td><?php echo $row->no_surat; ?></td>
                                        <td><?php echo $row->lampiran; ?></td>
                                        <td><?php echo $row->tanggal_surat; ?></td>
                                        <td><?php echo $row->perihal; ?></td>
                                        <td><?php echo $row->tanggal_simpan; ?></td>
                                        <td><?php echo $row->kategori; ?></td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="10">
                                            <div id="collapse_suratmasuk<?=$i?>" class="collapse in p-3">
                                                <b>Isi Ringkasan</b><br>
                                                <?php echo $row->isi_ringkasan;?>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="suratkeluar">
                        <div class="table-responsive" style="padding-top:20px">
                            <h5 class="text-center" style="font-weight:bold; color:black">Surat Keluar</h5>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="font-weight:bold;">
                                        <td style="padding-right:22px">#</td>
                                        <td>No urut</td>
                                        <td>Kepada</td>
                                        <td>Alamat</td>
                                        <td>No Surat</td>
                                        <td>Lampiran</td>
                                        <td>Tanggal Surat</td>
                                        <td>Perihal</td>
                                        <td>Tanggal Simpan</td>
                                        <td>Kategori</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=0;
                                     foreach ($surat_keluar as $row) : ?>
                                    <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse"
                                        data-parent="#accordion1" href="#collapse_suratkeluar<?=$i?>">
                                        <td class="expand-button"></td>
                                        <td><?php echo $row->no_urut; ?></td>
                                        <td><?php echo $row->kepada; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td><?php echo $row->no_surat; ?></td>
                                        <td><?php echo $row->lampiran; ?></td>
                                        <td><?php echo $row->tanggal_surat; ?></td>
                                        <td><?php echo $row->perihal; ?></td>
                                        <td><?php echo $row->tanggal_simpan; ?></td>
                                        <td><?php echo $row->kategori; ?></td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="10">
                                            <div id="collapse_suratkeluar<?=$i?>" class="collapse in p-3">
                                                <b>Isi Ringkasan</b><br>
                                                <?php echo $row->isi_ringkasan;?>

                                            </div>
                                        </td>
                                    </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="retensi1">
                        <div class="table-responsive" style="padding-top:20px">
                            <h5 class="text-center" style="font-weight:bold; color:black">Jadwal Retensi</h5>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="font-weight:bold">
                                        <td>No urut</td>
                                        <td>Surat</td>
                                        <td>Tanggal Mulai</td>
                                        <td>Tanggal Berakhir</td>
                                        <td>Selisih Peminjaman</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($retensi as $dt) : ?>
                                    <tr>
                                        <td><?php echo $row->no_urut; ?></td>
                                        <td><?php echo $row->surat; ?></td>
                                        <td><?php echo $row->tanggal_mulai; ?></td>
                                        <td><?php echo $row->tanggal_berakhir; ?></td>
                                        <td><?php $date = date_diff(date_create($row->tanggal_mulai), date_create($row->tanggal_berakhir)); echo  $date->format('%R%a Hari') ?>
                                        </td>

                                    </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="penyusutan">
                        <div class="table-responsive" style="padding-top:20px">
                            <h5 class="text-center" style="font-weight:bold; color:black">Penyusutan</h5>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="font-weight:bold">
                                        <td>No urut</td>
                                        <td>Surat</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($penyusutan as $dt) : ?>
                                    <tr>
                                        <td><?php echo $row->no_urut; ?></td>
                                        <td><?php echo $row->surat; ?></td>
                                    </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="peminjaman">
                        <div class="table-responsive" style="padding-top:20px">
                            <h5 class="text-center" style="font-weight:bold; color:black">Peminjaman</h5>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="font-weight:bold;">
                                        <td style="padding-right:22px">#</td>
                                        <td>No Urut</td>
                                        <td>No Surat</td>
                                        <td>Nama Peminjam</td>
                                        <td>Tanggal Pinjam</td>
                                        <td>Tanggal Kembali</td>
                                        <td>Selisih Peminjaman</td>
                                        <td>Dokumen Dipinjam</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($surat_pinjam as $row) : ?>
                                    <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse"
                                        data-parent="#accordion1" href="#collapse_suratpinjam">
                                        <td class="expand-button"></td>
                                        <td><?php echo $row->no_urut; ?></td>
                                        <td><?php echo $row->nomor_peminjam; ?></td>
                                        <td><?php echo $row->nama_peminjam; ?></td>
                                        <td><?php echo $row->tanggal_pinjam; ?></td>
                                        <td><?php echo $row->tanggal_kembali; ?></td>
                                        <td><?php $date = date_diff(date_create($row->tanggal_pinjam), date_create($row->tanggal_kembali));
                            echo  $date->format('%R%a Hari') ?></td>
                                        <td><?php echo $row->dokumen_dipinjam; ?></td>
                                        <td><?= $row->status; ?></td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="10">
                                            <div id="collapse_suratpinjam" class="collapse in p-3">
                                                <b>Isi Ringkasan</b><br>

                                            </div>
                                        </td>
                                    </tr>

                                    <?php  endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="agenda">
                        <div class="table-responsive" style="padding-top:20px">
                            <h5 class="text-center" style="font-weight:bold; color:black">Buku Agenda</h5>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="font-weight:bold;">
                                        <td style="padding-right:22px">#</td>
                                        <td width="2">No</td>
                                        <td>Dari / Kepada</td>
                                        <td>Jenis Surat</td>
                                        <td>Tanggal Surat</td>
                                        <td>Sistem</td>
                                        <td>Kode Simpan</td>
                                        <td>Tanggal Simpan</td>
                                        <td>No Surat</td>
                                        <td>Lampiran File</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     $i = 1;
                                     foreach ($surat_masuk as $row) : ?>
                                    <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse"
                                        data-parent="#accordion1" href="#collapse_agenda<?=$i?>">
                                        <td class="expand-button"></td>
                                        <td><?= $i; ?></td>
                                        <td><?php echo $row->dari; ?></td>
                                        <td>Surat Masuk</td>
                                        <td><?php echo $row->tanggal_surat; ?></td>
                                        <td><?php echo $row->kategori; ?></td>
                                        <td><?php echo $row->kode_simpan; ?></td>
                                        <td><?php echo $row->tanggal_simpan; ?></td>
                                        <td><?php echo $row->no_surat; ?></td>
                                        <td><button type="button" id='bt_<?= $row->no_urut ?>'
                                                class="btn btn-sm btn-primary  mb-1" data-toggle="modal"
                                                onclick="showImage('<?= $row->no_urut ?>')"
                                                data-target="#modal_klasifikasi"
                                                value="<?= $row->berkas ?>">Preview</button>
                                            <a class=" btn btn-info text-white btn-sm"
                                                href=" <?= base_url('lampiran/' . $row->berkas)  ?>">Download</a>
                                            <div id="modal_klasifikasi" class="modal fade bd-example-modal-lg"
                                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview
                                                                Dokumen</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img src="" width="500" id='gambar_bk'>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="10">
                                            <div id="collapse_agenda<?=$i?>" class="collapse in p-3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <table class="table-sm table-borderless">
                                                            <tr>
                                                                <td>Guide Primer</td>
                                                                <td>:</td>
                                                                <td><?= $row->laci; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Guide Sekunder</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->Guide; ?></td>

                                                            </tr>
                                                            <tr>
                                                                <td>Guide Tersier</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->tersier; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Folder</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->Map; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Berkas Nomor</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->nomor_berkas; ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <b>Isi Ringkasan</b> <br>
                                                        <?php echo $row->isi_ringkasan; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php $i++;endforeach; ?>
                                    <?php
                                     foreach ($surat_keluar as $row) : ?>
                                    <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse"
                                        data-parent="#accordion1" href="#collapse_agenda<?=$i?>">
                                        <td class="expand-button"></td>
                                        <td><?= $i; ?></td>
                                        <td><?php echo $row->kepada; ?></td>
                                        <td>Surat Keluar</td>
                                        <td><?php echo $row->tanggal_surat; ?></td>
                                        <td><?php echo $row->kategori; ?></td>
                                        <td><?php echo $row->kode_simpan; ?></td>
                                        <td><?php echo $row->tanggal_simpan; ?></td>
                                        <td><?php echo $row->no_surat; ?></td>
                                        <td><button type="button" id='bt_<?= $row->no_urut ?>'
                                                class="btn btn-sm btn-primary  mb-1" data-toggle="modal"
                                                onclick="showImage('<?= $row->no_urut ?>')"
                                                data-target="#modal_klasifikasi"
                                                value="<?= $row->berkas ?>">Preview</button>
                                            <a class=" btn btn-info text-white btn-sm"
                                                href=" <?= base_url('lampiran/' . $row->berkas)  ?>">Download</a>
                                            <div id="modal_klasifikasi" class="modal fade bd-example-modal-lg"
                                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Preview
                                                                Dokumen</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img src="" width="500" id='gambar_bk'>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="10">
                                            <div id="collapse_agenda<?=$i?>" class="collapse in p-3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <table class="table-sm table-borderless">
                                                            <tr>
                                                                <td>Guide Primer</td>
                                                                <td>:</td>
                                                                <td><?= $row->laci; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Guide Sekunder</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->Guide; ?></td>

                                                            </tr>
                                                            <tr>
                                                                <td>Guide Tersier</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->tersier; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Folder</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->Map; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Berkas Nomor</td>
                                                                <td>:</td>
                                                                <td>
                                                                <td><?= $row->nomor_berkas; ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <b>Isi Ringkasan</b> <br>
                                                        <?php echo $row->isi_ringkasan; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php  $i++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="jdw_rapat"><br>
                        <h5 class="text-center" style="font-weight:bold; color:black">Jadwal Rapat Pimpinan</h5>
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <td style="padding-left:22px">#</td>
                                    <td>No</td>
                                    <td>Tanggal</td>
                                    <td>Pukul</td>
                                    <td>Kegiatan</td>
                                    <td>Tempat</td>
                                    <td>Keterangan</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            $numb = 1;
                            foreach ($surat_rapat as $dt) : ?>
                                    <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse"
                                        data-parent="#accordion1" href="#collapse_rapat<?=$numb?>">
                                        <td class="expand-button"></td>
                                        <td><?php echo $numb; ?></td>
                                        <td><?php echo tgl_indo($dt->tgl_rapat); ?></td>
                                        <td><?php echo $dt->waktu_rapat; ?></td>
                                        <td><?php echo $dt->perihal; ?></td>
                                        <td><?php echo $dt->tempat_rapat; ?></td>
                                        <td><?php echo $dt->isi_ringkasan; ?></td>

                                    </tr>
                                    <tr style="background-color:aquablue" class="collapse"
                                        id="collapse_rapat<?=$numb?>">
                                        <td colspan="7">
                                            <table class="table table-borderless table-sm">
                                                <tr>
                                                    <td>No. Surat</td>
                                                    <td>:</td>
                                                    <td><?php echo $dt->no_surat; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Dari</td>
                                                    <td>:</td>
                                                    <td><?php echo $dt->dari; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td><?php echo $dt->alamat; ?>
                                                    </td>
                                                <tr>
                                                    <td>Lampiran</td>
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
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
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
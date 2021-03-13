<div class="container-fluid">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">ARSIP BUKU AGENDA</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height:auto;width:100%" src=" <?= base_url('files/img/' . $instansi['logo']); ?>" alt="">
                    </div>
                    <div class="col-8 mt-3 mb-4">
                        <h5 class="text-left"><?= $instansi['header_1'] ?></h5>
                        <h5 class="text-left"><?= $instansi['header_2'] ?></h5>
                        <h5 class="text-left"><?= $instansi['header_3'] ?> </h5>
                        <h6 class="text-left"><?= $instansi['header_4'] ?> </h6>
                        <h6 class="text-left font-italic"><?= $instansi['header_5']  ?></h6>
                    </div>
                </div>
                <hr>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form action="<?= base_url('user/getCustomAgenda') ?>" method="POST">
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
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Cetak Buku Agenda</label>
                                    <input type="submit" class="btn btn-md btn-info form-control" value="Cetak">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered" id="buku_agenda" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td width="2">No</td>
                                <td>Dari / Kepada</td>
                                <td>Jenis Surat</td>
                                <td>Tanggal Surat</td>

                                <td>Tanggal Agenda</td>

                                <td>Preview File</td>
                                <td>Lampiran File</td>
                                <td>Edit Klasifikasi</td>
                                <!-- <td>Edit Lokasi</td> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($surat_masuk as $dt) : ?>
                                <tr data-child-ringkasan='<?= htmlspecialchars($dt["isi_ringkasan"]) ?>' data-child-nama='<?php echo $dt['nama']; ?>' data-child-kategori='<?= $dt["kategori"] ?>' data-child-nomor='<?= $dt["no_surat"] ?>' data-child-kode='<?= $dt["kode_simpan"] ?>' data-child-primer='<?= $dt["laci"] ?>' data-child-sekunder='<?= $dt["Guide"] ?>' data-child-tersier='<?= $dt["tersier"] ?>' data-child-folder='<?= $dt["Map"] ?>' data-child-berkas='<?= $dt["nomor_berkas"] ?>'>
                                    <td class="detailed"><i class="fas fa-arrow-alt-circle-down"></i></td>
                                    <td><?= $i; ?></td>
                                    <td><?php echo $dt['dari']; ?></td>
                                    <!-- <td><?php echo $dt['no_surat']; ?></td> -->
                                    <td>Surat Masuk</td>
                                    <td><?php echo $dt['tanggal_surat']; ?></td>

                                    <td><?php echo $dt['tanggal_simpan']; ?></td>
                                    <td><button type="button" id='bt_<?= $dt["no_urut"] ?>' class="btn btn-sm  btn-info form-control " data-toggle="modal" onclick="showImage('<?= $dt['no_urut'] ?>')" data-target="#modal_klasifikasi" value="<?= $dt["berkas"] ?>">Preview</button></td>
                                    <td><a download class=" btn btn-info text-white btn-sm" href=" <?= base_url('lampiran/' . $dt["berkas"])  ?>">Download</a></td>

                                    <td><a href=" <?= base_url('user/edit_klasisfikasi_sm/' . $dt["no_urut"]) ?>" class=" btn btn-info text-white btn-sm">Klasifikasi</a></td>
                                    <!-- <td><a href=" <?= base_url('user/edit_lokasi/' . $dt["no_urut"]) ?>" class=" btn btn-info text-white btn-sm">Edit </a></td> -->
                                </tr>
                            <?php
                                $i++;
                            endforeach; ?>

                            <?php

                            foreach ($surat_keluar as $dt) : ?>
                                <tr data-child-ringkasan='<?= htmlspecialchars($dt["isi_ringkasan"]) ?>' data-child-nama='<?php echo $dt['nama']; ?>' data-child-kategori='<?= $dt["kategori"] ?>' data-child-nomor='<?= $dt["no_surat"] ?>' data-child-kode='<?= $dt["kode_simpan"] ?>' data-child-primer='<?= $dt["laci"] ?>' data-child-sekunder='<?= $dt["Guide"] ?>' data-child-tersier='<?= $dt["tersier"] ?>' data-child-folder='<?= $dt["Map"] ?>' data-child-berkas='<?= $dt["nomor_berkas"] ?>'>
                                    <td class="detailed"><i class="fas fa-arrow-alt-circle-down"></i></td>
                                    <td><?= $i; ?></td>
                                    <td><?php echo $dt['kepada']; ?></td>
                                    <!-- <td><?php echo $dt['no_surat']; ?></td> -->
                                    <td>Surat Keluar</td>
                                    <td><?php echo $dt['tanggal_surat']; ?></td>

                                    <td><?php echo $dt['tanggal_simpan']; ?></td>
                                    <td><button type="button" id='bt_<?= $dt["no_urut"] ?>' class="btn btn-sm btn-info form-control " data-toggle="modal" onclick="showImage('<?= $dt['no_urut'] ?>')" data-target="#modal_klasifikasi" value="<?= $dt["berkas"] ?>">Preview</button></td>
                                    <td><a download class=" btn btn-info text-white btn-sm" href=" <?= base_url('lampiran/' . $dt["berkas"]) ?>">Download</a></td>

                                    <td><a href=" <?= base_url('user/edit_klasisfikasi_sk/' . $dt["no_urut"]) ?>" class=" btn btn-info text-white btn-sm">Klasifikasi</a></td>
                                    <!-- <td><a href=" <?= base_url('user/edit_lokasi_sk/' . $dt["no_urut"]) ?>" class=" btn btn-info text-white btn-sm">Edit</a></td> -->
                                </tr>
                            <?php
                                $i++;
                            endforeach; ?>


                        </tbody>
                    </table>
                    <div id="modal_klasifikasi" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Preview Dokumen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="" width="500" id='gambar_bk'>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
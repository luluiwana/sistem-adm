<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        Perbarui Keterangan Detail dari Klasifikasi Surat
    </div>

    <?php

    if ($val['kategori'] == 'Abjad') {
    ?>
        <form action="<?= base_url('home/upd_klasifikasi_sm/' . $value); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Laci</label>
                <input type="text" name="h1" value="<?= $val['kode_1'] ?>" placeholder="" class="col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Guide</label>
                <input type="text" name="h2" value="<?= $val['kode_2'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Folder</label>
                <input type="text" name="h3" value="<?= $val['kode_3'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Caption</label>
                <input type="text" name="h4" value="<?= $val['kode_4'] ?>" placeholder="   " class=" col-sm-10 form-control"></div>
            <input type="hidden" name="hide" value=<?= $value ?>>
            <button class="btn btn-info" type="submit">SIMPAN </button>
        </form>
    <?php
    } elseif ($val['kategori'] == 'Subject') {
    ?>
        <form action="<?= base_url('home/upd_klasifikasi_sm/' . $value); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Masalah Utama</label>
                <input type="text" name="h1" value="<?= $val['kode_1'] ?>" placeholder="" class="col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Sub Masalah</label>
                <input type="text" name="h2" value="<?= $val['kode_2'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Sub Sub Masalah</label>
                <input type="text" name="h3" value="<?= $val['kode_3'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kode</label>
                <input type="text" name="h4" value="<?= $val['kode_4'] ?>" placeholder="   " class=" col-sm-10 form-control"></div>
            <input type="hidden" name="hide" value=<?= $value ?>>
            <button class="btn btn-info" type="submit">SIMPAN </button>
        </form>
    <?php
    } elseif ($val['kategori'] == 'Kronologi') {
    ?>
        <form action="<?= base_url('home/upd_klasifikasi_sm/' . $value); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Laci</label>
                <input type="text" name="h1" value="<?= $val['kode_1'] ?>" placeholder="" class="col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Guide</label>
                <input type="text" name="h2" value="<?= $val['kode_2'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Folder</label>
                <input type="text" name="h3" value="<?= $val['kode_3'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Caption</label>
                <input type="text" name="h4" value="<?= $val['kode_4'] ?>" placeholder="   " class=" col-sm-10 form-control"></div>
            <input type="hidden" name="hide" value=<?= $value ?>>
            <button class="btn btn-info" type="submit">SIMPAN </button>
        </form>
    <?php
    } elseif ($val['kategori'] == 'Wilayah') {
    ?>
        <form action="<?= base_url('home/upd_klasifikasi_sm/' . $value); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Laci</label>
                <input type="text" name="h1" value="<?= $val['kode_1'] ?>" placeholder="" class="col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Guide</label>
                <input type="text" name="h2" value="<?= $val['kode_2'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Folder</label>
                <input type="text" name="h3" value="<?= $val['kode_3'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Indeks</label>
                <input type="text" name="h5" value="<?= $val['kode_5'] ?>" placeholder="   " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kode</label>
                <input type="text" name="h4" value="<?= $val['kode_4'] ?>" placeholder="   " class=" col-sm-10 form-control"></div>
            <input type="hidden" name="hide" value=<?= $value ?>>
            <input type="hidden" name="hide" value=<?= $value ?>>
            <button class="btn btn-info" type="submit">SIMPAN </button>
        </form>
    <?php
    } elseif ($val['kategori'] == 'Nomor') {
    ?>
        <form action="<?= base_url('home/upd_klasifikasi_sm/' . $value); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                <input type="text" name="h1" value="<?= $val['kode_1'] ?>" placeholder="" class="col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">indeks Nama</label>
                <input type="text" name="h2" value="<?= $val['kode_2'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nomor</label>
                <input type="text" name="h3" value="<?= $val['kode_3'] ?>" placeholder=" " class=" col-sm-10 form-control"></div>
            <input type="hidden" name="hide" value=<?= $value ?>>
            <button class="btn btn-info" type="submit">SIMPAN </button>
        </form>
    <?php
    }
    ?>

</div>


</div>
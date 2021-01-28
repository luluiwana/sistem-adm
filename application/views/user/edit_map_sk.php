<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        Perbarui Keterangan Detail dari Letak Surat
    </div>

    <form action="<?= base_url('user/ubah_lokasi_sk/' . $value); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Guide Primer</label>
            <input type="text" name="h1" value="<?= $val['laci'] ?>" placeholder="Masukan Kode Guide Primer" class="col-sm-10 form-control"></div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Guide Sekunder</label>
            <input type="text" name="h3" value="<?= $val['Guide'] ?>" placeholder=" Keterangan Kode Guide Sekunder" class=" col-sm-10 form-control"></div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Guide Tersier</label>
            <input type="text" name="h5" value="<?= $val['tersier'] ?>" placeholder=" Keterangan Kode Guide Tersier" class=" col-sm-10 form-control"></div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Folder</label>
            <input type="text" name="h2" value="<?= $val['Map'] ?>" placeholder=" Keterangan Kode Folder" class=" col-sm-10 form-control"></div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan No. Berkas</label>
            <input type="text" name="h4" value="<?= $val['nomor_berkas'] ?>" placeholder=" Keterangan Kode No. Berkas" class=" col-sm-10 form-control"></div>

        <input type="hidden" name="hide" value=<?= $value ?>>

        <button class="btn btn-info" type="submit">SIMPAN </button>
    </form>
</div>
</div>
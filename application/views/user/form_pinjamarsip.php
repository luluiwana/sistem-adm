<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		Masukkan Keterangan Peminjaman Arsip Surat
	</div>

	<form method="post" action="<?php echo base_url('user/proses_tambahpinjamdata'); ?>">

		<div class="form-group">
			<label for="exampleFormControlInput1">Surat yang Dipinjam</label>
			<select name="selek" id='pinjam_surat' class="form-control">
				<option value="">Pilih Dibawah ini ...</option>
				<?php foreach ($datakategoripinjam as $key) : ?>
					<option id="<?= $key->no_urut  ?>" value="<?php echo $key->perihal . "$" . $key->tanggal_surat . "$" . $key->alamat . "$" . $key->dari . "$" . $key->no_surat  ?>"><?php echo '(Surat Masuk) [No. Surat ' . $key->no_surat . ".]   Perihal : " . $key->perihal  ?></option>

				<?php endforeach ?>
				<?php foreach ($datakategoripinjam_2 as $key) : ?>
					<option id="k.<?= $key->no_urut ?>" value="<?php echo $key->perihal . "$" . $key->tanggal_surat . "$" . $key->alamat . "$" . $key->kepada . "$" . $key->no_surat  ?>"><?php echo '(Surat Keluar) [No. Surat ' . $key->no_surat . ".]   Perihal : " . $key->perihal  ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<input type="hidden" name="id_kategori" value="">
		<div class="form-group">
			<label for="exampleFormControlInput1">Nomor Surat</label>
			<input required type="text" id='#nomor_surat' readonly value="" class="form-control" placeholder="Nomor surat" name="nomor_peminjam">
		</div>


		<input required type="hidden" readonly class="form-control" placeholder="Dari / Kepada" name="owner">
		<input required type="hidden" readonly class="form-control" placeholder="Tangga Surat" name="tanggal_awal">
		<input required type="hidden" readonly class="form-control" placeholder="Tangga Surat" name="alamat">


		<div class="form-group">
			<label for="exampleFormControlInput1">Tanggal Pinjam</label>
			<input required type="date" class="form-control" placeholder="masukan tanggal pinjam" name="tanggal_pinjam">
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">Kondisi </label>
			<select name="nip" class="form-control">
				<option value="">Pilih Dibawah ini ...</option>
				<option value="Bagus">Bagus</option>
				<option value="Sedang">Sedang</option>
				<option value="Kurang">Kurang</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Nama Peminjam</label>
			<input required type="text" class="form-control" placeholder="masukan nama peminjam" name="nama_peminjam">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Unit Kerja</label>
			<select name="unit_kerja_2" id="unit_kerja" class="form-control">
				<option value="">Pilih Dibawah ini ... </option>
				<?php foreach ($unit as $key) : ?>
					<option value="<?= $key['unit'] ?>"><?= $key['unit'] ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Nama Petugas</label>
			<input required type="text" class="form-control" placeholder="masukan nama petugas" name="unit_kerja">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Batas Waktu</label>
			<input required type="date" class="form-control" placeholder="masukan tanggal kembali" name="tanggal_kembali">
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1"></label>
			<button type="submit" class="btn btn-primary">Cetak dan Simpan</button>
		</div>
	</form>

</div>
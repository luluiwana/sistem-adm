<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		form pinjam arsip
	</div>

	<form method="post" action="<?php echo base_url('home/proses_tambahpinjamdata'); ?>">

		<div class="form-group">
			<label for="exampleFormControlInput1">Nomor Surat</label>
			<input required type="text" class="form-control" placeholder="masukan nomor surat" name="nomor_peminjam">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Tanggal Pinjam</label>
			<input required type="date" class="form-control" placeholder="masukan tanggal pinjam" name="tanggal_pinjam">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Surat yang Dipinjam</label>
			<select name="id_kategori" class="form-control">
				<option value="">Pilih Dibawah ini ...</option>
				<?php foreach ($datakategoripinjam as $key) : ?>
					<option value="<?php echo $key->perihal  ?>"><?php echo $key->no_urut . ".   " . $key->perihal  ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">NIP</label>
			<input required type="text" class="form-control" placeholder="masukan nip" name="nip">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Nama Peminjam</label>
			<input required type="text" class="form-control" placeholder="masukan nama peminjam" name="nama_peminjam">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Unit Kerja</label>
			<input required type="text" class="form-control" placeholder="masukan unit kerja" name="unit_kerja">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Tanggal Kembali</label>
			<input required type="date" class="form-control" placeholder="masukan tanggal kembali" name="tanggal_kembali">
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1"></label>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</div>
	</form>

</div>
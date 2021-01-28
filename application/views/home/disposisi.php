<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		Masukkan Keterangan Detail dari Disposisi Surat
	</div>

	<form method="post" action="<?= base_url("home/export_disposisi") ?>">


		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="exampleFormControlInput1">Indeks Surat</label>
				<input type="text" class="form-control" placeholder="Masukan Nomor Indeks" name="nomor_peminjam">
			</div>
			<div class="form-group col-md-4">
				<label> Pilih Status Surat </label>
				<select class="form-control" name="kategori" id="disposisi_category">
					<option> Pilih Dibawah ini </option>
					<option value="Rahasia"> Rahasia </option>
					<option value="Penting"> Penting </option>
					<option value="Biasa"> Biasa </option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="exampleFormControlInput1">Kode Kategori</label>
				<input type="number" class="form-control" id="code_disposisi" placeholder="" name="">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="exampleFormControlInput1">Kode Surat</label>
				<input type="text" class="form-control" placeholder="Masukkan Nomor Kode Surat" name="kode_surat">
			</div>
			<div class="form-group col-md-6">
				<label for="exampleFormControlInput1">Tanggal Penyelesaian</label>
				<input type="date" class="form-control" placeholder="masukan tanggal" name="tanggal_penyelesaian">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="exampleFormControlInput1">Asal</label>
				<input type="text" class="form-control" placeholder="Masukan Nama Pengirim Surat" name="nama_peminjam">
			</div>
			<div class="form-group col-md-6">
				<label for="exampleFormControlInput1">Tanggal / No</label>
				<input type="text" class="form-control" placeholder="Masukkano Nomor / Tanggal" name="no-tgl">
			</div>
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">Isi Ringkasan</label>
			<textarea type="text" class="form-control" wrap="soft" height="100px" placeholder="Masukkan Ringkasan Surat" name="ringkasan"></textarea>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Instruksi / Informasi </label>
			<textarea type="text" class="form-control" wrap="soft" height="100px" placeholder="Masukkan Keterangan Instruksi" name="instruksi"></textarea>
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">Diteruskan Kepada</label>
			<input type="text" class="form-control" placeholder="Masukkan Nama Tujuan" name="diteruskan">
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="exampleFormControlInput1">Sesudah digunakan harap segera kembali kepada</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama " name="kepada">
			</div>
			<div class="form-group col-md-4">
				<label for="exampleFormControlInput1">Harap Dikembalikan pada Tanggal</label>
				<input type="text" class="form-control" placeholder="Masukkan Tanggal Kembali" name="tgl_kembali">
			</div>
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">Tanggal Surat</label>
			<input type="date" class="form-control" placeholder="Masukkan Tanggal Terima" name="tgl-surat">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Nomor Surat</label>
			<input type="text" class="form-control" placeholder="Masukkan Nomor Surat" name="nomor">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Tanggal Terima</label>
			<input type="date" class="form-control" placeholder="Masukkan Tanggal Terima" name="tgl-terima">
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">No. Diposisi</label>
			<input type="number" class="form-control" placeholder="Masukkan Nomor Disposisi" name="no_disposisi">
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">Dari</label>
			<input type="text" class="form-control" placeholder="Masukkan Dari" name="dari">
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">Pilih Hal (Code)</label>

			<select class="form-control" name="code">
				<option value="">Pilih Dibawah ini ... </option>
				<option value="1">1. Mohon mendapat saran/masukan</option>
				<option value="2">2. Mohon Pentunjuk</option>
				<option value="3">3. Mohon Keputusan</option>
				<option value="4">4. Untuk Perhatian</option>
				<option value="5">5. Siapkan Konsep</option>
				<option value="6">6. Siapkan Laporan</option>
				<option value="7">7. Sudah diselesaikan</option>
				<option value="8">8. Edarkan / Kirimkan </option>
				<option value="9">9. Gandakan</option>
				<option value="10">10. Simpan / Arsip</option>
				<option value="11">11. Tunggu</option>
				<option value="12">12. Mohon Paraf</option>
				<option value="13">13. Diajukan</option>
				<option value="14">14. Mohon Tanda Tangan</option>
			</select>
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1"></label>
			<button type="submit" class="btn btn-primary">PRINT DISPOSISI</button>
			<a href="<?= base_url('home/update_datamasuk/' . $id) ?>" class="btn btn-info text-white">KEMBALI</a>
		</div>
	</form>
</div>
<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		form jadwal retensi
	</div>

	<form method="post" action="<?php echo base_url('home/proses_tambahdataretensi'); ?>">
		<div class="form-group">
			<label for="exampleFormControlInput1">Surat yang Dipinjam</label>
			<select name="surat" class="form-control">
				<option value="">Pilih Dibawah ini ...</option>
				<?php foreach ($penyusutan as $kunci) : ?>
					<option value="<?php echo $kunci->perihal ?>"> <?php echo $kunci->no_urut . ". " . $kunci->perihal ?> </option>
				<?php endforeach ?>
			</select>

		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Tanggal Mulai</label>
			<input type="date" class="form-control" placeholder="masukan tanggal mulai" name="tanggal_mulai">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Tanggal Berakhir</label>
			<input type="date" class="form-control" placeholder="masukan tanggal berakhir" name="tanggal_berakhir">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1"></label>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</div>
	</form>
</div>

<!--<?php //echo base_url('home/dashboard') 
	?>-->


<!-- modal untuk tambah data -->
<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		Form Jadwal Retensi
	</div>

	<form method="post" action="<?php echo base_url('home/proses_tambahdataretensi'); ?>">
		<div class="form-group">
			<label for="exampleFormControlInput1">Surat yang Dipinjam</label>
			<select name="surat" class="form-control">
				<option value="">Pilih Dibawah ini ...</option>
				<?php foreach ($datakategoripinjam as $key) : ?>
					<option id="<?= $key->no_urut  ?>" value="<?php echo $key->perihal ?>"><?php echo '(Surat Masuk) [No. Surat ' . $key->no_surat . ".]   Perihal : " . $key->perihal  ?></option>
				<?php endforeach ?>
				<?php foreach ($datakategoripinjam_2 as $key) : ?>
					<option id="k.<?= $key->no_urut ?>" value="<?php echo $key->perihal ?>"><?php echo '(Surat Keluar) [No. Surat ' . $key->no_surat . ".]   Perihal : " . $key->perihal  ?></option>
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
</div>

<!--<?php //echo base_url('home/dashboard') 
	?>-->


<!-- modal untuk tambah data -->
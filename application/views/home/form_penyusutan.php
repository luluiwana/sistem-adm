<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		form penyusutan
	</div>

	<form method="post" action="<?php echo base_url('home/proses_tambahpenyusutan'); ?>">
		<div class="form-group">
			<label for="exampleFormControlInput1">penyusutan</label>
			<select name="surat" class="form-control" required>
				<option value="">Pilih Dibawah ini ...</option>
				<?php foreach ($penyusutan as $kunci) : ?>
					<option value="<?php echo $kunci->perihal ?>"> <?php echo $kunci->perihal ?> </option>
				<?php endforeach ?>
			</select>
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
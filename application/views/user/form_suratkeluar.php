<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		Masukkan Keterangan Detail dari Form Surat Keluar
	</div>



	<?php
	if ($this->session->flashdata('error_msg')) {
	?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<?php
		echo $this->session->flashdata('error_msg');
		echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span></button></div>';
	}
		?>


		<?php echo form_open_multipart('user/proses_tambahdatakeluar'); ?>

		<form method="post" action="">
			<div class="form-group">
				<label for="exampleFormControlInput1">Kepada</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Perusahaan yang dituju" name="kepada" required>
			</div>

			<div class="form-row">
				<div class="form-group col-md-8">
					<label for="exampleFormControlInput1">Alamat</label>
					<input type="text" class="form-control" placeholder="Masukkan Keterangan Alamat" name="alamat" required>
				</div>
				<div class="form-group col-md-4">
					<label for="indeks">Indeks</label>
					<input type="text" class="form-control" name="indeks" placeholder="Masukkan Keterangan Indeks" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="exampleFormControlInput1">No Surat</label>
					<input type="text" class="form-control" placeholder="Masukan Nomor Surat" name="no_surat" required>
				</div>

			</div>
			<div class="form-row">
				<div class="form-group col-md-8">
					<label for="exampleFormControlInput1">Tanggal Surat</label>
					<input type="date" class="form-control" placeholder="Masukan tanggal surat" name="tanggal_surat" required>
				</div>
				<div class="form-group col-md-4">
					<label for="exampleFormControlInput1">Jumlah Lampiran</label>
					<input type="number" class="form-control" placeholder="Masukan Jumlah Lampiran" name="lampiran" required>
				</div>

			</div>
			<div class="form-row">
				<div class="form-group col-md-8">
					<label for="exampleFormControlInput1">Upload Dokumen</label>
					<input type="file" accept="image/*" capture="camera" class="form-control" id="file_dokumen" name="file_dokumen" required>
				</div>
				<img id="img-hidden" src="<?= base_url('files/img/logo-um.png') ?>" class='d-none'>
				<div class="form-group col-md-4">
					<label for="exampleFormControlInput1">Scan Dokumen</label>
					<button type="button" class="btn btn-primary form-control mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Scan Dokumen</button>
				</div>

			</div>

			<div class="form-group">
				<label for="exampleFormControlInput1">Perihal</label>
				<input type="text" class="form-control" placeholder="Masukan perihal" name="perihal" required>
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Tanggal Simpan</label>
				<input type="date" class="form-control" placeholder="Masukan tanggal simpan" name="tanggal_simpan" required>
			</div>

			<div class="form-row">
				<div class="form-group col-md-8">
					<label for="exampleFormControlInput1">Kode Simpan</label>
					<input type="text" class="form-control" placeholder="Masukan Kode simpan" name="kode_simpan">
				</div>

				<div class="form-group col-md-4">
					<label for="exampleFormControlInput1">Keterangan Klasifikasi</label>
					<button type="button" class="btn btn-primary form-control mb-3" data-toggle="modal" data-target="#modal_klasifikasi">Masukkan Keterangan Klasifikasi</button>
				</div>

			</div>
			<!-- <div class="form-group">
			<label for="exampleFormControlInput1">Isi Ringkasan</label>
			<input type="text" class="form-control" placeholder="masukan isi ringkasan" name="isi_ringkasan">
		</div> -->

			<div class="form-group">
				<label for="exampleFormControlInput1">Isi Ringkasan</label>
				<textarea id="summernote" name="editordata"></textarea>
			</div>
			<div style="margin:0">
				<input type="hidden" name="surat_rapat" value="0" checked />
				<label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					<input type="checkbox" name="surat_rapat" id="surat_rapat" value="1" />
					<span>Surat ini merupakan surat rapat</span>
				</label>
				<div id="collapseOne" aria-expanded="false" class="collapse">
					<div class="form-row">
						<div class="form-group col-md-5">
							<label for="exampleFormControlInput1">Tanggal Rapat</label>
							<input type="date" class="form-control" placeholder="Masukan Tanggal Rapat" name="tgl_rapat" value="<?php print(date("Y-m-d")); ?>">
						</div>
						<div class="form-group col-md-7">
							<label for="exampleFormControlInput1">Waktu Rapat</label>
							<input type="text" class="form-control" placeholder="Masukan Waktu (contoh : 07.00 - 09.00)" name="waktu_rapat">
						</div>
						<div class="form-group col-md-12">
							<label for="exampleFormControlInput1">Lokasi</label>
							<input type="text" class="form-control" placeholder="Masukan Lokasi Rapat" name="tempat_rapat">
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="form-group col-md-4">
				<label for="exampleFormControlInput1">Lampiran</label>
				<input type="file" class="form-control" placeholder="Masukan lampiran" name="userfile" size="20">
			</div> -->
			<!-- <input type="file" accept="image/*" capture="camera" id="camera"> -->



			<div class="form-group">
				<label for="exampleFormControlInput1"></label>
				<button type="submit" class="btn btn-primary">Tambah</button>

			</div>

			<div id="modal_klasifikasi" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Masukkan Keterangan Detail Klasifikasi Surat</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-row">
								<div class="form-group col-md-8">
									<label for="exampleFormControlInput1">Sistem Simpan</label>
									<select class="form-control" id="kategori" name="kategori">
										<option value="">Pilih Sistem Simpan</option>
										<option value="Abjad">Abjad</option>
										<option value="Subject">Subject</option>
										<option value="Kronologi">Kronologi</option>
										<option value="Wilayah">Wilayah</option>
										<option value="Nomor">Nomor</option>
									</select>
								</div>
								<div class="form-group col-md-4 d-none" id="subjek">
									<label for="exampleFormControlInput1">Pokok Soal</label>
									<select name="pokok_soal" id="unit_kerja" class="form-control">
										<option value="">Pilih Dibawah ini ... </option>
										<?php foreach ($masalah as $key) : ?>
											<option value="<?= $key['masalah'] ?>"><?= $key['masalah'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="d-none" id='mod'>
								<div class="form-group">
									<label for="input_1">Data 1</label>
									<input type="text" class="form-control" placeholder="" name="input_1" required>
								</div>
								<div class="form-group">
									<label for="input_2"> Data 2</label>
									<input type="text" class="form-control" placeholder="" name="input_2" required>
								</div>
								<div class="form-group">
									<label for="input_3">Data 3</label>
									<input type="text" class="form-control" placeholder="" name="input_3" required>
								</div>
								<div class="form-group d-none" id='data_5'>
									<label for="input_5">Data 3</label>
									<input type="text" class="form-control" placeholder="" name="input_5">
								</div>
								<div class="form-group" id='data_4'>
									<label for="input_4">Data 4</label>
									<input type="text" class="form-control" placeholder="" name="input_4">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
						</div>
					</div>
				</div>
			</div>

		</form>


		<?php echo form_close(); ?>

		<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Scan Document</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="container row mx-auto">
							<button class=" btn btn-sm btn-info col-3 mx-auto" id="webcamon">Start </button>
							<button class=" btn btn-sm btn-info col-3 mx-auto" onclick="webcam.flip();webcam.start()" id="webcamflip">Flip </button>
							<button class=" btn btn-sm btn-danger col-3 mx-auto" onclick="webcam.stop()">Stop </button>
						</div>
						<div class="container mt-3 mx-auto">
							<video id="webcam" autoplay playsinline style="width:100%;height:auto"></video>
							<button class="btn btn-md btn-block btn-info mb-2 " id="snap"><i class="fa fa-camera"></i> Take Picture</button>
							<h5 class="mx-auto" id="judul" class="d-none">Hasil Scan : </h5>
							<canvas id="canvas" class="d-none">
							</canvas>
							<div class="flash"></div>
							<a download class="btn text-white btn-md mt-2 btn-block btn-info" id="download-photo"><i class="fa fa-download"></i> Download Picture</a>
						</div>
					</div>
					<div class="modal-footer">

						<button type="button" id="close" onclick="webcam.stop()" class="btn btn-secondary" data-dismiss="modal">Close</button>

					</div>
				</div>
			</div>
		</div>
		</div>

		<!--<?php //echo base_url('user/dashboard') 
			?>-->


		<!-- modal untuk tambah data -->
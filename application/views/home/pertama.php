<div class="container-fluid">
	<div class="jumbotron">
		<img src="<?php echo base_url('files/img/'); ?>logo-um.png" alt="logo um" class="float-left " width="250px">
		<h1 class="display-4"> Selamat Datang di SIEREN </h1>
		<p class="lead"> SIEREN adalah aplikasi untuk mempermudah kerjamu dalam mengarsipkan surat.</p>
		<hr class="my-4">
		<p>SIEREN merpakan website yang dibuat dengan menggunakan bahasa pemrograman PHP dan Framework Codeigniter 3.</p>
		<a class="btn btn-primary btn-lg" href="<?php echo base_url('auth/login') ?>" role="button"> Masuk </a>
		<a class=" btn btn-primary btn-lg" href=" <?= base_url('auth/force_download') ?>">Buku Panduan</a></td>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#scanner">Panduan Penggunaan</button>
	</div>
	<div class="col-12">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary text-center">IDENTITAS PENGEMBANG</h6>
			</div>
			<div class="card-body">
				<div class="row">
					<!-- <div class="col-3">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height:auto;width:100%" src=" <?= base_url('files/img/madziatul.png'); ?>" alt="">
					</div>
					<div class="col-8 mt-4">
						<h5 class="text-left">Nama &nbsp;&nbsp;&nbsp;: Dr. Madziatul Churiyah, S.Pd, M.M</h5>
						<h5 class="text-left">NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 197602182005012001</h5>
						<h5 class="text-left">E-Mail &nbsp;&nbsp;: madziatul.churiyah.fe@um.ac.id</h5>
						<h5 class="text-left">Jabatan : Koordinator Program Studi S1 Pendidikan Administrasi Perkantoran FE</h5>
					</div> -->
					<div class="col-3">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="height:auto;width:100%" src=" <?= base_url('files/img/NAILATUL.png'); ?>" alt="">
					</div>
					<div class="col-8 mt-4">
						<h5 class="text-left">Nama &nbsp;&nbsp;&nbsp;: Nailatul Muhajiroh</h5>
						<h5 class="text-left">NIM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 170412617544</h5>
						<h5 class="text-left">E-Mail &nbsp;&nbsp;: nailatulmuhajiroh659@gmail.com</h5>
						<h5 class="text-left">Jurusan : Manajemen</h5>
						<h5 class="text-left">Prodi &nbsp;&nbsp;&nbsp; : S1 Pendidikan Administrasi Perkantoran</h5>
						<h5 class="text-left">CP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 082331239023</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="scanner" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Video Tata Cara Penggunaan Sieren</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/NUFL0m3bPLM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
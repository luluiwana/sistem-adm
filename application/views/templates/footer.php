<!-- Footer -->
<footer class="sticky-footer bg-white" style="height: 30px;padding:0px">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('files/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('files/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('files/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('files/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('files/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('files/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('files/'); ?>js/demo/datatables-demo.js"></script>
<script src="<?= base_url('files/js/summernote/') ?>summernote.min.js"></script>
<!-- <script src="<?= base_url('files/js/') ?>capture.js"></script> -->
<script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
<script src="<?= base_url('files/js/') ?>camera.js"></script>


</body>

<script>
  window.base_url = <?php echo json_encode(base_url()); ?>;
  console.log(base_url);
</script>

<script>
  function showImage(value) {

    link_gambar = $('#bt_' + value).val();
    console.log(link_gambar);
    url = '<?= base_url("lampiran/") ?>' + link_gambar;
    src = $('#gambar_bk').attr('src', url);

  }


  $('#btn1').click(function() {
    $('#ipladder').attr('action', 'location1.php');
    $('#ipladder').submit();
  });

  $('#btn2').click(function() {
    $('#ipladder').attr('action', 'location2.php');
    $('#ipladder').submit();
  });
</script>

<script>
  $('#summernote').summernote({
    // placeholder: 'Masukkan Isi',
    tabsize: 2,
    height: 100,
  });

  $("#summernote").summernote("code", "<?php if (!empty($text['isi_ringkasan'])) echo $text['isi_ringkasan']; ?>");
</script>

<script>
  $('#myModal').on('hide.bs.modal', function(e) {
    // do something...
    webcam.stop();
  })
</script>

<script>
  let data = $('#kategori').val();

  $(document).ready(function() {
    if (data !== '') {
      $('#mod').removeClass('d-none');
    } else if (data === '') {
      $('#mod').addClass('d-none');
    }
    if (data === "Subject") {
      $('#subjek').removeClass('d-none');
      $('#subjek').show();
      $("label[for='input_1']").text("Masalah Utama");
      $("label[for='input_2']").text("Sub Masalah");
      $("label[for='input_3']").text("Sub-sub Masalah");
      $("label[for='input_4']").text("Kode");
      $('#data_4').removeClass('d-none');
      $('#data_5').addClass('d-none');
    } else if (data === "Nomor") {
      $('#subjek').hide();
      $("label[for='input_1']").text("Tanggal");
      $("label[for='input_2']").text("Indeks Nama");
      $("label[for='input_3']").text("Nomor");
      $('#data_4').addClass('d-none');
      $('#data_5').addClass('d-none');
    } else if (data === "Abjad") {
      $("label[for='input_1']").text("Guide Primer");
      $("label[for='input_2']").text("Guide Sekunder");
      $("label[for='input_3']").text("Guide Tersier");
      $("label[for='input_4']").text("Indeks");
      $('#subjek').hide();
      $('#data_4').removeClass('d-none');
      $('#data_5').addClass('d-none');
    } else if (data === "Kronologi") {
      $("label[for='input_1']").text("Guide Primer");
      $("label[for='input_2']").text("Guide Sekunder");
      $("label[for='input_3']").text("Guide Tersier");
      $("label[for='input_4']").text("Indeks");
      $('#subjek').hide();
      $('#data_4').removeClass('d-none');
      $('#data_5').addClass('d-none');
    } else if (data === "Wilayah") {
      $('#subjek').hide();
      $('#data_4').removeClass('d-none');
      $('#data_5').removeClass('d-none');
      $("label[for='input_1']").text("Guide Primer");
      $("label[for='input_2']").text("Guide Sekunder");
      $("label[for='input_3']").text("Guide Tersier");
      $("label[for='input_4']").text("Indeks");
      $("label[for='input_5']").text("Kode");
    }
  });

  $('#kategori').on('change', function() {
    let data = $('#kategori').val();
    $('#mod').removeClass('d-none');
    console.log(data);
    if ($(this).val() === "Subject") {
      $('#subjek').removeClass('d-none');
      $('#subjek').show();
      $("label[for='input_1']").text("Masalah Utama");
      $("label[for='input_2']").text("Sub Masalah");
      $("label[for='input_3']").text("Sub-sub Masalah");
      $("label[for='input_4']").text("Kode");
      $('#data_4').removeClass('d-none');
      $('#data_5').addClass('d-none');
    } else if ($(this).val() === "Nomor") {
      $('#subjek').hide();
      $("label[for='input_1']").text("Tanggal");
      $("label[for='input_2']").text("Indeks Nama");
      $("label[for='input_3']").text("Nomor");
      $('#data_4').addClass('d-none');
      $('#data_5').addClass('d-none');
    } else if ($(this).val() === "Abjad") {
      $("label[for='input_1']").text("Guide Primer");
      $("label[for='input_2']").text("Guide Sekunder");
      $("label[for='input_3']").text("Guide Tersier");
      $("label[for='input_4']").text("Indeks");
      $('#subjek').hide();
      $('#data_4').removeClass('d-none');
      $('#data_5').addClass('d-none');
    } else if (data === "Kronologi") {
      $("label[for='input_1']").text("Guide Primer");
      $("label[for='input_2']").text("Guide Sekunder");
      $("label[for='input_3']").text("Guide Tersier");
      $("label[for='input_4']").text("Indeks");
      $('#subjek').hide();
      $('#data_4').removeClass('d-none');
    } else if (data === "Wilayah") {
      $('#subjek').hide();
      $('#data_4').removeClass('d-none');
      $('#data_5').removeClass('d-none');
      $("label[for='input_1']").text("Guide Primer");
      $("label[for='input_2']").text("Guide Sekunder");
      $("label[for='input_3']").text("Guide Tersier");
      $("label[for='input_4']").text("Indeks");
      $("label[for='input_5']").text("Kode");
    }
  });
</script>

<script>
  $('#disposisi_category').on('change', function() {
    let data = $('#disposisi_category').val();

    if (data === "Rahasia") {
      $("#code_disposisi").attr("name", "rahasia");
      $("#code_disposisi").attr("placeholder", "Masukkan Kode Kategori Rahasia");

    } else if (data === "Biasa") {
      $("#code_disposisi").attr("name", "biasa");
      $("#code_disposisi").attr("placeholder", "Masukkan Kode Kategori Biasa");

    } else if (data === "Penting") {
      $("#code_disposisi").attr("name", "penting");
      $("#code_disposisi").attr("placeholder", "Masukkan Kode Kategori Penting");

    }

  });
</script>

<script>
  function load_data() {
    $('#hasil').addClass('d-none');
  }

  function load_data(query) {
    $.ajax({
      url: "<?php echo base_url(); ?>home/fetch",
      method: "POST",
      data: {
        query: query
      },
      success: function(data) {
        $('#hasil').removeClass('d-none');
        $('#b1').html(data);
      }
    })
  }

  function load_data_1(query) {
    $.ajax({
      url: "<?php echo base_url(); ?>home/fetch_1",
      method: "POST",
      data: {
        query: query
      },
      success: function(data) {
        $('#hasil').removeClass('d-none');
        $('#b2').html(data);
      }
    })
  }


  function load_data_2(query) {
    $.ajax({
      url: "<?php echo base_url(); ?>home/fetch_3",
      method: "POST",
      data: {
        query: query
      },
      success: function(data) {
        $('#hasil').removeClass('d-none');
        $('#b3').html(data);
      }
    })
  }

  function load_data_3(query) {
    $.ajax({
      url: "<?php echo base_url(); ?>home/fetch_4",
      method: "POST",
      data: {
        query: query
      },
      success: function(data) {
        $('#hasil').removeClass('d-none');
        $('#b4').html(data);
      }
    })
  }

  $('#search_text').keyup(function() {
    console.log('berubah');
    var search = $(this).val();
    if (search != '') {
      load_data(search);
      load_data_1(search);
      load_data_2(search);
      load_data_3(search);
    } else {
      load_data();
    }
  });
</script>


<script>
  var table_sm = $('#surat_masuk').DataTable();
  table_sm.search("<?php if (!empty($this->session->flashdata('cari'))) echo $this->session->flashdata('cari'); ?>");

  var table_sr = $('#jadwal_rapat').DataTable();
  table_sr.search("<?php if (!empty($this->session->flashdata('cari'))) echo $this->session->flashdata('cari'); ?>");

  var table_sk = $('#surat_keluar').DataTable();
  table_sk.search("<?php if (!empty($this->session->flashdata('cari'))) echo $this->session->flashdata('cari'); ?>");

  var table_retensi = $('#retensi').DataTable();
  table_retensi.search("<?php if (!empty($this->session->flashdata('cari'))) echo $this->session->flashdata('cari'); ?>");

  var table_pinjam = $('#pinjam').DataTable();
  table_pinjam.search("<?php if (!empty($this->session->flashdata('cari'))) echo $this->session->flashdata('cari'); ?>");
 
  var table_user = $('#user_table').DataTable();
  table_user.search("<?php if (!empty($this->session->flashdata('cari'))) echo $this->session->flashdata('cari'); ?>");
</script>


</html>
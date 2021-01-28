<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-6 col-md-5">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4"> Silahkan Daftarkan Akun Anda </h1>
                </div>
                <form method="post" action="<?php echo base_url('auth/proses_daftar'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="masukan username" name="username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="masukan password" name="password">
                  </div>
                  <button class="btn btn-primary btn-user btn-block"> Daftar </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
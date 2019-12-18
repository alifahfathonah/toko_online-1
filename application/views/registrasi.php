<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
              </div>
              <form method="POST" action="<?= base_url('registrasi/index'); ?>" class="user">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Anda">
                  <small class="form-text text-danger ml-2">
                    <p><?= form_error('nama'); ?></p>
                  </small>
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" placeholder="Username Anda">
                  <small class="form-text text-danger ml-2">
                    <p><?= form_error('username'); ?></p>
                  </small>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password_1" class="form-control form-control-user" placeholder="Password">
                    <small class="form-text text-danger ml-2">
                      <p><?= form_error('password_1'); ?></p>
                    </small>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password_2" class="form-control form-control-user" placeholder="Konfirmasi Password">
                    <small class="form-text text-danger ml-2">
                      <p><?= form_error('password_2'); ?></p>
                    </small>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Akun</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/login'); ?>">Sudah memiliki akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
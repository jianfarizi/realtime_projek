<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
    /* Mengatur lebar form */
    .register-box {
      width: 50%;
      /* Ubah sesuai kebutuhan */
      margin: auto;
    }

    /* Menyelaraskan input ke dalam satu baris */
    .input-group {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Memastikan tombol registrasi tidak memanjang */
    .btn-login {
      width: 100%;
    }
  </style>
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a class="h1">REGISTER</a>
      </div>
      <div class="card-body">
        <form action="{{ route('register.store') }}" method="POST">
          @csrf
          <label for="name" class="name"> Name</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name" required>
          </div>
          <label for="email" class="email">Email</label>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
          </div>
          <label for="address" class="address">Address</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="address" name="address" required>
          </div>

          <!-- Baris untuk No Handphone dan Role -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="nohandphone" class="nohandphone">No Handphone</label>
              <input type="text" class="form-control" placeholder="NO. Handphone" name="no_handphone" required>
            </div>
            <div class="col-md-6">
              <label for="type" class="type">Role</label>
              <select name="type" id="type" class="form-control" required>
                <option value="" disabled selected>Select Role</option>
                <option value="1">User</option>
                <option value="2">Admin</option>
              </select>
            </div>
          </div>

          <label for="password" class="password">Password</label>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="password" name="password" required>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-login text-uppercase fw-bold">Register</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>
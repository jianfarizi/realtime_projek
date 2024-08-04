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
          <input type="text" class="form-control" placeholder="Full name" name="name">
        </div>
        <label for="email" class="email">Email</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
          </div>
        </div>
         <label for="address" class="address">Address</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="address" name="address">
          <div class="input-group-append"> 
          </div>
        </div>
        <label for="nohandphone" class="nohandphone">No Handphone</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="NO. Handphone" name="no_handphone">
          <div class="input-group-append">
          </div>
        </div>
        <label for="password" class="password">Password</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-login text-uppercase fw-bold">Register</button>
          </div>
          <!-- /.col -->
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

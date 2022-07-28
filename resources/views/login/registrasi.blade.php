<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/skydash/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="/skydash/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/skydash/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/skydash/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/skydash/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0 bg-primary" style="background: linear-gradient(to right, #0f0c29, #302b63, #24243e);">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow">
              {{-- <div class="brand-logo">
                <img src="/skydash/template/images/logo.svg" alt="logo">
                <h4 class="m-0 font-weight-bold text-primary">Registrasi</h4>
              </div> --}}
              <h4>Registration</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-1" action="/registrasi" method="POST">
                @csrf
                
                  <input type="hidden" class="form-control form-control-lg" id="exampleInputUsername6" placeholder="Name" name="role" value="3">
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-2 font-weight-light">
                  Already have an account? <a href="/login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/skydash/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/skydash/template/js/off-canvas.js"></script>
  <script src="/skydash/template/js/hoverable-collapse.js"></script>
  <script src="/skydash/template/js/template.js"></script>
  <script src="/skydash/template/js/settings.js"></script>
  <script src="/skydash/template/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>

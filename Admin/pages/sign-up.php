<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    require_once('../Layout/head.php');
    require_once('../php/connection.php');
    require_once('../php/imageFunction.php');    
  ?>
  <title>
    Sign Up Admin
  </title>
</head>

<body class="g-sidenav-show bg-gray-100" style="overflow:hidden;">
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-10" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-3 mt-3">Welcome Admin!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center mt-4 p-0">
              <h5>Please Insert Valid Data</h5>
            </div>
            <div class="card-body">
              <form role="form text-left" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Name" aria-describedby="email-addon">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="mb-3">
                  <label for="">Profile Image </label>
                  <input type="file" accept="image/*" name="profile_image">
                </div>
                <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <input type="submit" name="sign_up" class="btn bg-gradient-dark w-100 my-4 mb-2" value="Sign up">
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="sign-in.php" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    require_once('../php/validateSignUp.php');
  ?>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
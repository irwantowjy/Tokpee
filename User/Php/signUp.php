<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up Page</title>

    <link rel="stylesheet" href="../../assets/css/resource/font.css" />

    <!-- Custom Style-->
    <link rel="stylesheet" href="../../User/Style/sign-up.css" />
    <link rel="stylesheet" href="../../assets/font-awesome/css/all.min.css" />
  </head>

  <body>
    <?php
      require_once('ValidateSignUp.php')
    ?>
    <div class="container">
      <div class="panel">
        <div class="row">
          <div class="col liquid">
            <h1>Tok<a>Pee</a></h1>
          </div>
          <div class="col login">
            <form method="post">
              <div class="titles">
                <h2>Sign Up Now</h2>
              </div>

              <div class="form-group" id="icon">
                <input
                  type="tel"
                  placeholder="Username"
                  class="form-input"
                  name="username"
                  required
                />
                <div class="input-icon">
                  <i class="fas fa-user"></i>
                </div>
              </div>

              <div class="form-group" id="icon">
                <input
                  type="tel"
                  name="email"
                  placeholder="Email"
                  class="form-input"
                  required
                />
                <div class="input-icon">
                  <i class="fas fa-envelope"></i>
                </div>
              </div>

              <div class="form-group" id="icon">
                <input
                  type="tel"
                  name="noHP"
                  placeholder="No. Telepon"
                  class="form-input"
                  required
                />
                <div class="input-icon">
                  <i class="fas fa-phone"></i>
                </div>
              </div>

              <div
                class="form-group"
                id="show_hide_password"
                style="
                  margin-top: 10px;
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                "
              >
                <input
                  type="password"
                  placeholder="Password"
                  name="password"
                  class="form-input"
                />
                <button
                  type="button"
                  style="
                    text-decoration: none;
                    border: none;
                    background-color: transparent;
                  "
                  class="input-icon"
                >
                  <i class="fa fa-eye-slash"></i>
                </button>
              </div>
              <div class="box-agreement">
                <input
                  type="checkbox"
                  id="agreement"
                  name="agreement"
                  value="true"
                  style="margin-left: 0"
                  required
                />
                <label for="agreement">
                  <div>
                    I confirm that I have read, consent and agree to TokPee's
                    <blue><a href="#">Terms and Conditions</a></blue> and
                    <blue><a href="#">Privacy Policy</a></blue
                    >.
                  </div>
                </label>
              </div>
              <input type="submit" name="submit" class="btn btn-login" value="Sign Up">
              <p class='error'>
                <?php
                  if(isset($_GET['messageCode'])) {
                    $code = $_GET['messageCode'];
                    if ($code == '1') {
                      echo "Account with that email already exist.";
                    } else if ($code =='2') {
                      echo "Something went wrong";
                    }
                  }
                ?>
              </p>
              <p style="font-size: 10pt">
                Already have an account? <a href="login.php">Login</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="../../assets/js/resource/jquery.min.js"></script>
    <script src="../../assets/js/kit.fontawesome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#show_hide_password button").on("click", function (event) {
          event.preventDefault();
          if ($("#show_hide_password input").attr("type") == "text") {
            $("#show_hide_password input").attr("type", "password");
            $("#show_hide_password i").addClass("fa-eye-slash");
            $("#show_hide_password i").removeClass("fa-eye");
          } else if (
            $("#show_hide_password input").attr("type") == "password"
          ) {
            $("#show_hide_password input").attr("type", "text");
            $("#show_hide_password i").removeClass("fa-eye-slash");
            $("#show_hide_password i").addClass("fa-eye");
          }
        });
      });
      
    </script>
  </body>
</html>

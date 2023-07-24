<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../../assets/css/resource/font.css">
    <link rel="stylesheet" href="../../assets/css/resource/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/resource/owl.theme.min.css">
    <link rel="stylesheet" href="../../assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../../User/Style/login.css">
</head>
<body>
    <?php
        require_once('validateLogin.php');
    ?>
    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h1>Tok<a>Pee</a></h1>
                    <div class="owl-carousel owl-theme">
                        <img src="../../assets/img/undraw_web_shopping_dd4l.svg" alt="" class="login_img"></img>
                        <img src="../../assets/img/undraw_add_to_cart_vkjp.svg" alt="" class="login_img"></img>
                        <img src="../../assets/img/undraw_payments_21w6.svg" alt="" class="login_img"></img>
                        <img src="../../assets/img/undraw_deliveries_131a.svg" alt="" class="login_img"></img>
                        <img src="../../assets/img/undraw_order_confirmed_aaw7.svg" alt="" class="login_img"></img>
                    </div>
                </div>

                <div class="col login">
                    <button type="button" class="btn btn-signup"><a href="signUp.php"
                            style="text-decoration: none;color: #fff;border: none;">Sign Up</a>
                    </button>

                    <!-- form -->

                    <form method="post">
                        <div class="titles">
                            <h2>Ready to Login</h2>
                        </div>
                        <div class="input">
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email" class="form-input">
                                <div class="input-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group" id="show_hide_password">
                                <input type="password" placeholder="Password" name="password" class="form-input">
                                <button style="text-decoration: none; border: none; background-color: transparent;" class="input-icon">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </div>
                            <a href="#" class="forget__password">Forget Password?</a>
                            <p class='error'>
                                <?php
                                if(isset($_GET['messageCode'])) {
                                    $code = $_GET['messageCode'];
                                    if ($code == '1') {
                                    echo "Password or Username not found";
                                    }
                                }
                                ?>
                            </p>
                        </div>
                        <div class="submit">
                            <input type="submit" name="submit" class="btn btn-login" style="text-decoration: none; color: white;" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/resource/jquery.min.js"></script>
    <script src="../../assets/js/resource/owl.carousel.min.js"></script>
    <script src="../../assets/js/resourse/kit.fontawesome.js"></script>
    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });

            $("#show_hide_password button").on('click', function(event) { event.preventDefault();
                if($('#show_hide_password input').attr("type") == "text"){
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass( "fa-eye-slash" );
                    $('#show_hide_password i').removeClass( "fa-eye" );
                } else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password i').addClass( "fa-eye" );
                }
            });
        });
    </script>
</body>

</html>
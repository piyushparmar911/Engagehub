<?php
require "../includes/config.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= urlOf('assets/img/favicon.ico') ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= urlOf('assets/bootstrap/css/bootstrap.min.css') ?>">
    <!-- icon css-->
    <link rel="stylesheet" href="<?= urlOf('assets/elagent-icon/style.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/animation/animate.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/style-main.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/responsive.css') ?>">
    <title>Sign-In | Engage Hub</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="<?= urlOf('assets/img/spinner_logo.png') ?>" alt="">
                    <br><br>
                    <h4><span>Engage</span>Hub</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_left signin_left">
                    <h2>We are design changers do what matters.</h2>
                    <img class="position-absolute top" src="<?= urlOf('assets/img/signup/top_ornamate.png') ?>" alt="top">
                    <img class="position-absolute bottom" src="<?= urlOf('assets/img/signup/bottom_ornamate.png') ?>" alt="bottom">
                    <img class="position-absolute middle" src="<?= urlOf('assets/img/signup/door.png') ?>" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <img style="height: 24%; width:24%;" src="<?= urlOf('assets/img/logo5.png') ?>" alt="logo">
                            <h3 style="color: black;">Sign in to EngageHub platform</h3>
                            <p style="color: black;">Don’t have an account yet? <a style="color: black;" href="<?= urlOf('pages/signUp.php') ?>">Sign up here</a></p>
                        </div>
                        <form class="row login_form">
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Your Username</div>
                                <input type="text" class="form-control" id="name" placeholder="Enter Username">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Password</div>
                                <div class="password">
                                    <input id="password" name="password" type="password" class="form-control text-dark" placeholder="Enter Password" autocomplete="off">
                                    <!-- <a href="#" class="forget_btn">Forgotten password?</a> -->
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="button" class="btn action_btn thm_btn" onclick="userLogin()">Sign in</button>
                                <a href="signUp.php" class="btn action_btn thm_btn">Sign up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= urlOf('assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= urlOf('assets/js/pre-loader.js') ?>"> </script>
    <script src="<?= urlOf('assets/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= urlOf('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= urlOf('assets/js/parallaxie.js') ?>"></script>
    <script src="<?= urlOf('assets/js/TweenMax.min.js') ?>"></script>
    <script src="<?= urlOf('assets/wow/wow.min.js') ?>"></script>
    <script src="<?= urlOf('../../unpkg.com/ionicons%405.4.0/dist/ionicons.js') ?>"></script>
    <script src="<?= urlOf('assets/js/main.js') ?>"></script>

</body>

<script>
    function userLogin() {
        let data = {
            name: $('#name').val(),
            password: $('#password').val(),
        }

        $.ajax({
            url: "../api/userLoginProc.php",
            data: data,
            method: "POST",
            success: function(response) {
                console.log(response.status);
                if (response.status == true) {
                    window.location.href = "../index.php";
                } else {
                    alert("Invalid Creds!")
                }
            }

        })
    }
</script>

</html>
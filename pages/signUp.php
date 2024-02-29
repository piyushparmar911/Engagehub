<?php
require "../includes/config.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?=  urlOf('assets/img/favicon.ico')?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= urlOf('assets/bootstrap/css/bootstrap.min.css') ?>">
    <!-- icon css-->
    <link rel="stylesheet" href="<?= urlOf('assets/elagent-icon/style.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/animation/animate.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/style-main.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/responsive.css') ?>">
    <title>Sign-Up | Engage Hub</title>
</head>

<body>
    
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img class="h-50 w-75" src="<?= urlOf('assets/img/logo5.png') ?>" alt="">
                    <br>
                    <h4><span>Engage</span>Hub</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div>
        <section class="signup_area signup_area_height">
            <div class="row ml-0 mr-0">
                <div class="sign_left signup_left mb-3">
                    <h2>We are design changers do what matters.</h2>
                    <img class="position-absolute top" src="<?= urlOf('assets/img/signup/top_ornamate.png') ?>" alt="top">
                    <img class="position-absolute bottom" src="<?= urlOf('assets/img/signup/bottom_ornamate.png') ?>" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="<?= urlOf('assets/img/signup/man_image.png') ?>" alt="bottom">
                </div>
                <div class="sign_right signup_right pb-3">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                        <img style="height: 24%; width:24%;" src="<?= urlOf('assets/img/logo5.png') ?>" alt="logo">
                            <h3 style="color: black;">Create your Account</h3>
                            <p style="color: black;">Already have an account? <a style="color: black;" href="<?= urlOf('pages/signIn.php') ?>">Sign in</a></p>
                        </div>
                        
                        <form class="row login_form" enctype="multipart/form-data">
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Name</div>
                                <input type="text" class="form-control text-dark" name="name" id="name" autofocus placeholder="Enter Your Name Here" Required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Age</div>
                                <input type="text" class="form-control text-dark" name="age" id="age" Required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Your email</div>
                                <input type="email" name="email" class="form-control text-dark" id="email" placeholder="info@engagehub.com" Required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Password</div>
                                <input id="password" name="password" type="password" class="form-control text-dark" placeholder="Enter Your Password" autocomplete="off" Required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Gender</div>
                                <select class="form-control text-dark" id="gender">
                                    <option id="male">Male</option>
                                    <option id="female">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Country</div>
                                <input id="location" name="country" type="text" class="form-control text-dark" placeholder="Enter Country's Name" autocomplete="off" Required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Profile Photo</div>
                                <input id="image" type="file" class="form-control text-dark" Required>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="button" class="btn action_btn thm_btn" onclick="createAccount()">Create an account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div=>

<script>

    function createAccount(){
        var fileInput = document.getElementById('image');
        var file = fileInput.files[0];

        var formData= new FormData();
        formData.append('file', file);
        formData.append('name', $("#name").val());
        formData.append('gender', $("#gender").val());
        formData.append('email', $("#email").val());
        formData.append('password', $("#password").val());
        formData.append('age', $("#age").val());
        formData.append('country', $("#location").val());

        $.ajax({
            url: "../api/insertusers.php",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                console.log(response);
                window.location = '../index.php';
            }
        })
    }



</script>



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




</html>
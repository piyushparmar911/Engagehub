<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= urlof("assets/img/logo5.png") ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= urlOf('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/slick/slick-theme.css') ?>">
    <!-- icon css-->
    <link rel="stylesheet" href="<?= urlOf('assets/elagent-icon/style.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/niceselectpicker/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/animation/animate.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/style-main.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" >

    <title>Engage Hub</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img class="w-75" src="<?= urlOf('assets/img/logo5.png') ?>" alt="">
                    <br>
                    <h3><span>Engage</span>Hub</h3>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
            <div class="container">
                <a class="navbar-brand header_logo" style="margin-right:-3rem" href="index-2.html">
                    <img class="first_logo sticky_logo" style="height: 24%; width:24%;" src="<?= urlOf('assets/img/logo5.png') ?>" srcset="<?= urlOf("assets/img/logo-2x.png 2x")?>" alt="logo">
                    <img class="white_logo main_logo" style="height: 24%; width:24%;" src="<?= urlOf('assets/img/logo5.png') ?>" srcset="<?= urlOf("assets/img/logo-w2x.png 2x")?>" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto ">
                        <li class="nav-item dropdown submenu">
                            <a href="<?= urlOf('index.php') ?>" class="nav-link dropdown-toggle">Home</a>
                        </li>
                        <?php if(!isset($_SESSION['name']) || $_SESSION['name'] == ""){
                        ?>
                            
                        <?php
                        } else {
                        ?>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Forums
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                               data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="<?= urlOf('pages/discussForum.php') ?>" class="nav-link">Public Questions</a></li>
                                <li class="nav-item"><a href="<?= urlOf('pages/AskQuestion.php') ?>" class="nav-link">Ask Question</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li class="nav-item dropdown submenu">
                            <a href="<?= urlOf('pages/contact.php') ?>" class="nav-link dropdown-toggle">Contact</a>
                        </li>
                        <?php
                        if(!isset($_SESSION['name']) || $_SESSION['name'] == ""){
                        ?>
                            
                        <?php
                        } else {
                        ?>
                            <li class="nav-item dropdown submenu"><a href="<?= urlOf('pages/profile.php') ?>" class="nav-link dropdown-toggle">Profile</a></li>
                        <?php 
                        }
                        ?>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Events
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                               data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="<?= urlOf('pages/communityHall.php') ?>" class="nav-link">Community Halls</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Conference Hall</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Living Rooms</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">kitchen Area</a></li>
                            </ul>
                        </li>
                    </ul>                           
                    <div class="right-nav">
                    <?php
                                    if (!isset($_SESSION['name']) || $_SESSION['name'] == "") {
                                    ?>
                                        <a class="nav_btn" href="<?= urlOf('pages/signIn.php') ?>">Sign In</a>
                                    <?php
                                    } else {

                                    ?>
                                        <a class="nav_btn" href="<?= urlof('api/logout.php') ?>">Logout</a>
                                    <?php
                                    }
                    ?>
                        <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                            <label for="something" class="tab-btn tab-btns">
                                <ion-icon name="moon"></ion-icon>
                            </label>
                            <label for="something" class="tab-btn">
                                <ion-icon name="sunny"></ion-icon>
                            </label>
                            <label class=" ball" for="something"></label>
                            <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
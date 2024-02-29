<?php
require "../includes/config.php";

require pathOf('/includes/navbar.php');

?>
<section class="doc_banner_area single_breadcrumb">
    <ul class="list-unstyled banner_shap_img">
        <li><img src="<?=urlOf('assets/img/new/banner_shap1.png')?>" alt=""></li>
        <li><img src="<?=urlOf('assets/img/new/banner_shap4.png')?>" alt=""></li>
        <li><img src="<?=urlOf('assets/img/new/banner_shap3.png')?>" alt=""></li>
        <li><img src="<?=urlOf('assets/img/new/banner_shap2.png')?>" alt=""></li>
        <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="<?=urlOf('assets/img/new/plus1.png')?>" alt=""></li>
        <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="<?=urlOf('assets/img/new/plus2.png')?>" alt=""></li>
        
    <div class="container">
        <div class="doc_banner_content">
            <h2 class="text-white">Heyy <?= $_SESSION['name'] ?> !</h2>
            
        </div>
    </div>
</section>

<!--================Forum Content Area =================-->
<section class="forum-user-wrapper">
    <div class="container">
        <div class="row forum_main_inner">
            <div class="col-lg-3">
                <div class="author_option">
                    <div class="author_img">
                        <!-- <?php foreach($data as $userData) { ?>
                        <img class="img-fluid" src="../uploads/profilePhoto/<?= $userData['profilephoto']?>" id="image" alt="">
                        <?php } ?> -->
                    </div>
                    <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                <i class="icon_profile"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <i class="icon_documents"></i>Edit Profile
                            </a>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="icon_delete"></i> Delete Profile
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="forum_body_area">
                    <div class="forum_topic_list">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="profile_info">
                                    <div class="row p_info_item_inner">
                                        <div class="col-sm-4">
                                            <div class="p_info_item">
                                                <img src="<?=urlOf('assets/img/icon/p-icon-1.png')?>" alt="">
                                                <a href="#">
                                                    <h4>Forum Role</h4>
                                                </a>
                                                <a class="info_btn" href="#"><?= $_SESSION['type'] ?></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="p_info_item">
                                                <img src="<?=urlOf('assets/img/icon/p-icon-2.png')?>" alt="">
                                                <a href="#">
                                                    <h4>Topics Started</h4>
                                                </a>
                                                <a class="info_number" href="#">32</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="p_info_item">
                                                <img src="<?=urlOf('assets/img/icon/p-icon-3.png')?>" alt="">
                                                <a href="#">
                                                    <h4>Replies Created</h4>
                                                </a>
                                                <a class="info_number" href="#">76</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="navbar-nav info_list">
                                        <li><span>Name:</span><a href="#"><?= $_SESSION['name'] ?></a></li>
                                        <li><span>Age:</span><a href="#"><?= $_SESSION['age'] ?></a></li>
                                        <li><span>Gender:</span><a href="#"><?= $_SESSION['gender'] ?></a></li>
                                        <li><span>Email Address:</span><a href="#"><?= $_SESSION['email']?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2>Edit Profile Here !!</h2>
                                <div class="forum_l_inner">
                                    <div class="forum_head d-flex justify-content-between">
                                        <ul class="nav right">
                                    <div class="forum_body">
                                           <!-- userform -->
                                           <form action="../api/updateusers.php" method="POST" class="row login_form">
                                                <div class="col-lg-12 form-group">
                                                    <input type="hidden" class="form-control text-dark" id="id" name="id" value="<?= $_SESSION['id'] ?>">
                                                </div>    
                                                <div class="col-lg-12 form-group">
                                                    <div class="small_text text-white">Your Username</div>
                                                    <input type="text" class="form-control text-dark" id="name" name="username" placeholder="Enter Username">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <div class="small_text text-white">Your Age</div>
                                                    <input type="text" name="age" class="form-control text-dark" placeholder="enter age" id="age" Required>
                                                </div>                    
                                                <div class="col-lg-6 form-group">
                                                    <div class="small_text text-white">Your gender</div>
                                                    <input type="text" name="gender" placeholder="enter gender" class="form-control text-dark" id="gender" Required>
                                                </div>   
                                                <div class="col-lg-6 form-group">
                                                    <div class="small_text text-white">Your email</div>
                                                    <input type="email" name="email" class="form-control text-dark" id="email" placeholder="info@engagehub.com" Required>
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <div class="small_text text-white">Password</div>
                                                    <div class="password">
                                                        <input id="password" name="password" type="password" class="form-control text-dark" placeholder="Enter Password" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    <button type="submit" class="btn action_btn thm_btn">Update</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                
                                <h2>Delete Profile</h2>
                                <form action="../api/deleteusers.php" method="post">
                                    <div class="small_text text-white"><p>By clicking the below button your profile will be deleted</p></div>
                                    <div class="col-lg-12 form-group">
                                                    <input type="hidden" class="form-control text-dark" id="id" name="id" value="<?= $_SESSION['Id'] ?>">
                                    </div>
                                    <br>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn action_btn thm_btn">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

require pathOf('includes/footer.php');
require pathOf('includes/scripts.php');
require pathOf('includes/pageend.php');

?>
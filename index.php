<?php
require "./includes/config.php";
require pathOf('includes/navbar.php');
?>

<section class="doc_banner_area banner_creative1">
    <ul class="list-unstyled banner_shap_img">
        <li><img src="<?= urlof("assets/img/new/banner_shap1.png") ?>" alt=""></li>
        <li><img src="<?= urlof("assets/img/new/banner_shap4.png") ?>" alt=""></li>
        <li><img src="<?= urlof("assets/img/new/banner_shap3.png") ?>" alt=""></li>
        <li><img src="<?= urlof("assets/img/new/banner_shap2.png") ?>" alt=""></li>
        <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="<?= urlOf("assets/img/new/plus1.png") ?>" alt=""></li>
        <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="<?= urlOf("assets/img/new/plus2.png") ?>" alt=""></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="doc_banner_content">
            <h2 class="wow fadeInUp">EngageHub</h2>
            <p class="wow fadeInUp" data-wow-delay="0.2s">We Connect..</p>
            
        </div>
    </div>
</section>

<section class="recommended_topic_area">
    <div class="container">
        <div class="recommended_topic_inner">
            <img class="doc_shap_one" src="<?= urlOf("assets/img/new/shap.png") ?>" alt="">
            <div class="doc_round one" data-parallax='{"x": -80, "y": -100, "rotateY":0}'></div>
            <div class="doc_round two" data-parallax='{"x": -10, "y": 70, "rotateY":0}'></div>
            <div class="doc_title text-center">
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">Recommended Topics</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Loaded with awesome features like CommunityHall,
                    Discuss Forums,<br>& more!</p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?= urlOf("assets/img/new/smile.png")?>" alt="">
                        <a href="#">
                            <h3>User Profile</h3>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#"></a></li>
                            <li><a href="<?=  urlOf('assets/pages/profile.php')?>">Register your profile</a></li>
                            <li><a href="#">Letest update</a></li>
                            <li><a href="#">Connact to admin</a></li>
                            <li><a href="#">How do I reset my password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.3s">
                        <img src="<?= urlOf("assets/img/new/house.png") ?>" alt="">
                        <a href="#">
                            <h3>Community hall</h3>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#">Show community hall</a></li>
                            <li><a href="#">Book your community hall</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Rules</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?= urlOf("assets/img/new/doc.png") ?>" alt="">
                        <a href="#">
                            <h3>About engagehub</h3>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#"></a>History</li>
                            <li><a href="#">Historical event</a></li>
                            <li><a href="#">Community member</a></li>
                            <li><a href="#">Connact us</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="doc_testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="doc_testimonial_slider">
                    <div class="item">
                        <h3>Tinkety tonk old fruit victoria sponge squiffy bleeder twit the bee's knees loo
                            David, buggered haggle pear shaped bubble and squeak.”</h3>
                        <div class="name">
                            <h5>Penny Tool,</h5>
                            <span>Director of Sales and Success</span>
                        </div>
                        <a href="#" class="sign"><img src="<?= urlOf("assets/img/new/sign.png")?>" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Hendrerit laoreet incidunt molestie eum placeat, neque ridiculus? Maecenas
                            incididunt aperiam tempora cumque quos?”</h3>
                        <div class="name">
                            <h5>Penny Tool,</h5>
                            <span>Director of Sales and Success</span>
                        </div>
                        <a href="#" class="sign"><img src="<?= urlOf("assets/img/new/sign.png")?>" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Curabitur vitae dignissimos pulvinar eligendi ullamcorper, laoreet, accusantium
                            numquam habitant quaerat minim consequatur”</h3>
                        <div class="name">
                            <h5>Penny Tool,</h5>
                            <span>Director of Sales and Success</span>
                        </div>
                        <a href="#" class="sign"><img src="<?= urlOf("assets/img/new/sign.png") ?>" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Tinkety tonk old fruit victoria sponge squiffy bleeder twit the bee's knees loo
                            David, buggered haggle pear shaped bubble and squeak.”</h3>
                        <div class="name">
                            <h5>Penny Tool,</h5>
                            <span>Director of Sales and Success</span>
                        </div>
                        <a href="#" class="sign"><img src="<?= urlof("assets/img/new/sign.png") ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="doc_img_slider">
                    <div class="item">
                        <img class="dot" src="<?= urlof("assets/img/new/dot.png") ?>" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="<?= urlof("assets/img/new/feedback_img.jpg") ?>" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="<?= urlof("assets/img/new/dot.png") ?>" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="<?= urlof("assets/img/new/feedback_img_02.jpg") ?>" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="<?= urlof("assets/img/new/dot.png") ?>" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="<?= urlof("assets/img/new/feedback_img_03.jpg") ?>" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="<?= urlof("assets/img/new/dot.png") ?>" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="<?= urlof("assets/img/new/feedback_img_04.jpg") ?>" alt="">
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
<?php
require "../includes/config.php";
require pathOf('/includes/navbar.php');
?>
<!--================Forum Breadcrumb Area =================-->

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
            <h2 class="wow fadeInUp">Community Hall </h2>
            <p class="wow fadeInUp" data-wow-delay="0.2s">We Connect..</p>
            
        </div>
    </div>
</section>

<section class="page_breadcrumb">
    <div class="container custom_container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= urlOf('index.php') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Community Hall</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--================End Forum Breadcrumb Area =================-->

<section class="blog_top_post_area sec_pad bg_color">
    <div class="container">
        <div class="row blog_top_post flex-row-reverse shadow">
            <div class="col-lg-7 p_top_img">
                <img class="p_img" src="<?= urlOf('assets/img/communityhall.jpg')?>" alt="">
            </div>
            <div class="col-lg-5 p-0">
                <div class="b_top_post_content">
                    <div class="post_tag">
                        <h2 class="text-primary fs-4" href="#">Community hall</h2>
                    </div>
                    <a href="#">
                        <h3>Community centres, community centers, or community halls are public locations where members of a community tend to gather for group activities, social support, public information, and other purposes.</h3>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="doc_blog_grid_area_two">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp">
                    <img class="img-thumbnail" src="<?=urlOf('assets/img/confhall.jpg')?>" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                        <h3 class="text-primary">Conference hall</h3>
                        </div>
                        <a href="#">
                            <h4 class="b_title">In the heart of innovation, minds converge,Where ideas blossom, and futures emerge.</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                    <img class="img-thumbnail" src="<?=urlOf('assets/img/living.jpg')?>" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <h3 class="text-primary">Living area</h3>
                        </div>
                        <a href="#">
                            <h4 class="b_title">In the living space, memories are made,Where warmth and joy never fade.</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                    <img class="img-thumbnail" src="<?=urlOf('assets/img/kitchn.jpg')?>" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <h3 class="text-primary">kitchen area</h3>
                        </div>
                        <a href="#">
                            <h5 class="b_title">In the kitchen's hub, flavors unite,Where delicious moments take flight.</h5>
                        </a>
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
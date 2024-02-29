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
            <h2 class="wow fadeInUp">Ask Question</h2>
            <p class="wow fadeInUp" data-wow-delay="0.2s">We Connect..</p> 
        </div>
    </div>
</section>


<!--================End Forum Breadcrumb Area =================-->

<section class="contact_area sec_pad">
  <div class="container">
    <div class="contact_info">
      <div class="section_title text-left">
        <h2 class="h_title wow fadeInUp">Ask Your Queries</h2>
        <p>Let the Community Find You A Way.</p>
      </div>
      <form action="#" class="contact_form">
        <div class="row contact_fill">
          <div class="col-lg-6 form-group">
            <h6>Category</h6>
            <select class="form-control text-White" id="category">
                <option value="sports">Sports</option>
                <option value="healthcare">Health Care</option>
                <option value="Politics">Politics</option>
            </select>
          </div>
          <div class="col-lg-6 form-group">
            <h6>Title</h6>
            <input type="text" class="form-control" name="title" id="title" placeholder="info@engageHub.com" />
          </div>
          <div class="col-lg-12 form-group">
            <h6>Message</h6>
            <textarea class="form-control message" id="description" name="description" placeholder="Enter Your Message ..."></textarea>
          </div>
          <div class="col-lg-12 form-group">
            <button type="submit" class="btn action_btn thm_btn" onclick="askQuestion()">
            Ask Question
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<script>

function askQuestion(){

        var formData= new FormData();
        formData.append('title', $("#title").val());
        formData.append('category', $("#category").val());
        formData.append('description', $("#description").val());
    
        $.ajax({
            url: "../api/insertaskQuestion.php",
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



<?php

require pathOf('includes/footer.php');
require pathOf('includes/scripts.php');
require pathOf('includes/pageend.php');

?>
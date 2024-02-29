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
            <h2 class="wow fadeInUp">Contact Us</h2>
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
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--================End Forum Breadcrumb Area =================-->

<section class="contact_area sec_pad">
  <div class="container">
    <div class="contact_info">
      <div class="section_title text-left">
        <h2 class="h_title wow fadeInUp">Let’s start the conversation</h2>
        <p>Please email us, we’ll happy to assist you.</p>
      </div>
      <form action="#" class="contact_form">
        <div class="row contact_fill">
          <div class="col-lg-4 form-group">
            <h6>Full Name</h6>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
          </div>
          <div class="col-lg-4 form-group">
            <h6>Email</h6>
            <input type="email" class="form-control" name="email" id="email" placeholder="info@engageHub.com" />
          </div>
          <div class="col-lg-4 form-group">
            <h6>Phone Number</h6>
            <input type="tel" class="form-control" name="tel" id="phone" placeholder="+91" />
          </div>
          <div class="col-lg-12 form-group">
            <h6>Message</h6>
            <textarea class="form-control message" id="message" placeholder="Enter Your Message ..."></textarea>
          </div>
          <div class="col-lg-12 form-group">
            <button type="submit" class="btn action_btn thm_btn" onclick="sendMessage()">
              Send Message
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<script>

  function sendMessage(){
    let data = {
      name: $("#name").val(),
      email: $("#email").val(),
      phone: $("#phone").val(),
      message: $("#message").val(),
    }

    $.ajax({
      url: "../api/sendMessage.php",
      data: data,
      method: "POST",
      success: function(response){
        console.log(response);
        window.reload();
      }  
    })
  }

</script>



<?php

require pathOf('includes/footer.php');
require pathOf('includes/scripts.php');
require pathOf('includes/pageend.php');

?>
<?php
require "../includes/config.php";
require "../api/include.php";
require pathOf('/includes/navbar.php');

$sql = "SELECT askquestion.title, askquestion.description, askquestion.category, askquestion.userid, users.name AS `username` FROM askquestion INNER JOIN users ON users.Id = askquestion.userid ";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
            <h2 class="wow fadeInUp">Discuss Forums</h2>
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

<br>
<br>

                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle" id="myTable">
                            <thead class="text-dark fs-4 align-middle">
                                <tr>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">No.</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">User - Name</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Category</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Title</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Description</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($data); $i++) { ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"><?= $i + 1  ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i]['title'] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i]['description'] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i]['category'] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i]['username'] ?></h6>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>    
                    
                    

    
<?php

require pathOf('includes/footer.php');
require pathOf('includes/scripts.php');
require pathOf('includes/pageend.php');

?>
                    <script>let table = new DataTable('#myTable');</script>

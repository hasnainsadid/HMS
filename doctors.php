
  <?php 
  include("./doctor/includes/config.php");
  $result = $db->query("SELECT * FROM doc_dept_view");
   include("header.php"); 
   ?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(./assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Doctors</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            <?php while($row= $result->fetch_object()):?>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="./doctor/<?php echo $row->img?>" alt="doctor_image">
                </div>
                <div class="body">
                  <p class="text-xl mb-0"><?php echo $row->name?></p>
                  <span class="text-sm text-grey"><?php echo $row->department?></span>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
           </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div>  

  <div class="page-section banner-home bg-image" style="background-image: url(./assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="./assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="./assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="./assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <?php include("footer.php"); ?>
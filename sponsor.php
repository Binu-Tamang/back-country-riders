<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome,custom css,bootstrap css -->
  <?php include('inc/css.php') ?>


  <!-- favicon link -->
  <link rel="icon" type="assets/img/sm-logo.png" href="logo">
  <title>Back Country Riders | Sponsors</title>
</head>

<body>
  <div class="container-md bg-white ">
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Our Sponsors' ?>
    <?php include('inc/web-banner.php') ?>
    <!-- banner and header page -->

    <section class="sponsor-details">
      <span class="headlight-h">Our Sponsors</span>
      <h5 class="web-header">Our Sponsors</h5>
      <div class="row">
        <div class="col-md-4">
          <div class="sponsor-img">
            <img src="assets/img/mountain.png" alt="brand">
          </div>
        </div>
        <div class="col-md-4">
          <div class="sponsor-img">
            <img src="assets/img/d-1.png" alt="logo">
          </div>
        </div>
        <div class="col-md-4">
          <div class="sponsor-img">
            <img src="assets/img/d-2.jpg" alt="logo">
          </div>
        </div>
        <div class="col-md-4">
          <div class="sponsor-img">
            <img src="assets/img/d-3.jpg" alt="logo">
          </div>
        </div>
        <div class="col-md-4">
          <div class="sponsor-img">
            <img src="assets/img/snowflake.png" alt="brand">
          </div>
        </div>
        <div class="col-md-4">
          <div class="sponsor-img">
            <img src="assets/img/sm-logo.png" alt="brand">
          </div>
        </div>
      </div>
    </section>

    <!-- newsletter html -->
    <section class=" newsletter gap-newsletter snow">
      <div class="newsletter-info">
        <h5 class="web-header">Newsletter</h5>
        <p>Sign Up For Our Newsletter
        </p>
        <form action="" class="news-form">
          <input type="text" id="n-email" name="email" placeholder="Email">
          <button class="web-a">Subscribe</button>
        </form>
      </div>
    </section>
    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')

    ?>
  </div>
</body>

</html>
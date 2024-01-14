<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome,custom css,bootstrap css -->
  <?php include('inc/css.php') ?>


  <!-- favicon link -->
  <link rel="icon" type="assets/img/sm-logo.png" href="logo">
  <title>Back Country Riders | Our Trails</title>
</head>

<body>
  <div class="container-md bg-white ">
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Our Trails' ?>
    <?php include('inc/web-banner.php') ?>
    <!-- banner and header page -->

    <section class="location-map">
      <span class="headlight-h">Our Trails</span>
      <h1 class="web-header">Our Location</h1>
      <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2322.290483609767!2d-110.20872902320295!3d54.40484627261511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a7c98b8ad43209%3A0x7eb9d6d68a0a3ee5!2sRiders%20Connection%20Motorsports%20%26%20RV!5e0!3m2!1sen!2snp!4v1704806622548!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"">
            </iframe> -->
      <img src="assets/img/location.png" alt="location">
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
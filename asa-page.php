<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome,custom css,bootstrap css -->
  <?php include('inc/css.php') ?>


  <!-- favicon link -->
  <link rel="icon" type="assets/img/sm-logo.png" href="logo">
  <title>Back Country Riders | ASA</title>
</head>

<body>
  <div class="container-md bg-white ">
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'ASA Snowmobile' ?>
    <?php include('inc/web-banner.php') ?>
    <!-- banner and header page -->

    <section class="asa-page-details">
      <div class="asa-logo">
        <img src="assets/img/asa-logo.png" alt="logo">
      </div>
      <span class="headlight-h">JOIN US ON THE SNOW</span>
      <h1 class="web-header">Alberta Snowmobile Association</h1>
      <div class="asa-description">
        <p>The history of over the snow, motorized vehicles is relatively short in perspective. The earliest recorded efforts at creating such a vehicle date back to the early 1900’s. In the mid-30’s, such a vehicle existed and became a huge success for those who saw it as a necessity: doctors, lawyers, ambulance, and taxi drivers. It was only with the advent of smaller engines in the 1950’s that lightweight, one- or two-passenger snowmobiles were marketed. With their development, a new winter recreational activity came into being. The 60’s and early 70’s saw a rapid growth spurt in the popular activity. <br> <br> It is conservatively estimated that there are 140,000 snowmobiles in Alberta alone. The vast majority of the riders sees snowmobiling as, and participates in it as, a family-oriented sport. <br> <br> Since its inception in 1971, the Alberta Snowmobile Association (ASA) has been operated by volunteers. The Association has required office staffing since 1981. The associated clubs were, and continue to be, formed from a volunteer resource base, with the assistance of the ASA. The clubs then, in consultation with the ASA, take care of business with regards to the trails in their communities. This model is still highly valued and effective, particularly at the grassroots level. <br> <br> The model for snowmobiling organizations in Alberta has been based on volunteerism. The Board of Directors for the ASA is made up of volunteers. Volunteers who form and run the clubs also give their time to the development and maintenance of trails. The clubs also answer to the safety concerns in their community. These volunteers have done a remarkable job. Alberta has over 6,5000 kilometers of trails. This speaks of an enormous amount of serious hard work and dedication on the part of the ASA Club volunteers.</p>
        <div class="web-btn asa-btn">
          <a class="web-a" href="https://albertasnowmobile.ca/">View The Website <i class="fa-regular fa-eye"></i></a>
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
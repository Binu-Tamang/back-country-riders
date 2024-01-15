<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome,custom css,bootstrap css -->
  <?php include('inc/css.php') ?>


  <!-- favicon link -->
  <link rel="icon" type="assets/img/sm-logo.png" href="logo">
  <title>Back Country Riders | About Us</title>
</head>

<body>
  <div class="container-md bg-white ">
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'About Us' ?>
    <?php include('inc/web-banner.php') ?>
    <!-- banner and header page -->

    <section class="about-us">
      <div class="row">
        <!-- <div class="col-md-6">
          <div class="about-us-left">
            <img src="assets/img/g-8.jpg" alt="rider">
          </div>
        </div> -->
        <div class="col-md-12">
          <div class="about-us-right">
            <span class="headlight-h">Welcome To</span>
            <h1 class="web-header">Back Country Rider</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam fugit veniam, explicabo,
              sequi eius neque ipsam praesentium obcaecati maiores iste amet in. Earum dolorum recusandae
              molestias, praesentium labore aliquam voluptate. <br> Lorem ipsum, dolor sit amet consectetur adipisicing
              elit. Dolor velit quas aliquam autem nemo voluptatibus blanditiis pariatur dolorem quidem eum error
              nostrum ex repellat quis ab natus, magni sed fugit.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-us-details">
      <div class="about-box abt-box-two">
        <div class="row">
          <div class="col-md-6">
            <div class="about-box-left2">
              <div class="about-box-content2">
                <h2 class="web-header">Our Mission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sequi voluptates, culpa nihil harum
                  odit
                  laborum nulla! Quaerat vel ad harum. Quas deleniti maiores expedita nobis fugiat accusamus
                  voluptatibus?
                  Dolore? banner <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore possimus autem
                  modi, tenetur alias aliquid ut debitis nostrum nemo quia odio fugiat odit, deserunt facilis maiores.
                  Dignissimos consequatur ducimus numquam?</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-box-left">
              <img src="assets/img/g-3.jpg" alt="welcome">
            </div>
          </div>
        </div>
      </div>

      <div class="about-box abt-box-two">
        <div class="row">
          <div class="col-md-6">
            <div class="about-box-left">
              <img src="assets/img/g-5.jpg" alt="welcome">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-box-left2">
              <div class="about-box-content2">
                <h2 class="web-header">Our Vission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sequi voluptates, culpa nihil harum
                  odit
                  laborum nulla! Quaerat vel ad harum. Quas deleniti maiores expedita nobis fugiat accusamus
                  voluptatibus?
                  Dolore? banner <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore possimus autem
                  modi, tenetur alias aliquid ut debitis nostrum nemo quia odio fugiat odit, deserunt facilis maiores.
                  Dignissimos consequatur ducimus numquam?</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="about-box abt-box-two">
        <div class="row">
          <div class="col-md-6">
            <div class="about-box-left2">
              <div class="about-box-content2">
                <h2 class="web-header">Environment Stance</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sequi voluptates, culpa nihil harum
                  odit
                  laborum nulla! Quaerat vel ad harum. Quas deleniti maiores expedita nobis fugiat accusamus
                  voluptatibus?
                  Dolore? banner <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore possimus autem
                  modi, tenetur alias aliquid ut debitis nostrum nemo quia odio fugiat odit, deserunt facilis maiores.
                  Dignissimos consequatur ducimus numquam?</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-box-left">
              <img src="assets/img/g-1.jpg" alt="welcome">
            </div>
          </div>
        </div>
      </div>

      <div class="about-box abt-box-two">
        <div class="row">
          <div class="col-md-6">
            <div class="about-box-left">
              <img src="assets/img/g-7.jpg" alt="welcome">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-box-left2">
              <div class="about-box-content2">
                <h2 class="web-header">Safety</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sequi voluptates, culpa nihil harum
                  odit
                  laborum nulla! Quaerat vel ad harum. Quas deleniti maiores expedita nobis fugiat accusamus
                  voluptatibus?
                  Dolore? banner <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore possimus autem
                  modi, tenetur alias aliquid ut debitis nostrum nemo quia odio fugiat odit, deserunt facilis maiores.
                  Dignissimos consequatur ducimus numquam?</p>
              </div>
            </div>
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
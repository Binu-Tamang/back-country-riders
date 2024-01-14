<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome,custom css,bootstrap css -->
  <?php include('inc/css.php') ?>


  <!-- favicon link -->
  <link rel="icon" type="assets/img/sm-logo.png" href="logo">
  <title>Back Country Riders | Contact Us</title>
</head>

<body>
  <div class="container-md bg-white ">
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Contact Us' ?>
    <?php include('inc/web-banner.php') ?>
    <!-- banner and header page -->

    <section class="contact-form-box">
      <div class="contact-form">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-location">
              <div class="location-box">
                <div class="location-icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="location-details">
                  <span>Phone Number:</span>
                  <a href="tel:123 456 789">123 456 789</a>
                </div>
              </div>
            </div>

            <div class="form-location">
              <div class="location-box">
                <div class="location-icon">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="location-details">
                  <span>Our Email:</span>
                  <a href="mail:example@gmail.com">example@gmail.com</a>
                </div>
              </div>
            </div>

            <div class="form-location">
              <div class="location-box">
                <div class="location-icon">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="location-details">
                  <span>Our Location:</span>
                  <a href="#">
                    Lac La Biche, Alberta</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8 p-0 ">
            <div class="bg-ternary contact-box-shadow h-100 d-flex flex-column justify-content-center wow zoomIn " data-wow-delay="0.6s">
              <div class="contact-box-wrap">
                <h1 class="web-header mb-4">Send Message</h1>
                <p style="color: #000 !important;">Fill
                  in the form below to send us a message or to ask about any queries you might have.
                </p>
                <form id="contactForm " action="php/contact-form.php" method="post">
                  <div class="row g-3">
                    <div class="col-12 col-lg-6">
                      <input type="text" id="name" name="name" class="form-control border-2" required placeholder="Your First Name" style="height: 55px;">
                      <small id="nameError" class="form-text text-danger"></small>
                    </div>
                    <div class="col-12 col-lg-6">
                      <input type="text" id="name" name="name" class="form-control border-2" required placeholder="Your Last Name" style="height: 55px;">
                      <small id="nameError" class="form-text text-danger"></small>
                    </div>
                    <div class="col-12 col-lg-6">
                      <input type="tel" id="phone" name="phone" pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" class="form-control border-2" required placeholder="Your Number" style="height: 55px;">
                    </div>
                    <div class="col-lg-6">
                      <input type="email" id="email" name="email" class="form-control border-2" required placeholder="Your Email" style="height: 55px;">
                    </div>

                    <div class="col-12 contact-msg">
                      Message Us
                      <textarea id="message" class="form-control border-2" name="message" required placeholder="Your Message" rows="5"></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LeoDP8nAAAAANsoS36iwUXtJCAhXSAkLU1XjciX">
                    </div>
                    <div class="welcome-part-button col-12 text-left enquire-btn">
                      <button class="about-btn mt-0" type="submit">Submit <i class="fa-regular fa-paper-plane"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="location-map contact-map">
      <span class="headlight-h">Our Location</span>
      <h1 class="web-header">Find Us On Googles Map</h1>
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
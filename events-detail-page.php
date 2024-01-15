<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome,custom css,bootstrap css -->
  <?php include('inc/css.php') ?>


  <!-- favicon link -->
  <link rel="icon" type="assets/img/sm-logo.png" href="logo">
  <title>Back Country Riders | Events</title>
</head>

<body>
  <div class="container-md bg-white ">
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Our Events / Details Events' ?>
    <?php include('inc/web-banner.php') ?>
    <!-- banner and header page -->

    <section class="events-details-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="details-event-wrap">
              <h1 class="web-header">Description Topic</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt modi ipsum dolores expedita voluptatum architecto velit nam sit iusto, illum quos ipsam totam, itaque tempora commodi consequatur natus quo at. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, tempora itaque accusamus sequi sunt doloribus earum beatae quas modi praesentium ad, mollitia repellat. Qui ea quibusdam id, ipsa quasi odit. <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quasi nesciunt tenetur, magni atque praesentium quod sed esse! Necessitatibus, voluptates neque totam deserunt perferendis facilis laboriosam nostrum natus vel adipisci.</p>
            </div>
            <div class="events-hours">
              <h3 class="web-header gap-web">Hours</h3>
              <p>Sunday <span class="event-times">7PM -10PM</span></p>
              <p>Sunday <span class="event-times">7PM -10PM</span></p>
            </div>
            <div class="event-management-wrap  gap-web">
              <h3 class="web-header">How can I contact the organizer with any question?</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              <div class="enquire-btn">
                <button>Enquire Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="events-map">
              <div class="map-area-events">
                <h2 class="web-header">Event Location</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2322.290483609767!2d-110.20872902320295!3d54.40484627261511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a7c98b8ad43209%3A0x7eb9d6d68a0a3ee5!2sRiders%20Connection%20Motorsports%20%26%20RV!5e0!3m2!1sen!2snp!4v1704806622548!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"">
            </iframe>
            </div>
            <div class=" event-contact">
                  <h2 class="web-header">Event Contact</h2>
                  <a href="tel:123 456 789">123 456 789</a>
                  <a href="email:example@gmail.com">example@gmail.com</a>
                  <div class="event-manager-links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="event-section">
      <span class="headlight-h">Our Events</span>
      <h2 class="web-header">Upcoming Events</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="poster-box">
            <img src="assets/img/poster-1.jpg" alt="poster">
            <div class="poster-group">
              <div class="dates-wrap">
                <span class="date">11</span>
                <span class="month">Feb</span>
                <span class="year">2024</span>
              </div>
              <div class="text-poster-details">
                <strong>Poster Details Topic</strong>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="event-btn">
                  <a href="events-detail-page.php">View More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="poster-box">
            <img src="assets/img/poster-2.jpg" alt="poster">
            <div class="poster-group">
              <div class="dates-wrap">
                <span class="date">11</span>
                <span class="month">Feb</span>
                <span class="year">2024</span>
              </div>
              <div class="text-poster-details">
                <strong>Poster Details Topic</strong>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="event-btn">
                  <a href="events-detail-page.php">View More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="poster-box">
            <img src="assets/img/poster-3.jpg" alt="poster">
            <div class="poster-group">
              <div class="dates-wrap">
                <span class="date">11</span>
                <span class="month">Feb</span>
                <span class="year">2024</span>
              </div>
              <div class="text-poster-details">
                <strong>Poster Details Topic</strong>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="event-btn">
                  <a href="events-detail-page.php">View More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="row">
      <div class="business-list-content">
        <nav class="pagination-section">
          <ul class="pagination justify-content-left mb-5 mt-5">
            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
              <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#">9</a></li>
            <li class="page-item"><a class="page-link" href="#0">10</a></li>
            <li class="page-item"><a class="page-link" href="#1">11</a></li>
            <li class="page-item"><a class="page-link" href="#2">12</a></li>
            <li class="page-item"><a class="page-link" href="#3">13</a></li>
            <li class="page-item">
              <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

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
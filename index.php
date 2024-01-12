<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="assets/img/sm-logo.png" href="logo">
    <title>Back Country Riders </title>
</head>

<body>
    <div class="container-md bg-white ">
        <!-- header parts start -->
        <?php include('inc/header.php') ?>
        <!-- header part ends -->

        <section class="bg-banner">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/g-2.jpg" class="d-block w-100" alt="banner background">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/g-3.jpg" class="d-block w-100" alt="banner background">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/g-1.jpg" class="d-block w-100" alt="banner background">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/g-4.jpg" class="d-block w-100" alt="banner background">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="about-us">
            <div class="about-us-box">
                <div class="row">
                    <div class="col-md-3">
                        <div class="abt-box-wrap">
                            <img src="assets/img/mountain.png" alt="icon">
                            <div class="abt-box-text">
                                <div class="box-text">
                                    <strong>Our Mission</strong>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nisi fuga
                                        provident possimus!
                                    </p>
                                </div>
                                <a href="#">Learn More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="abt-box-wrap">
                            <img src="assets/img/medal.png" alt="icon">
                            <div class="abt-box-text">
                                <div class="box-text">
                                    <strong>Our Vission</strong>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nisi fuga
                                        provident possimus!
                                    </p>
                                </div>
                                <a href="#">Learn More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="abt-box-wrap">
                            <img src="assets/img/snowflake.png" alt="icon">
                            <div class="abt-box-text">
                                <div class="box-text">
                                    <strong>Environment Stance</strong>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nisi fuga
                                        provident possimus!
                                    </p>
                                </div>
                                <a href="#">Learn More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="abt-box-wrap">
                            <img src="assets/img/helmet.png" alt="icon">
                            <div class="abt-box-text">
                                <div class="box-text">
                                    <strong>Safety</strong>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nisi fuga
                                        provident possimus!
                                    </p>
                                </div>
                                <a href="#">Learn More ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us-left">
                        <img src="assets/img/g-8.jpg" alt="rider">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-us-right">
                        <span class="headlight-h">Welcome To</span>
                        <h1 class="web-header">Back Country Rider</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam fugit veniam, explicabo,
                            sequi eius neque ipsam praesentium obcaecati maiores iste amet in. Earum dolorum recusandae
                            molestias, praesentium labore aliquam voluptate.</p>
                        <div class="web-btn">
                            <a class="web-a" href="#">View More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="welcome-part">
            <div class="row">
                <div class="col-lg-6">
                    <div class="welcome-left">
                        <div class="welcome-right">
                            <span class="headlight-h">Snow Mountain</span>
                            <h2 class="web-header">Who We Are</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos odit quaerat hic
                                voluptatibus.
                                Quo cumque esse repellendus nam molestias porro ipsa tempora nobis, nemo sunt deleniti
                                aspernatur praesentium et omnis! <br> Lorem Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit.</p>
                            <div class="web-btn">
                                <a class="web-a" href="#">View More +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-container-md">
                        <div class="main">
                            <div class="big-circle">
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/mountain.png" alt="icon" />
                                    </a>
                                </div>
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/medal.png" alt=" icon" />
                                    </a>
                                </div>
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/snowflake.png" alt=" icon" />
                                    </a>
                                </div>
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/helmet.png" alt=" icon" />
                                    </a>
                                </div>
                            </div>
                            <div class="circle">
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/map.png" alt=" icon" />
                                    </a>
                                </div>
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/image-gallery.png" alt=" icon" />
                                    </a>
                                </div>
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/sponsor.png" alt="icon" />
                                    </a>
                                </div>
                                <div class="icon-block">
                                    <a href="#">
                                        <img src="assets/img/planner.png" alt=" icon" />
                                    </a>
                                </div>
                            </div>
                            <div class="center-logo">
                                <img src="assets/img/sm-logo.png" alt="logo" />
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
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="poster-box">
                        <img src="assets/img/poster-2.jpg" alt="poster">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="poster-box">
                        <img src="assets/img/poster-3.jpg" alt="poster">
                    </div>
                </div>
                <div class="web-btn">
                    <a class="web-a" href="#">View More</a>
                </div>
            </div>
        </section>

        <!-- isotope project -->
        <section class="isotope-project container-md-xxl">
            <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s">
                <p class="fw-medium text-uppercase mb-2 headlight-h">Our Gallery</p>
                <h1 class="display-5 text-black mb-2 web-header">Photo Of The Day</h1>
            </div>
            <div class="portfolio-menu">
                <ul class="isotope-ul">
                    <li class="active isotope-li" data-filter="*">All</li>
                    <li data-filter=".one-iso">One Title</li>
                    <li data-filter=".two-iso">Two Title</li>
                    <li data-filter=".three-iso">Three Title</li>
                </ul>
            </div>

            <div class="portfolio-item container-fluid" id="open-popup">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="item one-iso">
                            <a href="assets/img/g-1.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-1.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item two-iso">
                            <a href="assets/img/g-8.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-8.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item three-iso">
                            <a href="assets/img/g-4.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-4.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item one-iso">
                            <a href="assets/img/g-2.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-2.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item two-iso">
                            <a href="assets/img/g-7.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-7.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item three-iso">
                            <a href="assets/img/g-6.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-6.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item one-iso">
                            <a href="assets/img/g-5.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-5.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="item one-iso">
                            <a href="assets/img/g-3.jpg" class="image-link-js test-popup-link" id="my-popup"
                                data-lightbox="pop-images" title="pop images">
                                <img class="pop-images aos-init aos-animate" src="assets/img/g-3.jpg" alt="" width="100"
                                    height="100"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- isotope project -->

        <!--  adding facebook video and link - -->
        <section class="social-media-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="VideoContent">
                            <span class="headlight-h">Join On The Show</span>
                            <h5 class="web-header">Alberta Snowmobile Association</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae doloribus nam
                                tempore, nisi esse commodi ab odio officiis ullam, animi pariatur magnam reiciendis
                                cumque magni ea iusto nesciunt praesentium eligendi! <br> Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. Pariatur, ab, non aspernatur adipisci voluptatibus vel
                                eveniet amet blanditiis voluptate saepe quibusdam consectetur inventore assumenda quis
                                itaque? Atque odio accusamus nulla.</p>
                            <img src="assets/img/asa-logo.png" alt="logo">

                            <div class="web-btn">
                                <a class="web-a" href="https://albertasnowmobile.ca/">View The Website</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="facebook-link text-center">
                            <iframe loading="lazy"
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100077657193841%26sk%3Dphotos&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="400" height="500" style="border: none; overflow: hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
        </section>
        <!-- adding facebook video and link -->

        <!-- sponsors -->
        <section class="sponsors-part">
            <span class="headlight-h">Our Sponsors</span>
            <h5 class="web-header">Our Sponsors</h5>
            <!-- big sponsors -->
            <div class="brand-name big-sponsor">
                <div class="owl-carousel brand-owl owl-theme">
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/mountain.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/d-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/d-2.jpg" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/d-3.jpg" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/snowflake.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/sm-logo.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/mountain.png" alt="brand">
                        </div>

                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/location.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/helmet.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/mountain.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/sponsor.png" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-img">
                            <img src="assets/img/medal.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
            <!-- small sponsors -->
            <div class="brand-name small-sponsor">
                <div class="owl-carousel brand-small-owl owl-theme">
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Community</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Society</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Alberta Snowmobile</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Reimbursement Program</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Owl Carousel</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Sponsors Name</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Magnific Popup</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Community</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Back Country Riders</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sponsor-name">
                            <span>Isotopes</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location-map">
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2322.290483609767!2d-110.20872902320295!3d54.40484627261511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a7c98b8ad43209%3A0x7eb9d6d68a0a3ee5!2sRiders%20Connection%20Motorsports%20%26%20RV!5e0!3m2!1sen!2snp!4v1704806622548!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"">
            </iframe> -->
            <img src="assets/img/location.png" alt="location">
        </section>

        <section class=" newsletter snow">
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
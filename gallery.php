<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>


    <!-- favicon link -->
    <link rel="icon" type="assets/img/sm-logo.png" href="logo">
    <title>Back Country Riders | Gallery</title>
</head>

<body>
    <div class="container-md bg-white ">
        <!-- header parts start -->
        <?php include('inc/header.php') ?>
        <!-- header part ends -->

        <!-- banner and headre page  -->
        <?php $page_name = 'Our Gallery' ?>
        <?php include('inc/web-banner.php') ?>
        <!-- banner and header page -->

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
</body>

</html>
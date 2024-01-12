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
        <?php $page_name = 'Our Events' ?>
        <?php include('inc/web-banner.php') ?>
        <!-- banner and header page -->

        <section class="events-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5">
                        <div class="events-img">
                            <img src="assets/img/poster-1.jpg" alt="poster">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="events-details">
                            <h1 class="web-header">Title Of The Events</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dolorem incidunt. Esse
                                rerum non saepe culpa quisquam optio, voluptatem.</p>
                                <a href="#"></a>
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
</body>

</html>
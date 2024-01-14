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
                <div class="events-title">
                    <span class="headlight-h">Our Events</span>
                    <h2 class="web-header">Upcoming Events</h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="events-wrap-box">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="dates-box">
                                        <span class="date">11</span>
                                        <span class="month">Feb</span>
                                        <span class="year">2024</span>
                                    </div>
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
                                        <div class="events-lo">
                                            <span><i class="fa-solid fa-location-dot"></i> <a href="#">Loction details </a></span>
                                            <span><i class="fa-solid fa-clock"></i> 02:00 PM - 03:30 PM</span>
                                        </div>
                                        <div class="event-btn">
                                            <a href="events-detail-page.php">View Events Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="events-wrap-box">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="dates-box">
                                        <span class="date">11</span>
                                        <span class="month">Feb</span>
                                        <span class="year">2024</span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="events-img">
                                        <img src="assets/img/poster-2.jpg" alt="poster">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="events-details">
                                        <h1 class="web-header">Title Of The Events</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dolorem incidunt. Esse
                                            rerum non saepe culpa quisquam optio, voluptatem.</p>
                                        <div class="events-lo">
                                            <span><i class="fa-solid fa-location-dot"></i> <a href="#">Loction details </a></span>
                                            <span><i class="fa-solid fa-clock"></i> 02:00 PM - 03:30 PM</span>
                                        </div>
                                        <div class="event-btn">
                                            <a href="events-detail-page.php">View Events Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="events-wrap-box">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="dates-box">
                                        <span class="date">11</span>
                                        <span class="month">Feb</span>
                                        <span class="year">2024</span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="events-img">
                                        <img src="assets/img/poster-3.jpg" alt="poster">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="events-details">
                                        <h1 class="web-header">Title Of The Events</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dolorem incidunt. Esse
                                            rerum non saepe culpa quisquam optio, voluptatem.</p>
                                        <div class="events-lo">
                                            <span><i class="fa-solid fa-location-dot"></i> <a href="#">Loction details </a></span>
                                            <span><i class="fa-solid fa-clock"></i> 02:00 PM - 03:30 PM</span>
                                        </div>
                                        <div class="event-btn">
                                            <a href="events-detail-page.php">View Events Details <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search-events">
                            <div class="search-form">
                                <div class="heading">
                                    <h1>Search Event</h1>
                                </div>
                                <form action="#" method="GET">
                                    <div class="form-group">
                                        <input name="event_title" type="text" class="form-control" placeholder="Search by Title or Description" value="">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="event_date">
                                            <option value="all-date">All Dates</option>
                                            <option value="toady">Today</option>
                                            <option value="this-week">This Week</option>
                                            <option value="next-week">Next Week</option>
                                            <option value="this-month">This Month</option>
                                            <option value="next-month">Next Month</option>
                                            <option value="this-year">This Year</option>
                                            <option value="next-year">Next Year</option>
                                        </select>
                                    </div>
                                    <div class="event-calc-select">
                                        <div class="form-group d-inline-flex">
                                            <label for="inputFrom" class="d-block">From</label>
                                            <div class="input-group date" id="datetimepickerfrom">
                                                <div class="input-group-addon input-group-prepend">
                                                    <input type="date" name="start_date" type="text" class="form-control" placeholder="YYYY-MM-DD" value="">
                                                    <!-- <span class="input-group-text"><i class="fas fa-calendar"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-inline-flex">
                                            <label for="inputTo" class="d-block">To</label>
                                            <div class="input-group date" id="datetimepickerto">
                                                <div class="input-group-addon input-group-prepend">
                                                    <input type="date" name="end_date" type="text" class="form-control" placeholder="YYYY-MM-DD" value="">
                                                    <!-- <span class="input-group-text"><i class="fas fa-calendar"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group search-btn">
                                        <button type="submit" class="btn btn-outline-dark">Search</button>
                                    </div>
                                </form>
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
</body>

</html>
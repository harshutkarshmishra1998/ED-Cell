<?php include '../includes/db.php'; ?>

<?php
    $events = $_GET['event'];
    if($events == "latest")
    {
        $query = "SELECT * FROM events ORDER BY event_id DESC LIMIT 1";
    }
    else
    {
        $query = "SELECT * FROM events WHERE event_id LIKE '%$events%'";
    }
?>

<?php
    $select_events = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_events))
    {
        $event_id = $row['event_id'];
        $event_name = $row['event_name'];
        $event_header_image = $row['event_header_image'];
        $event_header_video = $row['event_header_video'];
        $event_date = $row['event_date'];
        $event_info_1 = $row['event_info_1'];
        $event_info_2 = $row['event_info_2'];
        $event_info_3 = $row['event_info_3'];
        $event_info_4 = $row['event_info_4'];
        $event_poster_1 = $row['event_poster_1'];
        $event_poster_2 = $row['event_poster_2'];
        $event_poster_3 = $row['event_poster_3'];
        $event_poster_4 = $row['event_poster_4'];
        $event_poster_5 = $row['event_poster_5'];
        $event_poster_6 = $row['event_poster_6'];
        $event_brochure = $row['event_brochure'];
        $event_regi_link = $row['event_regi_link'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TheEvent Bootstrap Template - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: TheEvent - v2.2.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#intro">The<span>Event</span></a></h1>-->
                <a href="../index.php" class="scrollto"><img src="../img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.php?event=<?php echo $_GET['event'] ?>">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#speakers">Speakers</a></li>
                    <li><a href="#venue">Venue</a></li>
                    <?php 
                        if(!empty($event_regi_link))
                        {
                            echo "<li class='buy-tickets'><a href='$event_regi_link'>Register</a></li>";
                        }
                        if(!empty($event_brochure))
                        {
                            echo "<li class='buy-tickets'><a href='$event_bronchure'>Register</a></li>";
                        }
                    ?>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <img src="../images/<?php echo $event_header_image;?>" style="width:100%; height:100%;">
        <!-- <img src="assets/img/intro-bg.jpg"> -->
        <div class="intro-container" data-aos="zoom-in" data-aos-delay="100">
            <!-- <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1> -->
            <h1 class="mb-4 pb-0"><?php echo $event_name;?></h1>
            <p class="mb-4 pb-0"><?php echo $event_date;?></p>
            <?php 
                if(!empty($event_regi_link))
                {
                    echo "<a href='../videos/$event_header_video' class='venobox play-btn mb-4' data-vbtype='video'
                    data-autoplay='true' data-gall='venue-gallery'></a>";
                }
            ?>
            
            <a href="#about" class="about-btn scrollto">About The Event</a>
        </div>
    </section>
    <!-- End Intro Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>About The Event</h2>
                        <p><?php echo $event_info_1;?></p>
                    </div>
                    <div class="col-lg-3">
                        <h3>When</h3>
                        <p><?php echo $event_date;?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Speakers Section ======= -->
        <section id="speakers">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Event Speakers</h2>
                    <p>Here are some of our speakers</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <a href="../images/<?php echo $event_poster_1;?>" class="venobox" data-gall="venue-gallery">
                                <img src="../images/<?php echo $event_poster_1;?>" alt="" class="img-fluid">
                            </a>
                            <!-- <img src="../images/<?php //echo $event_poster_1;?>" class="img-fluid"> -->
                            <div class="details">
                                <?php echo $event_info_2; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <a href="../images/<?php echo $event_poster_2;?>" class="venobox" data-gall="venue-gallery">
                                <img src="../images/<?php echo $event_poster_2;?>" alt="" class="img-fluid">
                            </a>
                            <!-- <img src="../images/<?php //echo $event_poster_2;?>" class="img-fluid"> -->
                            <div class="details">
                                <?php echo $event_info_3; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <a href="../images/<?php echo $event_poster_3;?>" class="venobox" data-gall="venue-gallery">
                                <img src="../images/<?php echo $event_poster_3;?>" alt="" class="img-fluid">
                            </a>
                            <!-- <img src="../images/<?php //echo $event_poster_3;?>" class="img-fluid"> -->
                            <div class="details">
                                <?php echo $event_info_4; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End Speakers Section -->

        <!-- ======= Venue Section ======= -->
        <section id="venue">

            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h2>Event Venue</h2>
                    <p>Event venue location info and gallery</p>
                </div>

            </div>

            <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-4">
                        <div class="venue-gallery">
                            <a href="../images/<?php echo $event_poster_4;?>" class="venobox" data-gall="venue-gallery">
                                <img src="../images/<?php echo $event_poster_4;?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="venue-gallery">
                            <a href="../images/<?php echo $event_poster_5;?>" class="venobox" data-gall="venue-gallery">
                                <img src="../images/<?php echo $event_poster_5;?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="venue-gallery">
                            <a href="../images/<?php echo $event_poster_6;?>" class="venobox" data-gall="venue-gallery">
                                <img src="../images/<?php echo $event_poster_6;?>" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End Venue Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!-- <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="assets/img/logo.png" alt="TheEvenet">
                        <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et
                            totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id
                            quis. In inventore consequatur ad voluptate
                            cupiditate debitis accusamus repellat cumque.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br> New York, NY 535022<br> United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
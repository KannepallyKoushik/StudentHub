<?php
include("dbconn.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Student HUb</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <?php
	 include_once("navbar.php");
	?>
    <!--================ End Header Menu Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content">
                    <p class="upper_text">Explore Yourself</p>
                    <h2>To make a better future</h2>

                    <a class="primary_btn mr-20" href="submit.php">Submit Project</a>
                    <a class="primary_btn yellow_btn text-white" href="viewproject.php">View Projects</a>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Causes Area =================-->

    <section class="team_area section_gap">
        <div class="container">
            <div class="main_title">
                <h2>Meet our voluteer</h2>
                <p>Here are the developers who this project</p>
            </div>

            <div class="row team_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="Koushik.JPG" style="height:260px" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Koushik</h4>
                            <p>Backend Developer</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="pavan.jpg" style="height:260px" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Pavan</h4>
                            <p>FrontEnd Developer</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="swethamam.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>B Swetha Reddy</h4>
                            <p>Team Lead</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="HOD.jpg" style="height:260px" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Alex Stalin</h4>
                            <p>HOD</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!--================End Team Area =================-->

    <!--================ Start CTA Area =================-->
    <?php 
	 include_once("have.php");
	 ?>
    <!--================ Start Story Area =================-->

    <?php
	
	
	 include_once("footer.php");
     ?>
    <!--================ Start footer Area  =================-->
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/countdown.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>

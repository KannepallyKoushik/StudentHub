<?php
include_once("dbconn.php");

	
 if(isset($_POST['submit']))
 {   
    $ideaid = $_REQUEST['idea'];
    $userid = $_REQUEST['userid'];
	$pd=$_POST['t'];
		
	$sql=mysqli_query($connect,"insert into ideasolution(solution,idea_id,userid) values('$pd','$ideaid','$userid')") or die(mysqli_error($connect));
	header("location:listidea.php");
	
}

	

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/banner.jpg" type="image/png">
    <title>projects</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>

    </style>
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <?php
	 include_once("navbar.php");
	?>

    <!--================ End Header Menu Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Post your solution</h2>
                    <p>submit your solution</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Recent Event Area =================-->
    <div class="container">
        <br>
        <form id="contact" action="" method="post" enctype="multipart/form-data">

            <h4>Submit your solutions</h4><br>
            <input type="hidden" name="eid" value="<?php echo $_REQUEST['eid']; ?>">

            <div class="box-body">
                <div class="form-group">
                    <textarea class="form-control" style="width:500px;height:100px" placeholder="Brief your solution"
                        required autofocus name="t"></textarea>
                </div>
            </div>
            <br>
            <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="submit"></input>
            </div>

        </form>
    </div>
    <br>
    <!--================ Start footer Area  =================-->
    <?php
     include_once("footer.php");
   ?>
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
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
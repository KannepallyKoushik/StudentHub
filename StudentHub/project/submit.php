<?php
include_once("dbconn.php");

 if(isset($_POST['submit']))
 {
  $id = $_SESSION['id'];
  $pn=$_POST['t4'];
	$pd=$_POST['t'];
	$d=$_POST['t5'];
	$st=$_POST['t7'];
		
	$img = $_FILES['f']['name'];
	
	if(!empty($img))
	{
		$target = "uploads/";
		$tfile = $target.basename($_FILES['f']['name']);
		 
		if(move_uploaded_file($_FILES['f']['tmp_name'],$tfile))
		{
			echo "file uploaded";
		}
		
	}
	$sql=mysqli_query($connect,"insert into subpro (userid,project_name,project_description,domain,project_file,status,dateofposting) values('$id','$pn','$pd','$d','$img','$st',now())") or die(mysqli_error($connect));
	header("location:viewproject.php");

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
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Projects</h2>
                    <p>submit your project to explore</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

	<!--================ Start Recent Event Area =================-->
<div class="container">
  <br>  
  <form id="contact" action="" method="post" enctype="multipart/form-data">
    
    <h4>Submit your project here</h4><hr><br>
	<div class="box-body">
    <div class="form-group">
      <input  class="form-control" style="width:500px" placeholder="Project Title" type="text"  required autofocus name="t4">
    </div>
	<div class="form-group">
      <textarea  class="form-control" style="width:500px;height:250px" placeholder="Project Description"  required autofocus name="t"></textarea>
    </div>
    
    <div class="form-group">
	   
	    <select class="form-control" name="t5" >
		 <option>Select Domain</option>
	   <option value="software">Software Project</option>
	   <option value="hardware">Hardware Project</option>
		</select>
    </div>
	 <br><br><br>
	<div class="form-group">
      <input type="radio" value="needhelp" name="t7" >Need Help<input type="radio" value="completed" name="t7" >Completed
    </div>    
	<div class="form-group">
	<input type="file" name="f" class="form-control" style="width:300px" >
	</div>
    </div>
<br>
    <div class="box-footer">
      <input type="submit" class="btn btn-primary" name="submit" value="submit"  style="width:300px;height:53px"></input>
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
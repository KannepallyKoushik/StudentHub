 <?php
        include_once("dbconn.php");
		
		 
		 
      ?>
 <!doctype html>
 <html lang="en">

 <head>


     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" href="img/favicon.png" type="image/png">
     <title>Causes</title>
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
     <!--================ End Header Menu Area =================-->
     <?php
        include_once("navbar.php");
      ?>
     <!--================ Home Banner Area =================-->
     <section class="banner_area">
         <div class="banner_inner d-flex align-items-center">
             <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                 data-background=""></div>
             <div class="container">
                 <div class="banner_content text-center">
                     <h2>Solutions to queries</h2>
                     <p>Here is the Guidence for your Ideas</p>
                 </div>
             </div>
         </div>
     </section>
     <!--================ End Home Banner Area =================-->

     <!--================ End Causes Area =================-->

     <!--================ Start Features Cause section =================-->
     <section class="features_causes">
         <div class="container">
             <div class="main_title">
                 <h2 style="margin-top:20px;">Solutions To Queries </h2>
                 <p>Solutions to the queries posted,By other Students and Faculty members</p>
             </div>


             <div class="row">
                 <?php
                  $sql=mysqli_query($connect,"select * from ideas") or die(mysqli_error($connect));
					   while($rsql=mysqli_fetch_array($sql))
				       {	 
                 $userid = $rsql['userid'];
                 $usersql =  mysqli_query($connect,"select * from admin where id = '$userid'") or die(mysqli_error($connect));
                 $userres = mysqli_fetch_array($usersql);
				           ?>
                 <div>
                     <div class="card" style="width:700px;background-color:rgb(255,240,238);">

                         <div class="card-body" style="width:700px">
                             <div class="d-flex justify-content-between raised_goal" style="margin-left:30px;">
                                 <p><b>Name: </b><?php echo $userres['name']; ?></p><br>
                                 <p><b>Email: </b><?php echo $userres['username']; ?></p><br>
                                 <p><b>Contact: </b><?php echo $userres['phonenum']; ?></p>
                             </div>
                             <div>
                                 <h4 class="card-title" style="margin-left:30px;font-size:20px;">Idea Description:</h4>
                                 <p class="card-text" style="margin-left:30px;">
                                     <?php echo $rsql['idea_description']; ?>
                                 </p>
                             </div>

                             <div class="card_inner_body">
                                 <h4 class="card-title" style="font-size:20px;">Query Posted by
                                     <?php echo $userres['name'];?></h4>
                                 <p class="card-text">
                                     <?php  echo $rsql['query'];?> </p><br>

                                 <div class="d-flex justify-content-between donation align-items-center">

                                 </div>
                                 <button class="primary_btn" data-toggle="modal"
                                     data-target="#myModal<?php echo $rsql['ID'];?>">View Solutions</button>
                                 <br><br>
                                 <a
                                     href="solution.php?idea=<?php echo $rsql['ID']; ?>&&userid=<?php echo $_SESSION['id'];?>">Post
                                     A Solution</a>
                             </div>



                         </div>
                     </div>
                     <hr>

                     <?php } ?>

                 </div>
             </div>

         </div>
         </div>
     </section>
     <?php
	
	$sl = mysqli_query($connect,"select * from ideas") or die(mysqli_error($connect));
	while($sol = mysqli_fetch_array($sl))
	{
	?>


     <div class="modal fade" id="myModal<?php echo $sol['ID']; ?>" role="dialog">
         <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title">Solutions</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>

                 </div>
                 <div class="modal-body">

                     <?php 
	 $hh = mysqli_query($connect,"select * from ideasolution where idea_id='".$sol['ID']."' ") or die(mysqli_error($connect));
		while($hr=mysqli_fetch_array($hh))
		   {
               $userdata=  mysqli_query($connect,"select * from admin where  id='".$hr['userid']."' ") or die(mysqli_error($connect));
               $userarray = mysqli_fetch_array($userdata);
               ?>
                     <b>By :
                         <?php echo $userarray['name'] ;?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Contact
                         No : <?php echo $userarray['phonenum']; ?></b><br>
                     <b><small>Email : <?php echo $userarray['username'] ;?></small></b>
                     <p>
                         Solution : <?php echo $hr['solution']; ?>
                     </p>
                     <hr>
                     <?php } ?>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
             </div>

         </div>
     </div>
     <?php } ?>
     <!--================ End Features Cause section =================-->

     <!--================ Start CTA Area =================-->

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

     <script>
     $(document).ready(function() {
         $("#myBtn").click(function() {
             $("#myModal").modal();
         });
     });
     </script>

 </body>

 </html>
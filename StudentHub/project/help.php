<?php
include_once("dbconn.php");

if(isset($_POST['sendmsg']))
{
    $senderid = $_POST['senderid'];
    $recieverid = $_POST['recieverid'];
    $projectid = $_POST['projectid']; 
    $msg = $_POST['msg'];
    
	$helpnotification = mysqli_query($connect,"insert into helpnotification(senderid,recieverid,projectid,message,date,checked) values('$senderid','$recieverid','$projectid','$msg',now(),'1')");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Student Portal</title>
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
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Project Expo</h2>
                    <p>Here are the different projects of our college students</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->



    <section class="condition-area event-details-area section_gap">
        <h1 style="margin-left:90px;">Incomplete-Projects</h1>
        <div class="container">

            <?php
		  $sql=mysqli_query($connect,"select * from subpro where status='needhelp' ORDER BY dateofposting DESC") or die(mysqli_error($connect));
		  while($res=mysqli_fetch_array($sql))
		  {
            $userid = $res['userid'];
            $usersql = mysqli_query($connect,"select * from admin where id = '$userid'") or die(mysqli_error($connect));
            $userres = mysqli_fetch_array($usersql);
            $recieverid = $userres['id'];
		  ?>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="condition-left">
                        <h3 style="margin-left:65px;">Download the Project File here</h3>
                        <a href="uploads/<?php echo $res['project_file']; ?>" download><img
                                style="max-width:50%;max-height:50%;margin-left:150px;" src="download.png" alt=""></a>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">

                    <div class="condition-right">
                        <h2 class="mb-20">
                            <?php echo $res['project_name'];  ?>
                        </h2>
                        <p>
                            <?php echo $res['project_description']?>
                        </p>
                        <ul>
                            <li><?php echo $userres['name']?></li>
                            <li><?php echo $userres['rollno']?></li>
                            <li><?php echo $userres['phonenum']?></li>
                            <li><b>Date: </b><?php echo $res['dateofposting']?></li>
                            <li><b>Status: </b><?php echo $res['status']?></li>
                            <?php
							if($res['status']=="needhelp")
							{ ?>

                    </div>
                    <button class="primary_btn" data-toggle="modal"
                        data-target="#myModal<?php echo $res['ID'];?>">Help</button>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <?php } ?>
        </div>
    </section>

    <?php
	
	$sl = mysqli_query($connect,"select * from subpro") or die(mysqli_error($connect));
	while($sol = mysqli_fetch_array($sl))
	{
	?>

    <form method="POST" name="fk" autocomplete="off">
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

               $userdata=  mysqli_query($connect,"select * from admin where  id='".$sol['userid']."' ") or die(mysqli_error($connect));
               $userarray = mysqli_fetch_array($userdata);
               ?>
                        Type a message to <b><?php echo $userarray['name']?></b><br><br>

                        <textarea name="msg" class="form-control" autocomplete="false" style="height:100px"
                            placeholder="Type your message to the person whom you want to help"></textarea>
                        <input type="hidden" name="senderid" value="<?php echo $_SESSION['id']; ?>"></input>
                        <input type="hidden" name="recieverid" value="<?php echo $userarray['id']; ?>"></input>
                        <input type="hidden" name="projectid" value="<?php echo $sol['ID']; ?>"></input>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"
                            style="margin-right:328px;">Close</button>
                        <input type="submit" class="btn btn-default" value="Send" name="sendmsg"></input>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <?php } ?>



    <!--================ End Recent Event Area =================-->
    <?php 
	 include_once("have.php");
	 ?>
    <!--================ End CTA Area =================-->

    <!--================ Start footer Area  =================-->
    <?php
	 include_once("footer.php");
	?>
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
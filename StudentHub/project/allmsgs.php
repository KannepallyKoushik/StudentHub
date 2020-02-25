<?php 
include("dbconn.php");
$id = $_SESSION['id'];
$sql= $sql = mysqli_query($connect,"select * from helpnotification where recieverid = '$id' ORDER BY date DESC");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include_once("headbar.php");?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include_once("sidebar.php");?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Your Messages

                </h1>

            </section>

            <!-- Main content -->
            <section class="content">

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- The time line -->
                        <ul class="timeline">
                            <!-- timeline time label -->

                            <?php 
                            while($res = mysqli_fetch_array($sql)) 
                            {
                            ?>
                            <li></li>
                            <li> </li>
                            <li class="time-label">
                                <span class="bg-red">
                                    <?php 
                                    $date = $res['date'];
                                    $unixTimestamp = strtotime($date);
                                    $month = date("F", $unixTimestamp);
                                    $day = date("d", $unixTimestamp);
                                    $year = date("o", $unixTimestamp);
                                    echo $day." ".$month." ".$year;
                                     ?>
                                </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->

                            <!-- END timeline item -->
                            <!-- timeline item -->

                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <?php 
                            $projectsql=mysqli_query($connect,"select * from subpro where ID = '".$res['projectid']."'");
                            $projectres = mysqli_fetch_array($projectsql);
                        
                            $sendersql=mysqli_query($connect,"select * from admin where ID = '".$res['senderid']."'");
                            $senderres = mysqli_fetch_array($sendersql);
                            ?>
                            <li>
                                <i class="fa fa-comments bg-yellow"></i>

                                <div class="timeline-item">
                                    <span class="time"><?php if($res['checked']==1) echo "unseen";?></span>

                                    <h3 class="timeline-header"><a href="#"><?php echo $senderres['name'];?> </a>
                                        messaged you to help on your
                                        project(<?php echo $projectres['project_name']; ?>) </h3>


                                    <div class="timeline-body">
                                        <?php echo $res['message']; ?>
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-warning btn-flat btn-xs"
                                            href="viewnotification.php?notifyid=<?php echo $res['id'];?>">View
                                            Message</a>
                                    </div>
                                </div>
                            </li>

                            <?php } ?>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <!-- /.timeline-label -->
                            <!-- timeline item -->

                            <!-- END timeline item -->
                            <!-- timeline item -->

                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                </pre>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>

    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
</body>

</html>
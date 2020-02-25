<?php
include("dbconn.php");
if(isset($_POST['delete'])){
    $id = $_SESSION['id'];
    $projectsql = mysqli_query($connect,"delete from subpro where userid = '".$id."'");
    $ideassql = mysqli_query($connect,"delete from ideas where userid = '".$id."'");
    $ideasolutionsql = mysqli_query($connect,"delete from ideasolution where userid = '".$id."'");
    $sql = mysqli_query($connect,"delete from admin where id = '".$id."'");
    header("location:signout.php");
}
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
    <style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <form method="POST">
        <div class="wrapper">
           

            <!-- Left side column. contains the logo and sidebar -->
            <?php 
  include_once("headbar.php");
  include_once("sidebar.php");
  ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->


                <!-- Main content -->
                <section class="content">


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Click on the Delete Button to delete your account</h3>
                                </div>
                                <div class="box-body">

                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modal-danger">
                                        Delete Account
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="modal modal-danger fade" id="modal-danger">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Are you sure you want to delete your account?</h4><br>
                                    <h6 class="modal-title">Note:(All you Data and projects gets deleted and cannot be
                                        restored)</h6>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left"
                                        data-dismiss="modal">Close</button>
                                    <input type="submit" value="Proceed" class="btn btn-outline" name="delete">
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2019-2020 <a href="#">Koushik and Pavan</a>.</strong> All rights
                reserved.
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
    </form>
</body>

</html>

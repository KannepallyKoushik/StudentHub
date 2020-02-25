<?php
 include("dbconn.php");
$id = $_SESSION['id'];
$sql=mysqli_query($connect,"select * from subpro where userid = '$id'") or die(mysqli_error($connect));
 if(isset($_POST['delete']))
 {
  $deleteid = $_POST['hiddenid'];
  $deletesql=mysqli_query($connect,"delete from subpro where ID ='$deleteid'") or die(mysqli_error($connect));
  header("location:myprojects.php");
 }
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">`
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
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
        <?php include_once("sidebar.php"); ?>


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">


                        </div>
                        <!-- /.box -->

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">All Projects of <?php echo $_SESSION['name'];?></h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title </th>
                                            <th>Description </th>
                                            <th>Domain</th>
                                            <th>Satus</th>
                                            <th>Posted Date & Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($data=mysqli_fetch_array($sql))
				 {
			     ?>
                                        <tr>
                                            <td><?php echo($data['project_name']); ?></td>


                                            <td><?php echo($data['project_description']); ?> </td>


                                            <td><?php echo($data['domain']); ?></td>



                                            <td><?php echo($data['status']); ?></td>


                                            <td><?php echo($data['dateofposting']); ?></td>



                                            <td> <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-warning<?php echo $data['ID']; ?>">
                                                    Delete
                                                </button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
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

        <!---------------------------------DataToggle  ----------------------------------------------->
        <?php 
        $ssql=mysqli_query($connect,"select * from subpro where userid = '$id'") or die(mysqli_error($connect));
        while($res= mysqli_fetch_array($ssql))
        {
        ?>
        <form method="POST" name="deleteprojectform">
            <div class="modal modal-warning fade" id="modal-warning<?php echo $res['ID']; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Do you really wish to delete the Project?</h4>
                        </div>
                        <div class="modal-body">
                            <p><small>(If yes then click on Delete or else clock on Cancel)</small></p>
                            <input type="hidden" value="<?php echo $res['ID']; ?>" name="hiddenid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>

                            <input type="submit" class="btn btn-outline" name="delete" value="Delete">
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </form>
        <!-- /.modal -->
        <?php } ?>

        <!-------------------------------- DataToggle ------------------------------------------------>

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
    <!-- DataTables -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
    </script>
</body>

</html>

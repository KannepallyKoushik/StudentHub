<?php include("dbconn.php"); 

if(!empty($_REQUEST['edit'])){
    $id = $_SESSION['id'];
    $sql = mysqli_query($connect,"select * from admin where id = '".$id."' ");
    $res = mysqli_fetch_array($sql);
}

if(isset($_POST['submitevent']))
{
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $phno = $_POST['phno'];
    $dept = $_POST['dept'];
    $clg = $_POST['clg'];
	
	
$updatesql = mysqli_query($connect,"update admin set name = '$name',rollno = '$rollno' ,phonenum = '$phno',college='$clg' ,department='$dept' where id = '".$id."'") or die(mysqli_error($conn));
    
	header("location:editdetails.php");

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
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include_once("headbar.php");?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include_once("sidebar.php");?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">

                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form method="POST" role="form" ">
              <div class=" box-body">



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="<?php  echo $res['name'];?>"></input>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hall ticket Number</label>
                                    <input type="text" name="rollno" class="form-control"
                                        value="<?php echo $res['rollno'] ;?>"></input>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact No</label>
                                    <input type="text" name="phno" class="form-control"
                                        value="<?php echo $res['phonenum'] ;?> "></input>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Department</label>
                                    <input type="text" name="dept" class="form-control"
                                        value="<?php echo $res['department']; ?> "></input>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">College</label>
                                    <input type="text" name="clg" class="form-control"
                                        value="<?php echo $res['college']; ?> "></input>
                                </div>




                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" name="submitevent" value="submit"></input>
                        </div>
                        </form>
                    </div>
                    <!-- /.box -->






                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">


                </div>
                <!--/.col (right) -->
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
    <script src="../bower_components/ckeditor/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
    </script>
</body>

</html>

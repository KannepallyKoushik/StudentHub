<?php
include_once("db.php");
$details="";
if(isset($_POST['t3']))
{
	$username=$_POST['t1'];
	$password=$_POST['t2'];
	$sql=mysqli_query($conn,"select * from admin where username='".$username."' and password='".$password."'") or die(mysqli_error($conn));
	$count=mysqli_num_rows($sql);
	if($count==1)
	{
    session_start();
		$res = mysqli_fetch_array($sql);
		$_SESSION['id']=$res['id'];
    $_SESSION['username']=$res['username'];
    $_SESSION['rollno']=$res['rollno'];
    $_SESSION['name']=$res['name'];
    $_SESSION['phonenum']=$res['phonenum'];
    $_SESSION['college']=$res['college'];
    $_SESSION['department']=$res['department'];
		header("location:./project/index.php");
	}
	else
	{
		$details="2";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>StudentHub</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

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

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>StudentHub</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <?php
  if($details==""){
  ?>
            <p class="login-box-msg">Sign in to start your Session</p>
            <?php } else {?>
            <p class="login-box-msg" style="color:red">Oops!Invalid Details.</p>
            <?php } ?>

            <form name="f" method="post">
                <div class="form-group has-feedback">
                    <input name="t1" type="text" class="form-control" placeholder="Email" autocomplete="off">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="t2" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-6" style="margin-left:25%">
                        <input type="submit" name="t3" value="login" class="btn btn-primary btn-block btn-flat">
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->
            <br>

            <a href="forgotpassword.php" class="text-center" style="padding-left: 5px;"> forgot password?</a>
            <a href="createaccount.php" class="text-center" style="padding-left: 115px;">Create Account</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
    </script>
</body>

</html>
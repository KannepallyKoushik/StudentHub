<?php include_once("db.php") ;

$error= "";
if(isset($_POST['register']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $repassword = $_POST['repwd'];
    $hallticket = $_POST['hallticket'];
    $department = $_POST['dept'];
    $college = $_POST['college'];
    $ph = $_POST['ph'];

    if($password != $repassword){
      $error = "Password and Re-type password must be same";
    }

    $adminsql = mysqli_query($conn,"select * from admin") or die(mysqli_error($conn));
     while($adminres = mysqli_fetch_array($adminsql))
     {
      if($adminres['username'] == $email){
             $error="This email already exists";
           }
      elseif($adminres['rollno'] == $hallticket){
             $error = "Person with this Hallticket already exists";
           }
      }
    
      switch ($error) {
        case "Password and Re-type password must be same":
            break;
        case "This email already exists":
            break;
        case "Person with this Hallticket already exists":
            break;
        case "":
               $sql = mysqli_query($conn,"insert into admin(username,password,rollno,name,phonenum,college,department) values('$email','$password','$hallticket','$fullname','$ph','$college','$department')") or die(mysqli_error($conn));
               header("location:index.php");
            break;
            
      }
 
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

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>StudentHub</b></a>
        </div>

        <div class="register-box-body">

            <?php if($error==""){ ?>
            <p class="login-box-msg">Register Here</p>
            <?php } else {?>
            <p class="login-box-msg" style="color:red"><?php echo $error; ?></p>
            <?php } ?>


            <form method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name" name="fullname" autocomplete="off"
                        required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off"
                        required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="pwd" autocomplete="off"
                        required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="repwd"
                        autocomplete="off" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="HallTicketNUmber" name="hallticket"
                        autocomplete="off" required>
                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="PhoneNumber" name="ph" autocomplete="off"
                        required>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Department" name="dept" autocomplete="off"
                        required>
                    <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="College Code" name="college" autocomplete="off"
                        required>
                    <span class="glyphicon glyphicon-education form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4" style="margin-left:30%">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"
                            name="register">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <br>
            <a href="index.php" class="text-center" style="margin-left:20%">I already have an account</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

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
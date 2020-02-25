<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>HUb</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Student</b>HUb</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <?php  
                      $id = $_SESSION['id'];
                      $helpnotificationsql= mysqli_query($connect,"select * from helpnotification where recieverid='$id' ORDER BY date DESC") or die(mysqli_error($connect));
                      $checkedcountsql= mysqli_query($connect,"select * from helpnotification where recieverid='$id' and checked='1' ") or die(mysqli_error($connect));
                      $checkcount = mysqli_num_rows($checkedcountsql);
                      $totalmsgscount= mysqli_num_rows($helpnotificationsql);
                      ?>
                        <span class="label label-success"><?php echo $checkcount; ?></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="header">You have <?php echo $totalmsgscount; ?> messages in total</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <?php while($help= mysqli_fetch_array($helpnotificationsql))
                              {
                                ?>
                                <li>
                                    <!-- start message -->
                                    <a href="viewnotification.php?notifyid=<?php echo $help['id']; ?>">
                                        <div class="pull-left">
                                            <img src="gni.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4><?php $namesql=mysqli_query($connect,"select * from admin where id='".$help['senderid']."'") or die(mysqli_error($connect)); 
                                        $nameres = mysqli_fetch_array($namesql);
                                        echo $nameres['name'];
                                        ?>

                                            <small><i class="fa fa-clock-o"></i> <?php echo $help['date']; ?></small>
                                        </h4>
                                        <p><?php echo $help['message']; ?></p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <?php }?>
                            </ul>
                        </li>
                        <li class="footer"><a href="allmsgs.php">See All Messages</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->

                <!-- Tasks: style can be found in dropdown.less -->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                        <span class="hidden-xs"><?php  echo $_SESSION['name'];?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->

                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default btn-flat">Home</a>
                            </div>
                            <div class="pull-right">
                                <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
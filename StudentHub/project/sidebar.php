<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="user.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <a href="editdetails.php"><b>
                        <h5><?php echo $_SESSION['name']; ?></h5>
                    </b></a>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>



            <li><a href="myprojects.php"><i class="fa fa-circle-o text-aqua"></i> <span>My Projects</span></a></li>
            <li><a href="myideas.php"><i class="fa fa-circle-o text-aqua"></i> <span>My Ideas</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>options</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php $id = $_SESSION['id']; ?>
                    <li><a href="editaccountdetails.php?edit=<?php echo $id; ?>"><i class="fa fa-circle-o"></i> Edit
                            Account Details</a></li>
                    <li><a href="deleteaccount.php"><i class="fa fa-circle-o"></i> Delete Account</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
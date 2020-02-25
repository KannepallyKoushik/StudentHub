<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img style="max-height:77px;margin-top:3px;"
                            src="logo-gni.jpg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Projects</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a class="nav-link" href="submit.php">Submit Project</a>
                                    <li class="nav-item"><a class="nav-link" href="viewproject.php">View Projects</a>

                                    <li class="nav-item"><a class="nav-link" href="help.php">Help a Project</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Innovations</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="postidea.php">Post Ideas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="listidea.php">List Ideas</a></li>
                                </ul>
                            </li>

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true"
                                    aria-expanded="false">Account(<?php echo $_SESSION['name']; ?>)</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="editdetails.php"> Account
                                            Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="signout.php">Sign Out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
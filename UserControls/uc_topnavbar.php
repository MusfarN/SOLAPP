<?php
include '/Project_BLL/p_loginBLL.php';
$p_loginBLL = new p_loginBLL();
$siteDetailArray = $p_loginBLL->getSiteDetails();
?>
<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-lg"><b><?php echo $siteDetailArray[1]; ?></b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/img/user.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $siteDetailArray[1]; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="assets/img/user.jpg" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $siteDetailArray[1]; ?>
                                <small><?php echo $siteDetailArray[1]; ?> DASHBOARD</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <a href="p_sessiondestroy.php" class="btn btn-default btn-flat btn-block">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
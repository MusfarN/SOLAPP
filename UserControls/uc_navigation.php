<?php
include_once '/Project_BLL/p_loginBLL.php';
$p_loginBLL = new p_loginBLL();
$userDetailArray = $p_loginBLL->getUserDetails($_SESSION["username"]);
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/img/user.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $userDetailArray[0]; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active"><a href="p_dashboard.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-file-audio-o"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="add_short_audio.php"><i class="fa fa-circle-o"></i> audit detail report</a></li>
                    <li><a href="edit_short_audio.php"><i class="fa fa-circle-o"></i> sales report</a></li>
                    <li><a href="edit_short_audio.php"><i class="fa fa-circle-o"></i> stock management report</a></li>
                    <li><a href="edit_short_audio.php"><i class="fa fa-circle-o"></i> monitoring report</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-book"></i> <span>Configuration</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="add_islahi_makatib.php"><i class="fa fa-circle-o"></i> Users</a></li>
                    <li><a href="edit_islahi_makatib.php"><i class="fa fa-circle-o"></i> Roles</a></li>
                    <li><a href="edit_islahi_makatib.php"><i class="fa fa-circle-o"></i> Settings</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-file-photo-o"></i> <span>Back Office</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="add_gallery.php"><i class="fa fa-circle-o"></i> Import/Export</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
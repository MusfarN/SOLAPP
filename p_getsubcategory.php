<?php
session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    header("location:p_login.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MFSPOSIV | Sub-Category</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> 
        <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/main.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>MFS POSIV</b></span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications Menu -->
                            <!-- Tasks Menu -->
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="assets/img/user.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">MFS POSIV</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="assets/img/user.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            MFS POSIV
                                            <small>MFS POSIV DASHBOARD</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <a href="p_sessiondestroy.php" class="btn btn-default btn-flat btn-block">Sign out</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="assets/img/user.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>USER ADMIN</p>
                            <!-- Status -->
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li><a href="p_dashboard.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
                        <li><a href="#"><i class="fa fa-send"></i> <span>Point of Sales (pos)</span></a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-headphones"></i> <span>Inventory Manager</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="bayan_category.php"><i class="fa fa-circle-o"></i> Monitoring</a></li>
                                <li><a href="add_bayan.php"><i class="fa fa-circle-o"></i> Add/Modify Inventory</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-send"></i> <span>CRM</span></a></li>
                        <li class="treeview active">
                            <a href="#"><i class="fa fa-server"></i> <span>Personalization</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="p_addcategory.php"><i class="fa fa-circle-o"></i> Add Category</a></li>
                                <li><a href="p_getcategory.php"><i class="fa fa-circle-o"></i> Modify Category</a></li>
                                <li><a href="p_addsubcategory.php"><i class="fa fa-circle-o"></i> Add Sub-Category</a></li>
                                <li class="active"><a href="p_getsubcategory.php"><i class="fa fa-circle-o"></i> Modify Sub-Category</a></li>
                                <li><a href="edit_cd_category.php"><i class="fa fa-circle-o"></i> Add/Modify Product</a></li>
                                <li><a href="edit_cd.php"><i class="fa fa-circle-o"></i> edit/view cd</a></li>
                            </ul>
                        </li>
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
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Sub-Category
                        <small>Control Panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active"> Sub-Category</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <form action="p_getsubcategory.php" role="form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <select class="form-control input-lg" name="category_id" required>
                                        <option disabled selected>Choose Category</option>
                                        <option>< ALL ></option>
                                        <?php
                                        include 'p_connect.php';
                                        $query = mysqli_query($connect, "CALL spcategoryfiller()");
                                        while ($fetch_category_query = mysqli_fetch_assoc($query)) {
                                            echo'<option value="' . $fetch_category_query["categoryID"] . '">';
                                            echo ucwords($fetch_category_query["category"]);
                                            echo'</option>';
                                        }
                                        ?>
                                    </select>
                                    <span class="glyphicon glyphicon-tag form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <select class="form-control input-lg" name="subcategory_id" required>
                                        <option disabled selected>Choose Sub-Category</option>
                                        <option>< ALL ></option>
                                        <?php
                                        include 'p_connect.php';
                                        $query = mysqli_query($connect, "CALL spsubcategoryfiller()");
                                        while ($fetch_subcategory_query = mysqli_fetch_assoc($query)) {
                                            echo'<option value="' . $fetch_subcategory_query["subcategoryID"] . '">';
                                            echo ucwords($fetch_subcategory_query["subcategory"]);
                                            echo'</option>';
                                        }
                                        ?>
                                    </select>
                                    <span class="glyphicon glyphicon-tags form-control-feedback"></span>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <input type="text" name="action" value="fetchsubcategory" hidden="">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form><br><br>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if ($_POST["action"] == "fetchsubcategory") {
                            ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Sub-Category List</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <table id="added-bayanaat" class="table table-bordered table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th>#.</th>
                                                        <th>Sub-Category</th>
                                                        <th>Category</th>
                                                        <th>Description</th>  
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include 'p_connect.php';
                                                    $category_id = mysqli_real_escape_string($connect, filter_input(INPUT_POST, "category_id"));
                                                    $subcategory_id = mysqli_real_escape_string($connect, filter_input(INPUT_POST, "subcategory_id"));
                                                    $query = mysqli_query($connect, "CALL spgetsubcategory('$category_id','$subcategory_id')");
                                                    $counter = 0;
                                                    while ($fetch_subcategory = mysqli_fetch_assoc($query)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo ++$counter . "."; ?></td>
                                                            <td><?php echo $fetch_subcategory["subcategory"]; ?></td>
                                                            <td><?php echo $fetch_subcategory["categoryname"]; ?></td>
                                                            <td><?php echo $fetch_subcategory["subcategory_description"]; ?></td>
                                                            <td><button class="btn btn-primary EditCategory" value="<?php echo $fetch_subcategory["subcategoryID"]; ?>" data-toggle="modal" data-target="#modifyModal"><i class = "fa fa-edit"></i> Edit</button></td>
                                                            <td><button class="btn btn-danger DeleteCategory" value="<?php echo $fetch_subcategory["subcategoryID"]; ?>" ><i class = "fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <?php
                        }
                        if ($_POST["action"] == "modifycategory") {
                            include 'p_connect.php';
                            $category_id = mysqli_real_escape_string($connect, filter_input(INPUT_POST, "category_id"));
                            $category_name = mysqli_real_escape_string($connect, filter_input(INPUT_POST, "category_name"));
                            $category_description = mysqli_real_escape_string($connect, filter_input(INPUT_POST, "category_description"));
                            $query = mysqli_query($connect, "CALL speditcategory('$category_id','$category_name','$category_description')");
                            if ($query) {
                                ?>
                                <script>
                                    $(document).ready(function () {
                                        $('#successful_addition').modal('show');
                                    });
                                </script>
                                <?php
                            } else {
                                ?>
                                <script>
                                    $(document).ready(function () {
                                        $('#unsuccessful_addition').modal('show');
                                    });
                                </script>
                                <?php
                            }
                        }
                    }
                    ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Modal -->
            <div class="modal fade" id="successful_addition" role="dialog">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <p>Sub-Category successfully added.</p>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="unsuccessful_addition" role="dialog">
                <div class="modal-dialog">

                    <!--                 Modal content-->
                    <div class="modal-content">

                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <p>Some technical error occurred.</p>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modifying Modal -->
            <div class="modal fade" id="modifyModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Category</h4>
                        </div>
                        <div class="modal-body">
                            <form action="p_getcategory.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input type="text" name="category_id" id="category_id" hidden="">
                                            <input type="text" class="form-control input-lg" name="category_name" id="category_name" placeholder="Category Name" required maxlength="50">
                                            <span class="glyphicon glyphicon-tag form-control-feedback"></span>
                                        </div>
                                    </div>       
                                    <div class="col-sm-12">
                                        <div class="form-group has-feedback">
                                            <textarea class="form-control input-lg" name="category_description" id="category_description" placeholder="Category Description (Optional)" rows="5" maxlength="200"></textarea>
                                            <span class="glyphicon glyphicon-comment form-control-feedback"></span>
                                        </div>
                                    </div>    
                                    <!-- /.col -->
                                    <div class="col-xs-6">
                                        <input type="text" name="action" value="modifycategory" hidden="">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    <strong>Powered by<a href="http://www.maynframez.com/" target="_blank"> MaynFramez Solutions</a></strong>
                </div>
                <!-- Default to the left -->
                <strong>©2018 All rights reserved. <a href="dashboard.html"> MFS POSIV Dashboard</a></strong>
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.2.0 -->
        <script src="assets/js/jQuery-2.2.0.min.js" type="text/javascript"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="assets/js/app.min.js" type="text/javascript"></script>
        <!-- DataTables -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.js"></script>
        <script src="assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

        <script>
                        $(function () {
                            $('#added-bayanaat').DataTable({
                                "paging": true,
                                "lengthMenu": [5, 10],
                                "searching": true,
                                "ordering": true,
                                "info": true,
                                "autoWidth": false,
                                responsive: true
                            });
                        });
                        $(".DeleteCategory").click(function () {
                            var categoryID = $(this).val();
                            $.ajax({
                                type: "POST",
                                url: "ajax/ajax_deletecategory.php",
                                data: {categoryID: categoryID},
                                dataType: "json",
                                success: function (query) {
                                    location.reload(false);
                                }
                            });
                        });
                        $(".EditCategory").click(function () {
                            var categoryID = $(this).val();
                            $.ajax({
                                type: "POST",
                                url: "ajax/ajax_editcategory.php",
                                data: {categoryID: categoryID},
                                dataType: "json",
                                success: function (category_array) {
                                    $("#category_id").val(category_array[0]["categoryID"]);
                                    $("#category_name").val(category_array[0]["category"]);
                                    $("#category_description").val(category_array[0]["description"]);
                                }
                            });
                        });
        </script>
    </body>
</html>
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
        <title>MFSPOSIV | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="assets/css/main.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <?php include_once './UserControls/uc_topnavbar.php'; ?>
            <!-- Menu Navigation -->
            <?php include_once './UserControls/uc_navigation.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <?php include_once './UserControls/uc_contentWrapper.php'; ?>
            <!-- Main Footer -->
            <?php include_once './UserControls/uc_footer.php'; ?>
        </div>
        <!-- REQUIRED JS SCRIPTS -->
        <script src="assets/js/jQuery-2.2.0.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/app.min.js" type="text/javascript"></script>
    </body>
</html>

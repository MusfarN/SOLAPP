<?php
include '/Project_BLL/p_loginBLL.php';
include_once '/Configuration/p_connect.php';
$p_connect = new p_connect();
$p_loginBLL = new p_loginBLL();
$siteDetailArray = $p_loginBLL->getSiteDetails();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $siteDetailArray[1] ?> | Login</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="assets/css/main.min.css" rel="stylesheet" type="text/css"/>       
        <link href="assets/css/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b><?php echo $siteDetailArray[0] ?></b> DASHBOARD</a>
            </div>
            <!-- /.login-logo -->
            <section class="login-error">
                <blockquote><strong>ERROR:</strong> Invalid username or password.</blockquote>
            </section>
            <div class="login-box-body">
                <img class="img-responsive" src="assets/img/user.png" width="50" height="50" alt="user image" style="width: 100px;border-radius: 50%; margin-bottom: 10px;">
                <form action="p_login.php" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control input-lg" placeholder="UserID" name="userid" required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
        <script src="assets/js/jQuery-2.2.0.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.login-error').hide();
            });
        </script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userid = mysqli_real_escape_string($p_connect->getConnectionDetails(), filter_input(INPUT_POST, "userid"));
            $password = mysqli_real_escape_string($p_connect->getConnectionDetails(), filter_input(INPUT_POST, "password"));
            $loginDetailArray = $p_loginBLL->getLoginDetails($userid, md5($password));
            if ($loginDetailArray[0] == 1) {
                header("location: p_dashboard.php");
                session_start();
                $_SESSION["username"] = $userid;
                $_SESSION["password"] = $password;
            } else {
                ?>
                <script>
                    $(document).ready(function () {
                        $('.login-error').show();
                        $('.login-box-body').effect("shake", {times: 3}, 300);
                    });

                </script>
                <?php
                mysqli_close($p_connect->getConnectionDetails());
            }
        }
        ?>
    </body>
</html>

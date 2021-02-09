<?php
session_start();
include './db.php';
if (isset($_POST["login"])) {
    $name = $_POST['user_name'];
    $password = $_POST['password'];
    if ( $name== 'admin'and $password=='admin') {
        $_SESSION["username"] = $_POST["user_name"];
        $_SESSION["password"] = $_POST["password"];
        header("location:dashboard.php");
    } else {
        $_SESSION['alert'] = "Invalid username & password...";
        header("location:index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="../img/online-learning.png">

        <script src="../js/angular.min.js"></script>
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/compiled.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/swipebox.css">
        <link href="../css/style.css" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../js/tether.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

        <script type="text/javascript" src="../js/wow.min.js"></script>
        <script type="text/javascript" src="../js/compiled.min.js"></script>
        <script type="text/javascript" src="../js/owl.carousel.min.js"></script>


        <script>
            new WOW().init();
        </script>
    </head>
    <body style="background:#D0D6E2">
        <div class="container_fluid">
            <div class="wrapper" style="padding-top:100px;">

                <div class="col-lg-4 offset-lg-4 fadeInLeft wow animated">

                    <!--Form with header-->
                    <div class="card">
                        <div class="card-block">
                            <form action="" method="POST">
                                <div class="form-header web-color">
                                    <h3 class="h3-responsive text-info"><i class="fa fa-user text-danger"></i> Admin</h3>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" name="user_name" id="form2" class="form-control">
                                    <label for="form2">User Name</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" name="password" id="form4" class="form-control">
                                    <label for="form4">Your password</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-info" name="login">Login</button>
                                </div>
                            </form>
                            <h5 class="text-center text-danger"><?php
                                echo @$_SESSION['alert'];
                                unset($_SESSION['alert']);
                                ?></h5>
                        </div>
                    </div>
                    <!--/Form with header-->

                </div>
            </div>
            <script>
                $("#success").click(function () {
                    toastr["success"]("Data Save Successfully.....", '', {
                        "positionClass": "toast-bottom-left",
                        "showEasing": "swing",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    });
                });
                $("#error").click(function () {
                    toastr["error"]("Sorry Try Again.......", "",
                            {
                                "positionClass": "toast-top-center"
                            });
                });


            </script> 
            <script type="text/javascript" src="../js/compiled.min.js"></script>
            <script type="text/javascript" src="../js/owl.carousel.min.js"></script>

            <script>

                $('.mdb-select').material_select();


            </script>

        </div>

    </body>

</html>
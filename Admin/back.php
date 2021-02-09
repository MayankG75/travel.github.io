<?php session_start();
include('../db.php');
if (empty($_SESSION["username"]) or empty($_SESSION["password"])) {
    header("location:index.php");
}
$q = "select * from login where user_name='$_SESSION[username]' and password='$_SESSION[password]'";
$res = mysqli_query($cn, $q);
$c = mysqli_num_rows($res);
if ($c == 0) {
    
}
mysqli_close($cn);
?>

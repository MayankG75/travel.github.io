<?php
include './back.php';
include './db.php';
$id= $_GET['id'];

$sql = mysqli_query($cn, "DELETE FROM `package` WHERE `Packid`='$id'");
if ($sql) {
    header("Location:./package.php");
} else {
    echo 'false';    
}

?>
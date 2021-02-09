<?php
include './back.php';
include './db.php';
$id= $_GET['id'];

$sql = mysqli_query($cn, "DELETE FROM `subcategory` WHERE `Subcatid`='$id'");
if ($sql) {
    header("Location:./subcate.php");
} else {
    echo 'false';    
}

?>
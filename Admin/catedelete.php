<?php
include './back.php';
include './db.php';
$id= $_GET['id'];

$sql = mysqli_query($cn, "DELETE FROM `category` WHERE `Cat_id`='$id'");
if ($sql) {
    header("Location:./category.php");
} else {
    echo 'false';    
}

?>
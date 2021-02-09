<?php

include 'db.php';
$data = array();
if (empty($_POST['name']) && empty($_POST['mobile'])) {
    $data['errors'] = 'Please fill the Form Before Send......';
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `online_reg`(`id`, `name`, `email`, `city`, `mobile`, `class`, `subject`, `message`) VALUES ('','$name','$email','$city','$mobile','$class','$subject','$message')";
    $res = mysqli_query($cn, $sql);
    if ($res) {
        $data['msg'] = 'Thanks For Registration Online.';
    } else {
        $data['msg'] = mysqli_error($cn);
    }
}

//$sql = 'SELECT * FROM teacher';
//$query = mysqli_query($cn, $sql);
//while ($res = mysqli_fetch_assoc($query)) {
//    $data[] = $res;
//}
$_POST = '';
echo json_encode($data);

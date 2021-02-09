<?php
include './db.php';
include './head.php';
error_reporting(0);
$iddd = $_GET['id'];
$mypack = "SELECT * FROM `package` WHERE `Packid`='$iddd'";
$myquery = mysqli_query($cn, $mypack);


if (isset($_POST['submit'])) {

    $packname = $_POST['packname'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $Days = $_POST['Days'];
    $Children = $_POST['Children'];
    $Adult = $_POST['Adult'];

    $mk = "INSERT INTO `enquiry`( `Packageid`, `Name`,  `Mobileno`, `Email`, `NoofDays`, `Child`, `Adults`) "
            . "VALUES ('$packname','$name','$mobile','$email','$Days','$Children','$Adult')";
    $myy = mysqli_query($cn, $mk);
    $me = '';
    if ($myy) {
        $me = '<label class="alert alert-primary" role="alert" style= "font-size: 30px;">...Thanks you...</label>';
    } else {
        $me = '<label class="">...please fill the form again...</label>';
    }
}
?>


<div class="row fadeInDown wow animated" style="background: url('img/contact.jpg') 100% 100%;padding:100px 0px 30px 0px;">
    <div class="container text-xs-center">
        <h1 class=" font-weight-bold text-uppercase" style="color: white;text-shadow:2px 0px 3px #000;">Enquiry</h1>
        <hr style="width: 300px; text-align: center;height:2px; background: grey;">
    </div>
</div>
<div class="container text-xs-center">
    <h1 class=" font-weight-bold text-uppercase" style="color: green;text-shadow:2px 0px 3px #000;"><?php echo $me ?></h1>
</div>
<div class="row mx-auto">
    <div class="col-lg-6 mx-auto card mt-4" style="background-color: #0092e4;">
        <form action="" method="post" class="text-white">
            <?php
            while ($row = mysqli_fetch_array($myquery)):
                ?>
                <div class="col-l2  form-group">
                    <label for="p1" class="fonts" style="font-size: x-large;">Package Name</label>
                    <input type="text" id="p1" style="font-size: x-large;" required="" class="form-control fonts  text-warning"  name="packname" value="<?= $row['Packname'] ?>" readonly="">
                </div>
                <?php
            endwhile;
            ?>
            <div class="col-12 form-group ">
                <label for="name1" class="fonts" style="font-size: x-large;"> Name</label>
                <input type="text" class="fonts text-white"  required=""style="font-size: x-large;" id="name1" class="form-control" name="name">
            </div>
            <div class="col-12 form-group ">
                <label for="n1" class="fonts" style="font-size: x-large;"> Mobile No</label>
                <input type="number" class="fonts text-white" required="" style="font-size: x-large;" id="n1" class="form-control" name="mobile">
            </div>
            <div class="col-12 ">
                <label for="email2" class="fonts" style="font-size: x-large;"> Email</label>
                <input type="email" class="fonts text-white " required="" style="font-size: x-large;" id="email2" class="form-control"  name="email" >
            </div>
            <div class="col-12 form-group ">
                <label for="Days" class="fonts" style="font-size: x-large;"> No.of Days:</label>
                <input type="text" class="fonts text-white" required="" style="font-size: x-large;" id="Days" class="form-control" name="Days">
            </div>
            <div class="col-12 ">
                <label for="Children" class="fonts" style="font-size: x-large;"> No.of Children</label>
                <input type="number" class="fonts text-white" required="" style="font-size: x-large;" id="Children" class="form-control"  name="Children" >
            </div>
            <div class="col-12 ">
                <label for="Adult" class="fonts" style="font-size: x-large;"> No.of Adults</label>
                <input type="number" class="fonts text-white" required="" style="font-size: x-large;" id="Adult" class="form-control"  name="Adult">
            </div>
            <div class="col-12 text-center p-2">
                <button class="btn btn-danger fonts " name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php
include './footer.php';
?>
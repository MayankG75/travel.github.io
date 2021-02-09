<?php
include 'head.php';
include './db.php';
error_reporting(0);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    echo $name . $mob . $email . $subject . $message;
    $sli = "INSERT INTO `contact`(`name`,`mobile`,`subject`,`message`) VALUES ('$name','$mob','$subject','$message')";
    $qul = mysqli_query($cn, $sli);
    $me = '';
    if ($qul) {
        $me = '<label class="" style= "font-size: 30px;">...Thanks you...</label>';
    } else {
        $me = '<label class="">...please fill the form again...</label>';
    }
}
?>
<div class="row fadeInDown wow animated" style="background: url('img/contact.jpg') 100% 100%;padding:100px 0px 30px 0px;">
    <div class="container text-xs-center">
        <h1 class=" font-weight-bold text-uppercase" style="color: white;text-shadow:2px 0px 3px #000;">contact us</h1>
        <hr style="width: 300px; text-align: center;height:2px; background: grey;">
    </div>
</div>
<div class="row">
    <div class="col-md-7 mx-auto">
        <div class="" style="padding: 15px;"> 
            <iframe class="z-depth-1" style="width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782.5551697733189!2d77.68885534293732!3d27.446887809357836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397376dd425c5f47%3A0x60194e1bbf37840c!2sNawada+Mathura!5e0!3m2!1sen!2sin!4v1516589805455" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <br>
        <!--Buttons-->
        <div class="row text-center">
            <div class="col-md-4">
                <a class="btn-floating btn-small mdb-color"><i class="fa fa-map-marker"></i></a>
                <p>
                    1100 High Street, Model Town Mathura.
                </p>
            </div>

            <div class="col-md-4">
                <a class="btn-floating btn-small mdb-color"><i class="fa fa-phone"></i></a>
                <p>+ 01 234 567 89</p>
                <p>Mon - Fri, 8:00-18:00</p>
            </div>

            <div class="col-md-4">
                <a class="btn-floating btn-small mdb-color"><i class="fa fa-envelope"></i></a>
                <p>info@mytour.com</p>
            </div>
        </div>

    </div>
    <!--/Second column-->

</div>


<?php include 'footer.php'; ?>
<script>
    $(document).ready(function () {
        $('.navbar').addClass('top-nav-collapse');
    });
    $(window).scroll(function () {
        $(".navbar").addClass('top-nav-collapse');
    });
</script>
<?php
include 'head.php';
include './db.php';

?>
<div class="row fadeInDown wow animated" style="background:url(images/beach3.jpg);padding:100px 0px 30px 0px;">
    <div class="container text-xs-center">
        <h1 class=" font-weight-bold text-uppercase" style="color: green;text-shadow:2px 0px 3px #000;">Gallery</h1>
        <hr style="width: 300px; text-align: center;height:2px; background: green;">
    </div>
</div>
<div class="row p-2">
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/61.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/65.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/48.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/42.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/40.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/45.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/96.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/3.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/34.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/71.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/104.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/105.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/85.jpg" alt="" class=" w-100">
        </a>
    </div>
    <div class="col-lg-3 p-2 col-12">
        <a href="#" class="swipebox"  title="Annual Day Celebration">
            <img src="images/projectpics/91.jpg" alt="" class=" w-100">
        </a>
    </div>

</div>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $(".swipebox").swipebox();
    });
</script>
<?php include 'footer.php'; ?>
<script>
    $(document).ready(function () {
        $('.navbar').addClass('top-nav-collapse');
    });
    $(window).scroll(function () {
        $(".navbar").addClass('top-nav-collapse');
    });



</script>
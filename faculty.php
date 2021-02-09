<?php
include 'head.php';
include './db.php';
$sql= "SELECT * FROM teacher";
$query = mysqli_query($cn, $sql);
?>


<div class="row fadeInDown wow animated" style="background:url('img/education-header.jpg')100% 100%; opacity:0.2; padding:100px 0px 30px 0px;">
    <div class="container text-xs-center">
        <h1 class=" font-weight-bold text-uppercase" style="color: white;text-shadow:2px 0px 3px #000;">Faculty</h1>

    </div>
</div>
<div class="row m-5">
    <div class="col-lg-5 col-12 p-0  mx-auto z-depth-1 mb-4   fadeInLeft animated">
        <div class="col-lg-5 col-12 p-0">
            <img class="w-100" src="img/roop.jpg">
        </div>
        <div class="col-lg-7 col-12 p-2">
            <h4 class="web-text-color text-left font-weight-bold">Dr. Roopchand Kashyap</h4>
            <h6 class="font-weight-normal">(Ph.D.,M.Tech.,MCA)</h6><br>
            <p class=""><b>Designation:</b>Director & Professor</p>
        </div>
    </div>
    <?php while ($row = mysqli_fetch_object($query)): ?>
    <div class="col-lg-5 col-12 p-0 z-depth-1 mx-auto mb-4   fadeInRight animated">
        <div class="col-lg-5 col-12 p-0">
            <img class="w-100" src="T_img/<?=$row->img?>">
        </div>
        <div class="col-lg-7 col-12 p-2">
            <h4 class="web-text-color text-left font-weight-bold"><?=$row->T_name?></h4>
            <h6 class="font-weight-normal">(<?=$row->qual?>)</h6><br>
            <p class=""><b>Designation:</b><?=$row->designation?></p>
        </div>
    </div>
    <?php endwhile; ?>
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

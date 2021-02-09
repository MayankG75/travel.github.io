<?php
include 'head.php';
include './db.php';
$id = $_GET['id'];

$sql1 = "SELECT * FROM `subcategory` WHERE `Catid`='$id'";
$query1 = mysqli_query($cn, $sql1);



$sql2 = "SELECT * FROM `category` WHERE `Cat_id`='$id'";
$query2 = mysqli_query($cn, $sql2);
?>
<div class="row fadeInDown wow animated fonts" style="background:url('img/abt.jpg') 100% 100%;padding:100px 0px 30px 0px;">
    <?php
    while ($row2 = mysqli_fetch_object($query2)) :
        ?>
        <div class="container text-xs-center">
            <h1 class=" text-uppercase" style="color:white;text-shadow:2px 0px 3px #000;">
                <?= $row2->Cat_name ?>

            </h1>

        </div>
        <?php
    endwhile;
    ?>
</div>
<div class="row m-4 fonts">
    <div class="col-lg-12s">
        <div class="row ">

            <?php
            while ($row1 = mysqli_fetch_object($query1)) :
                ?>
                <div class="col-3">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="Admin/subcatimages/<?= $row1->Pic ?>" alt="Card image cap">
                        <div class="card-body p-2">
                            <h5 class="card-title" style=""> <?= $row1->Subcatname ?></h5>
                        </div>
                        <div class="card-footer p-2 text-right">
                            <a class="btn btn-sm btn-info" href="package1.php?id=<?= $row1->Subcatid; ?>">View Details</a>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            ?>
        </div>
    </div>
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
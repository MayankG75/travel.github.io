<?php
include './db.php';
include 'head.php';
$idd = $_GET['id'];
echo $idd;
$sql2 = "SELECT * FROM `package` WHERE `Subcategory`='$idd' ";
$query2 = mysqli_query($cn, $sql2);
?>
<div class="row mt-6">
    <div class="row m-4">
        <div class="col-lg-12">
            <div class="row ">

                <?php
                while ($row1 = mysqli_fetch_object($query2)) :
                    ?>
                    <div class="col-3">
                        <div class="card mx-auto">
                            <h5 class="card-title text-center" style="font-family: fantasy;"> <?= $row1->Packname ?></h5>
                            <h5 class="card-title text-center" style="font-family: fantasy;"> <?= $row1->Packprice ?></h5>
                            <div class="card-body">
                                <img class="card-img-top" src="Admin/subcatimages/<?= $row1->Pic ?>" alt="Card image cap">
                            </div>
                            <div class="card-footer">
                                <!--<a class="btn btn-sm btn-info" href="package1?id=<?= $row1->Subcatid; ?>">View Details</a>-->
                            </div>
                            <div class="">
                                <p><?= $row1->Detail ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

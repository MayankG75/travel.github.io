<?php
include './db.php';
include 'head.php';
$idd = $_GET['id'];
//echo $idd;
$sql2 = "SELECT * FROM `package` WHERE `Subcategory`='$idd' ";
$query2 = mysqli_query($cn, $sql2);
?>
<div class="row mt-6 fonts text-danger">
    <div class="row m-4">
        <div class="col-lg-12">
            <div class="row ">

                <?php
                while ($row1 = mysqli_fetch_object($query2)) :
                    ?>
                    <div class="col-6 mx-auto">
                        <div class="card mx-auto">

                            <?php
                            $cateid = $row1->Category;
                            $q1 = "SELECT * FROM `category` WHERE `Cat_id`= '$cateid'";
                            $q = mysqli_query($cn, $q1);

                            while ($row11 = mysqli_fetch_object($q)):
                                ?>
                            <div class="fonts text-center fa-2x text-success">
                                <b><?= $row11->Cat_name ?></b>
                            </div>
                                <?php
                            endwhile;
                            ?>

                            <table class="table table-responsive card-body"> 
                                <tbody class="">
                                    <tr>
                                        <td>
                                            <img class="card-img" src="Admin/packimages/<?= $row1->Pic1; ?>" alt="Card image cap">
                                        </td>
                                        <td>
                                            <img class="card-img    " src="Admin/packimages/<?= $row1->Pic2; ?>" alt="Card image cap">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <h5 class="h5-responsive text-left" > <?= $row1->Packname ?></h5>

                                        </td>
                                        <td>
                                            <h5 class="card-title text-right">Price -> <?= $row1->Packprice ?></h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="m-1">
                                <dl class="p-2">
                                    <dt>Detail</dt>
                                    <dd><?= $row1->Detail ?></dd>
                                </dl>
                            </div>
                            <div class=" text-right mb-1 mr-1">
                                <a class="btn btn-sm bg-success" href="enquiry.php?id=<?= $row1->Packid ?>">Enquiry</a>
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

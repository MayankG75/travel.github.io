<?php
include 'head.php';
include './db.php';

$sql2 = "SELECT * FROM `category` ";
$query2 = mysqli_query($cn, $sql2);
?>
<div class="row mt-6 fonts">
    <div class="col-lg-12 justify-content-center mt-3 mb-3 ">
        <?php
        while ($row1 = mysqli_fetch_object($query2)) :
            ?>
            <div class="col-lg-4 p-2">
                <div class="card bg-info zoomInUp wow animated " style="min-height: 90px;border-radius: 25% 0%;">
                    <a href="package.php?id=<?= $row1->Cat_id ?>">
                        <div class="card-block text-white">
                            <h3 class="text-uppercase text-center">
                                <?= $row1->Cat_name ?>
                            </h3>

                        </div>
                    </a>

                </div>
            </div>
            <?php
        endwhile;
        ?>
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
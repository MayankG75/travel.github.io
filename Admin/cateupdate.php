<?php
include './back.php';
include './admin-head.php';
include './db.php';
$id = $_GET['id'];
$cname = $_GET['cname'];
//echo $id;
//echo $cname;
if (isset($_POST['submit'])) {
    $catname = $_POST['catrname'];
    $sql = mysqli_query($cn, "UPDATE `category` SET `Cat_name`='$catname' WHERE `Cat_id`='$id'");
    if ($sql) {
        header("Location:category.php");
    } else {
        echo 'noo,....';
    }
}
?>
<div class="row mx-auto mt-5">
    <div class="col-4 card card-block mx-auto mt-5">
        <form method="post" action="">
            <div class="row  ">
                <div class="col-12">
                    <label for="mm">Category Update</label>
                    <input value="<?= $_GET['cname'] ?>" id="mm" name="catrname" class="form-control-static">
                </div>
            </div>
            <div class="">
                <button class="btn btn-secondary btn-sm" type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>
</div>
<?php
include './admin-footer.php';
?>
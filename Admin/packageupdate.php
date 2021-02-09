<?php
include './back.php';
include './admin-head.php';
include './db.php';
$id = $_GET['id'];
//$cname = $_GET['cname'];
echo $id;
$sql2 = mysqli_query($cn, "SELECT * FROM `category`");
$aa = "SELECT * FROM package INNER JOIN subcategory ON package.Subcategory=subcategory.Subcatid INNER JOIN category ON package.Category= category.Cat_id Where package.Packid = '$id'";
$uus = mysqli_query($cn, $aa);

if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $cateid = $_POST['cateid'];
    $subcateid = $_POST['subcateid'];
    $packprice = $_POST['packprice'];
    $detail = $_POST['detail'];
    $fnname = $_FILES['uploadedfile']["name"];
    ;
    $fname = $_FILES['uploadfile']["name"];
    if (empty($fname)) {

        $sl = mysqli_query($cn,"UPDATE `package` SET `Packname`='$pname',`Category`='$cateid',`Subcategory`='$subcateid',`Packprice`='$packprice',`Pic2`='$fnname',`Detail`='$detail' WHERE `Packid`='$id'");
        echo $sl;
        if ($sl) {
            Header("Location:./package.php");
        } else {
            echo mysqli_error($cn);
        }
    } else if (empty($fnname)) {
        $sl = mysqli_query($cn, "UPDATE `package` SET `Packname`='$pname',`Category`='$cateid',`Subcategory`='$subcateid',`Packprice`='$packprice',`Pic1`='$fname',`Detail`='$detail' WHERE `Packid`='$id'");
        echo $sl;
        if ($sl) {
            Header("Location:./package.php");
        } else {
            echo mysqli_error($cn);
        }
    } else {

        $tname = $_FILES['uploadfile']["tmp_name"];
        $folder = $fname;
        move_uploaded_file($tname, $folder);
        $tnname = $_FILES['uploadedfile']["tmp_name"];
        $folder2 = $fnname;
        move_uploaded_file($tnname, $folder2);
        $sl = mysqli_query($cn, "UPDATE `package` SET `Packname`='$pname',`Category`='$cateid',`Subcategory`='$subcateid',`Packprice`='$packprice',`Pic1`='$fname',`Pic2`='$fnname',`Detail`='$detail' WHERE `Packid`='$id'");
        echo $sl;
        if ($sl) {
            Header("Location:./package.php");
        } else {
            echo mysqli_error($cn);
        }
    }
}
?>
<div class="row mt-4">
    <div class="col-lg-6 bg-danger">
        <form method="post" action="" enctype="multipart/form-data">
            <?php
            while ($row1 = mysqli_fetch_object($uus)):
                ?>
                <div class="card mx-auto">
                    <div class="card-header text-center">
                        <strong >Package Update</strong>
                    </div>
                    <div class="card-block">

                        <div class="col-12 form-group mt-1">
                            <label for="pack" class="font-weight-bold">Package Name</label>
                            <input class="form-control" id="pack" name="pname" value="<?= $row1->Packname ?>" type="text" placeholder="Enter the package Name" required="" >
                        </div> 
                        <div class="row">
                            <div class="col-lg-6">
                                <label  class="font-weight-bold">Category</label>
                                <select class="browser-default custom-select" name="cateid">
                                    <option value="<?= $row1->Cat_id ?>"><?= $row1->Cat_name ?></option>
                                    <?php
                                    while ($row4 = mysqli_fetch_object($sql2)) :
                                        ?>
                                        <option value="<?= $row4->Cat_id ?>"><?= $row4->Cat_name ?></option>
                                        <?php
                                    endwhile;
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label  class="font-weight-bold">Sub Category</label>
                                <select class="browser-default custom-select" name="subcateid">
                                    <option value="<?= $row1->Subcatid ?>"><?= $row1->Subcatname ?></option>
                                    <?php
                                    $sql3 = mysqli_query($cn, "SELECT * FROM `subcategory`");

                                    while ($row5 = mysqli_fetch_object($sql3)) :
                                        ?>
                                        <option value="<?= $row5->Subcatid ?>"><?= $row5->Subcatname ?></option>
                                        <?php
                                    endwhile;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 form-group mt-1">
                            <label for="cate" class="font-weight-bold">Package Price</label>
                            <input class="form-control" id="cate" name="packprice" value="<?= $row1->Packprice ?>" type="text" placeholder="Enter the Package Price" required="" >
                        </div> 
                        <div class="row">
                            <div class="col-lg-3 mx-auto">
                                <img src="<?= $row1->Pic1 ?>" class="w-100 " id="preview" >  
                                <div class="text-center">
                                    <label class="btn btn-primary btn-sm">
                                        <input type="file" name="uploadfile" onchange="$('#preview').attr('src', window.URL.createObjectURL(this.files[0]))" class="hidden-xs-up">
                                        choose 1 image
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 mx-auto ">
                                <img src="<?= $row1->Pic2 ?>" class="w-100 " id="pview" >  
                                <div class="text-center">
                                    <label class="btn btn-primary btn-sm">
                                        <input type="file" name="uploadedfile" onchange="$('#pview').attr('src', window.URL.createObjectURL(this.files[0]))" class="hidden-xs-up">
                                        choose 2 image
                                    </label>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12 form-group mt-2">
                            <label  class="font-weight-bold">Detail</label>
                            <textarea class="form-control"  value="<?= $row1->Detail ?>" name="detail"  placeholder="Enter Details" required=""></textarea>
                        </div> 
                        <div class="text-lg-center">
                            <button type="submit" name="submit" class="btn btn-small btn-success text-center  ">Submit</button>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            ?>
        </form>
    </div>
</div>
<?php
include './admin-footer.php';
?>

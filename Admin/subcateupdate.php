<?php
include './back.php';
include './admin-head.php';
include './db.php';
$id = $_GET['id'];
////$cname = $_GET['cname'];
//echo $id;

$sql = mysqli_query($cn, "SELECT * FROM `category`");
$aa = "SELECT * FROM `subcategory`INNER JOIN category ON subcategory.catid = category.cat_id Where `subcategory`.`Subcatid` ='$id'";
$us = mysqli_query($cn, $aa);

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $cateid = $_POST['cateid'];
    $subname = $_POST['subname'];
    $detail = $_POST['detail'];
//    echo $detail;
    $fname = $_FILES['uploadfile']["name"];
    if (empty($fname)) {
        
        $sl = mysqli_query($cn, "UPDATE `subcategory` SET `Subcatname`='$subname',`Catid`='$cateid',`Details`='$detail' WHERE `Subcatid`='$id'");
        echo $sl;
        if ($sl) {
            Header("Location:./subcate.php");
        } else {
            echo mysqli_error($cn);
        }
    } else {

        $tname = $_FILES['uploadfile']["tmp_name"];
        $folder = $fname;
        move_uploaded_file($tname, $folder);
        $sl = mysqli_query($cn, "UPDATE `subcategory` SET `Subcatname`='$subname',`Catid`='$cateid',`Pic`='$folder',`Details`='$detail' WHERE `Subcatid`='$id'");
        echo $sl;
        if ($sl) {
            Header("Location:./subcate.php");
        } else {
            echo mysqli_error($cn);
        }
    }
}
?>
<div class="row mt-5">
    <div class="col-lg-3">
        <form method="post" action="" enctype="multipart/form-data">
            <?php
            while ($row1 = mysqli_fetch_object($us)):
                ?>
                <div class="card mx-auto">
                    <div class="card-header text-center">
                        <strong >Sub Category</strong>
                    </div>
                    <div class="card-block">

                        <label  class="font-weight-bold">Category</label>
                        <select class="browser-default custom-select" name="cateid">
                            <option value="<?= $row1->Cat_id ?>"><?= $row1->Cat_name ?></option>
                            <?php
                            while ($row = mysqli_fetch_object($sql)) :
                                ?>
                                <option value="<?= $row->Cat_id ?>"><?= $row->Cat_name ?></option>
                                <?php
                            endwhile;
                            ?>
                        </select>
                        <div class="col-12 form-group mt-1">
                            <label for="cate" class="font-weight-bold">Sub Category</label>
                            <input class="form-control" value="<?= $row1->Subcatname ?>" id="cate" name="subname" type="text"  required="" >
                        </div> 
                        <div class="row">
                            <div class="col-lg-3 ">
                                <img src="subcatimages/<?= $row1->Pic ?>" class="w-100 " id="preview" >  
                                <div class="text-center">
                                    <label class="btn btn-primary btn-sm">
                                        <input type="file" name="uploadfile" onchange="$('#preview').attr('src', window.URL.createObjectURL(this.files[0]))" class="hidden-xs-up">
                                        choose image
                                    </label>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12 form-group mt-2">
                            <label for="cate" class="font-weight-bold">Detail</label>
                            <input class="form-control"  value="<?= $row1->Details ?>" id="cate" name="detail"   required="">
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


<?php
while ($row1 = mysqli_fetch_object($us)):
    ?>
<!--    <tr>
        <td><?= $row1->Subcatname ?></td>
        <td><?= $row1->Cat_name ?></td>
        <td><img src="<?= $row1->Pic ?>"  height="100px" width="100px"></td>
        <td><?= $row1->Details ?></td>
        <td><a href="subcateupdate.php?id=<?= $row1->Subcatid ?>" class="btn btn-success btn-sm">Edit</a></td>
        <td><a href="subcatedelete.php?id=<?= $row1->Subcatid ?>" class="btn btn-danger btn-sm">Delete</a></td>

    </tr>-->
    <?php
endwhile;
?>
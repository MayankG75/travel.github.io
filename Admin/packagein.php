<?php
include './back.php';
include './admin-head.php';
include './db.php';
$sql2 = mysqli_query($cn, "SELECT * FROM `category`");
if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $cateid = $_POST['cateid'];
    $subcateid = $_POST['subcateid'];
    $packprice = $_POST['packprice'];
    $details = $_POST['details'];
    $fname = $_FILES['uploadfile']["name"];
    $tname = $_FILES['uploadfile']["tmp_name"];
    $folder =  $fname;
    move_uploaded_file($tname, $folder);
    $fnname = $_FILES['uploadedfile']["name"];
    $tnname = $_FILES['uploadedfile']["tmp_name"];
    $folder2 = $fnname;
    move_uploaded_file($tnname, $folder2);
    $sl = mysqli_query($cn, "INSERT INTO `package`(`Packname`, `Category`, `Subcategory`, `Packprice`, `Pic1`, `Pic2`, `Detail`) VALUES ('$pname','$cateid','$subcateid','$packprice','$folder','$folder2','$details')");
    if ($sl) {
        Header("Location:./package.php");
    } else {
        
    }
}
?>
<div class="row">
    <div class="col-lg-4 mx-auto">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="card mx-auto">
                <div class="card-header text-center">
                    <strong >Package</strong>
                </div>
                <div class="card-block">

                    <div class="col-12 form-group mt-1">
                        <label for="pack" class="font-weight-bold">Package Name</label>
                        <input class="form-control" id="pack" name="pname" type="text" placeholder="Enter the package Name" required="" >
                    </div> 
                    <div class="row">
                        <div class="col-lg-6">
                            <label  class="font-weight-bold">Category</label>
                            <select class="browser-default custom-select" name="cateid">
                                <option>Select Option</option>
                                <?php
                                while ($row = mysqli_fetch_object($sql2)) :
                                    ?>
                                    <option value="<?= $row->Cat_id ?>"><?= $row->Cat_name ?></option>
                                    <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label  class="font-weight-bold">Sub Category</label>
                            <select class="browser-default custom-select" name="subcateid">
                                <option>Select Option</option>
                                <?php
                                $sql3 = mysqli_query($cn, "SELECT * FROM `subcategory`");

                                while ($row = mysqli_fetch_object($sql3)) :
                                    ?>
                                    <option value="<?= $row->Subcatid ?>"><?= $row->Subcatname ?></option>
                                    <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 form-group mt-1">
                        <label for="cate" class="font-weight-bold">Package Price</label>
                        <input class="form-control" id="cate" name="packprice" type="text" placeholder="Enter the Package Price" required="" >
                    </div> 
                    <div class="row">
                        <div class="col-lg-3 mx-auto">
                            <img src="packimages/d.jpg" class="w-100 " id="preview" >  
                            <div class="text-center">
                                <label class="btn btn-primary btn-sm">
                                    <input type="file" name="uploadfile" onchange="$('#preview').attr('src', window.URL.createObjectURL(this.files[0]))" class="hidden-xs-up">
                                    choose 1 image
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 mx-auto ">
                            <img src="packimages/d.jpg" class="w-100 " id="pview" >  
                            <div class="text-center">
                                <label class="btn btn-primary btn-sm">
                                    <input type="file" name="uploadedfile" onchange="$('#pview').attr('src', window.URL.createObjectURL(this.files[0]))" class="hidden-xs-up">
                                    choose 2 image
                                </label>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 form-group mt-2">
                        <label for="cate" class="font-weight-bold">Detail</label>
                        <input class="form-control" id="cate" name="details"  placeholder="Enter Details" required="">
                    </div> 
                    <div class="text-lg-center">
                        <button type="submit" name="submit" class="btn btn-small btn-success text-center  ">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include './admin-footer.php';
?>
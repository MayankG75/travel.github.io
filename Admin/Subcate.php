<?php
include './back.php';
include './admin-head.php';
include './db.php';


$sql = mysqli_query($cn, "SELECT * FROM `category`");

if (isset($_POST['submit'])) {
    $cateid = $_POST['cateid'];
    $subname = $_POST['subname'];
    $detail = $_POST['detail'];

    $fname = $_FILES['uploadfile']["name"];
    $tname = $_FILES['uploadfile']["tmp_name"];
    $folder =  $fname;
    move_uploaded_file($tname, $folder);
    $sl = mysqli_query($cn, "INSERT INTO `subcategory`(`Subcatname`, `Catid`, `Pic`, `Details`) VALUES ('$subname','$cateid','$folder','$detail')");
    if ($sl) {
        Header("Location:./subcate.php");
    } else {
        
    }
}
?>





<div class="row mx-auto mt-5">
    <div class="col-lg-3">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="card mx-auto">
                <div class="card-header text-center">
                    <strong >Sub Category</strong>
                </div>
                <div class="card-block">

                    <label  class="font-weight-bold">Category</label>
                    <select class="browser-default custom-select" name="cateid">
                        <option>Select Option</option>
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
                        <input class="form-control" id="cate" name="subname" type="text" placeholder="Enter the Sub Category Name" required="" >
                    </div> 
                    <div class="row">
                        <div class="col-lg-3 ">
                            <img src="subcatimages/d.jpg" class="w-100 " id="preview" >  
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
                        <textarea class="form-control" id="cate" name="detail"  placeholder="Enter Details" required=""></textarea>
                    </div> 
                    <div class="text-lg-center">
                        <button type="submit" name="submit" class="btn btn-small btn-success text-center  ">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-8" style=" max-height: 500px;overflow-y: scroll;">
        <table class="table table-responsive">
            <tr>
                <th>Sno.</th>
                <th>SubCategory</th>
                <th>Category</th>
                <th>Picture</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
            <tbody>
                <?php
                $aa = "SELECT * FROM `subcategory`INNER JOIN category ON subcategory.catid = category.cat_id  ORDER BY `subcategory`.`Subcatid` DESC";
                $us = mysqli_query($cn, $aa);
                $ii = 1;
                while ($row1 = mysqli_fetch_object($us)):
                    ?>
                    <tr>
                        <td><?= $ii ?></td>
                        <td><?= $row1->Subcatname ?></td>
                        <td><?= $row1->Cat_name ?></td>
                        <td><img src="subcatimages/<?= $row1->Pic ?>"  height="100px" width="100px"></td>
                        <td><?= $row1->Details ?></td>
                        <td><a href="subcateupdate.php?id=<?= $row1->Subcatid ?>" class="btn btn-success btn-sm">Edit</a></td>
                        <td><a href="subcatedelete.php?id=<?= $row1->Subcatid ?>" class="btn btn-danger btn-sm">Delete</a></td>

                    </tr>
                    <?php
                    $ii++;
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include './admin-footer.php';
?>
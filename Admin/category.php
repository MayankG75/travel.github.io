<?php
include './back.php';
include './admin-head.php';
include './db.php';
//include './index.php';

$sql = mysqli_query($cn, "SELECT * FROM `category` ORDER BY `Cat_id` DESC");

if(isset($_POST['submit'])){
    $name=$_POST['cname'];
    $sl = mysqli_query($cn, "INSERT INTO `category`(`Cat_name`) VALUES ('$name')");
    if($sl){
        Header("Location:./category.php");
    } else {   
    }
};
?>
<div class="row mt-5">
    <div class="col-3 mx-auto">
        <form method="post" action="">
            <div class="card mx-auto">
                <div class="card-header">
                    <strong>Category</strong>
                </div>
                <div class="card-block">
                    <div class="col-12 form-group">
                        <label for="cate" class="font-weight-bold">Name</label>
                        <input class="form-control" id="cate" name="cname" type="text" placeholder="Enter the Category" required="" >
                    </div> 
                    <div class="text-lg-center">
                        <button type="submit" name="submit" class="btn btn-small btn-success text-center  ">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-5 mx-auto" style=" max-height: 500px;overflow-y: scroll;">
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                while ($row = mysqli_fetch_object($sql)):
                ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row->Cat_name?></td>
                    <td><a class="btn btn-sm btn-success" href="cateupdate.php?id=<?=$row->Cat_id ?>&&cname=<?=$row->Cat_name ?>">Edit</a></td>
                    <td><a class="btn btn-sm btn-danger" href="catedelete.php?id=<?=$row->Cat_id ?>">Delete</a></td>
                </tr>
                <?php
                $i++;
            endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include './admin-footer.php';
?>
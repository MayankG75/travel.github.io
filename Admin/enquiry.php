<?php
include './back.php';
include './admin-head.php';
include './db.php';

$en = mysqli_query($cn, "SELECT * FROM `enquiry`");
?>

<div class="row mt-5">
    <div class="col-lg-7 mx-auto text-center" style=" max-height: 500px;overflow-y: scroll;">
        <div class="row">
            <div class="col-lg-12 bg-info p-2">
                <div class="text-center ">
                    <h2 class="h2-responsive text-center font-weight-bold">Enquiry</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Package Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Mobile NO.</th>
                    <th>NO of Days</th>
                    <th>Child</th>
                    <th>Adults</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i1 = 1;
                while ($row = mysqli_fetch_object($en)) :
                    ?>
                    <tr>
                        <td><?= $i1 ?></td>
                        <td><?= $row->Packageid ?></td>
                        <td><?= $row->Name ?></td>
                        <td><?= $row->Email ?></td>
                        <td><?= $row->Mobileno ?></td>
                        <td><?= $row->NoofDays ?></td>
                        <td><?= $row->Child ?></td>
                        <td><?= $row->Adults ?></td>
                    </tr>
                    <?php
                    $i1++;
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include './admin-footer.php';
?>
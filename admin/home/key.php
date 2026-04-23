
<?php

include("../connection.php");

if(!empty($_GET['Id']))
    {
    $did = $_GET['Id'];
    
    $delete = "DELETE FROM `key_clinetele` WHERE Id='$did'";
    $run = mysqli_query($conn, $delete);
    if($run){
    ?>
    <script>alert("Key clinetele delete successfully");
    window.location.href="key.php;</script>
    <?php
    }
    }

?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Home | KEY CLIENTELE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">
<?php
require ("../folderheader.php");
require ("../foldersidebar.php");
?>

<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">KEY CLIENTELE</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Key Clientele</a></li>
                                <li class="breadcrumb-item active">Key</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form class="g-4" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="mb-3 col-lg-12">
                            <table id="data_table" class="table">
                                            <!-- Your table headers -->
                                            <tr>
                                            <th colspan="2" class="text-black" >Service Point:</th>
                                            </tr>
                                            <tr>
                                            <th class="text-black col-6">Icon<strong style="color:red;"> *<sup>image size must be 321*141</sup></strong></th>
                                                <th class="text-black col-6">Color</th>
                                            </tr>
                                            <tr>
                                            <td><input type='file' name='city1' accept=".jpg, .jpeg, .png, .svg, .webp" class='form-control gen mt-2'></td>
                                            <td><input type='color'  name='city2' class='form-control gen mt-2'></td>
                                            </tr>
                                            <tr>
                                            <td><input type='text' placeholder="Enter Number" name="num" class="form-control mt-2 gen"></td>
                                            </tr>

                                        <!-- Rows will be dynamically added here -->
                                        </table>
                                       
                                        
                                        <input type="submit" value="Submit" name="submit" class="btn btn-success w-sm text-center">
                                        </form>

                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <!-- Tables Without Borders -->
                            
                            <table class="table table-borderless table-nowrap">
                                <thead>
                                    <tr class="bg-dark">
                                        <th scope="col">Id</th>
                                        <th scope="col">icon</th>
                                        
                                        <th scope="col">Color</th>
                                        <th>Number</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 $query = "SELECT * FROM `key_clinetele`";
                                 $query_run = mysqli_query($conn, $query);
                                 $counter=0;
                                    if ($query_run) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr>
                                                <th class="text-dark"><?php echo ++$counter ?></th>
                                                <td><img src="../uploads/<?php echo $row['icon']?>" alt="" height="50px"  width="100px"></td></td>
                                                <td class="d-flex"><div style="background:<?php echo $row['color'];?>; width:20px"></div><?php echo $row['color'];?></td>
                                                <td><?php echo $row['num']?></td>
                                                <td ><?php echo $row['data']; ?></td>
                                                <td> <a href="../pStatus.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=key" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
                                                <td>
                                                    <div class="remove"> 
                                                        <a href="?uid=<?php echo $row['id'];?>"  class="btn btn-sm btn-danger edit-item-btn " data-bs-toggle="modal" data-bs-target="#demo<?php echo $row['id'];?>">Update</a>
                                                        <a href="?Id=<?php echo $row['id'];?>" onclick="return checkdelete(1)" class="btn btn-sm btn-danger edit-item-btn">Delete</a>

                                                        <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                                <div class="modal fade  flip" id="demo<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                            <h5 class="modal-title" id="myLargeModalLabel">KEY CLIENTELE</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="card-body form-steps">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 row">
                                                                                        <input class="d-none" name="id" value="<?php echo $row['id']?>">
                                                                                            <div class="col-lg-4">
                                                                                                <label for="address" class="form-label ">Image<strong style="color:red;">*</strong></label>
                                                                                                <input type="file" name="upimage" class="form-control mb-3" src="<?php echo $row['icon']; ?>">
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <label for="address" class="form-label ">Color<strong style="color:red;"> *</strong></label>
                                                                                                <input type="color" name="upcolor" class="form-control mb-3" value="<?php echo $row['color'];?>">
                                                                                            </div>
                                                                                             <div class="col-lg-4">
                                                                                                <label for="address" class="form-label ">Number<strong style="color:red;"> *</strong></label>
                                                                                                <input type="text" name="num" class="form-control mb-3" value="<?php echo $row['num'];?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                   
                                                                                </div>
                                                                            <!-- Modal footer -->
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                                    <input type="submit" class="btn btn-danger" data-bs-dismiss="modal" onclick="return checkdelete(2)" name="upsubmit" value="Update">
                                                                                </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <?php
                                     }
                                    }
                                    
                                       
                                    else {
                                        echo "No Record Found";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <?php
    include "../folderfooter.php";
    ?>



</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->



<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>


<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- sellers init js -->
<script src="assets/js/pages/sellers.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
<script>
    
   
    function checkdelete(id) {
        if(id==1){
        return confirm('Are You sure you want to delete this record.');
        }
        if(id==2){
            return confirm('Are You sure you want to Update this record.');
        }
    }
  </script>
</html>
<?php
if(isset($_POST['submit']))
{
    // Get the data from the form
    $abc=rand(100,9999);
    $icon=$abc.$_FILES['city1']['name'];
    $tmp_name1=$_FILES['city1']['tmp_name'];
    $location1="../uploads/".$icon;
    move_uploaded_file($tmp_name1,$location1);

    $city2 = $_POST['city2'];
$num=$_POST['num'];
	 
    // Establish a database connection (Replace with your database credentials)
   
   include("connection.php");
    $id = $_GET['id'];
    // Prepare the insert query
        $sql = "INSERT INTO `key_clinetele`(`icon`, `color`, `data`, `status`,`num`) VALUES ('$icon','$city2',now(),'Active','$num')";
    $r=mysqli_query($conn, $sql);
    // Execute the query
    if($r){
        ?>
        <script>alert("Key clinetele inserted successfully")</script>
        <script>window.location.href="key.php";</script>
        <?php
    
    }
    
        
}



if(isset($_POST['upsubmit'])){
    
    $id = $_POST['id'];
     $abc=rand(100,9999);
    $icon=$_FILES['upimage']['name'];
    $icon2=$abc.$icon;
    $tmp_name=$_FILES['upimage']['tmp_name'];
    $location="../uploads/".$icon2;
    move_uploaded_file($tmp_name,$location);
    $sql = "SELECT * from `key_clinetele` where id='".$id."'";
                 $res= $conn->query($sql);
                 if($res->num_rows > 0 ){
                 while($data = $res->fetch_assoc()){
                if(empty($icon)){ $icon2 = $data['icon'];}}}
    $color = $_POST['upcolor'];
    $num=$_POST['num'];
    
    $UQuery = "UPDATE `key_clinetele` SET `icon`='$icon2',`color`='$color',`num`='$num',`data`=now() WHERE  `id` = '$id'";
    echo $UQuery;
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
        $abid = $_GET['id'];
        ?>
        <script>alert("Key clinetele update successfully");</script>
        <script>window.location.href="key.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    


}
?>
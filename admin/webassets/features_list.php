
<?php

include("../connection.php");

if(!empty($_GET['Id']))
    {
    $did = $_GET['Id'];
    $fid = $_GET['id'];
    
    $delete = "DELETE FROM `features_list` WHERE Id='$did'";
    $run = mysqli_query($conn, $delete);
    header("location:features_list.php?id=".$fid);
    }

?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Features | Features List</title>
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
$abid = $_GET['id'];
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
                        <h4 class="mb-sm-0">Features Point</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Features</a></li>
                                <li class="breadcrumb-item active">Features Point</li>
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
                                            <th colspan="1" class="text-black" >Features Point:</th>
                                            </tr>
                                            <tr>
                                            <td><input type='text' placeholder="Enter Features Point" name='city1[]' class='form-control gen'required></td>
                                            </tr>

                                        <!-- Rows will be dynamically added here -->
                                        </table>
                                       
                                        <button type="button" onclick="a()" class="btn btn-primary w-sm">Add More row</button>
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
                            <h4 class="card-title">Features Point List</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="assets.php">assets</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Features</a></li>
                                    <li class="breadcrumb-item active">Features Point List</li>
                                </ol>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Tables Without Borders -->
                            
                            <table class="table table-borderless table-nowrap">
                                <thead>
                                    <tr class="bg-dark">
                                        <th scope="col">Id</th>
                                        <th scope="col">Point</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $id = $_GET['id'];
                                 $query = "SELECT * FROM `features_list` where features_id='$id'";
                                 $query_run = mysqli_query($conn, $query);
                                 $counter=0;
                                    if ($query_run) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr>
                                                <th class="text-dark"><?php echo ++$counter ?></th>
                                              
                                                <td class="d-flex"><?php 
                                                $content = $row['point'];
                                                for($i = 0;$i<strlen($content);$i++){ 
                                                   echo ($content)[$i]; 
                                                   if($i==100 )
                                                   {echo '.......';
                                                   $content= ''; }
                                                } ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td> <a href="../pStatus.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=features_list&fid=<?php echo $abid?>" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
                                                <td>
                                                    <div class="remove"> 
                                                        <a  class="btn btn-sm btn-danger edit-item-btn " data-bs-toggle="modal" data-bs-target="#demo<?php echo $row['id'];?>">Update</a>
                                                        <a href="?Id=<?php echo $row['id'];?>&id=<?php echo $row['features_id'];?>" onclick='return checkdelete(1);'> <input type="submit" class="btn btn-sm btn-danger edit-item-btn"  name="upsubmit" value="Delete"></a>
                                                 
                                                        <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                                <div class="modal fade  flip" id="demo<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="myLargeModalLabel">Features point</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="card-body form-steps">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 row">
                                                                                        <input class="d-none" name="id" value="<?php echo $row['id']?>">
                                                                                            
                                                                                            <div class="col-lg-12">
                                                                                                <label for="address" class="form-label ">Color<strong style="color:red;"> *</strong></label>
                                                                                                <input type="text" name="upcolor" class="form-control mb-3" value="<?php echo $row['point'];?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                   
                                                                                </div>
                                                                            <!-- Modal footer -->
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Close</button>
                                                                                    <input type="submit" class="btn btn-danger" onclick='return checkdelete(2);'  data-bs-dismiss="modal" name="upsubmit" value="Update">
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
    function a() {
                // Create a new row
                var table = document.getElementById("data_table");
                var newRow = table.insertRow(table.rows.length);

                // Add cells to the new row
                var cell1 = newRow.insertCell(0);
               
               
                // Set input fields for each cell
                cell1.innerHTML = "<input type='text'  name='city1[]' class='form-control gen'required>";
             
    }
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
if(isset($_POST['submit'])){
    // Get the data from the form
    $Point=$_POST['city1'];
	 
    // Establish a database connection (Replace with your database credentials)
    error_reporting(0);
   include("connection.php");

    // Loop through the data and insert each row into the "product" table
    for ($i = 0; $i < count($Point); $i++) {
       
        $point = mysqli_real_escape_string($conn, $Point[$i]);
       
       
        $did = $_GET['id'];
        // Prepare the insert query
         $sql = " INSERT INTO `features_list`(`features_id`,`point`, `date`, `status`) VALUES ('$did','$point',now(),'Active')";
            $r=mysqli_query($conn, $sql);
        // Execute the query
        if($r){
            
        ?>
        <script>alert("data in inserted")</script>
        <script>window.location.href="features_list.php?id=<?php echo $did?>";</script>
        <?php
            }
        }
    
}



if(isset($_POST['upsubmit'])){
    
    $id = $_POST['id'];
   
    $color = $_POST['upcolor'];
    
    $UQuery = "UPDATE `features_list` SET `point`='$color',`date`=now() WHERE  `id` = '$id'";
    echo $UQuery;
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
       
        ?>
        <script>alert("Data in Updata")</script>
        <script>window.location.href="features_list.php?id=<?php echo $abid?>";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    


}
?>
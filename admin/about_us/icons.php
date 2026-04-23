<?php
include("../connection.php");
if(!empty($_GET['did'])){
     $did=$_GET['did']; 
    $d = "DELETE FROM `about_us_icon` WHERE id='$did'";
    $d_r = mysqli_query($conn,$d);
    ?>
    <script>window.location.href="icons.php";</script>
    <?php
}

if(!empty($_GET['sid']))
{   
    $sid = $_GET['sid'];
    $status = $_GET['status'];
    $query = "UPDATE `about_us_icon` SET `status`='$status' WHERE id=$sid";
    $query_run = mysqli_query($conn, $query);
    ?>
        <script>window.location.href="icons.php";</script>
        <?php
}

?>
<?php
if(!empty($_POST['submit'])){
    $title = addslashes($_POST['title']);
    
    $abc=rand(100,9999);
    $filename = $abc.$_FILES['upload']['name'];
    $temp_name = $_FILES['upload']['tmp_name'];
    $location = "../uploads/".$filename;
    move_uploaded_file($temp_name,$location);
    
    
    
    $bquery = "INSERT INTO `about_us_icon`(`icon`, `title`, `status`) VALUES ('$filename','$title','Active')";
    
    $data = mysqli_query($conn,$bquery) or exit($bquery);
    if($data){
        ?>
        <script>alert("Data in inserted"); </script>
        
        <script>window.location.href="icons.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    
}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Category | Sub Categoryy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<style>
    .page-content {
     padding: calc(51px + 1.5rem) calc(1.5rem * .5) 60px calc(1.5rem * .5)!important;
}
</style>
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
                    <h4 class="mb-sm-0">Icons</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">About Us</a></li>
                                <li class="breadcrumb-item active">Icons</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form class="g-4" action="" method="post" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-lg-12 row">
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Title<strong style="color:red;">*</strong></label>
                                <input type="text" name="title" class="form-control mb-3" placeholder="Enter Service Heading" >
                            </div>
                            
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Image<strong style="color:red;font-size:9px"> * image must be w=256*h=256</strong></label>
                                <input type="file" name="upload" class="form-control mb-3" accept=".jpg, .jpeg, .png">
                            </div>
                            
                           
                           
                            
                            <div class="col-lg-12">
                            <input type="submit" class="btn btn-success w-sm"  name="submit" value="Submit">
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
            
            <div style="overflow-x: auto">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <div class="row g-4">
                                                
                                                <div class="col-sm">
                                                    <div class="d-flex justify-content-sm-end">
                                                        <!--
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control" id="searchProductList" placeholder="Search Products...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                        
                                        <?php
                                            $caseq= "SELECT * FROM `about_us_icon` ";
                                            $caseq_r = mysqli_query($conn,$caseq);
                                            $counter = 0;
                                        ?>
                                       
                                        <table class="table dataTable no-footer" id="example" aria-describedby="example_info">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th>S.NO.</th>
                                                <th>Title</th>
                                                <th>Icon</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                                <?php
                                            if($caseq_r){
                                                foreach($caseq_r as $case_r){
                                          ?>                                                                                                
                                            <tr class="odd">
                                                <td scope="row" class="sorting_1"><?php echo ++$counter; ?></td>
                                                <td><?php echo $case_r['title']; ?></td>
                                                <td><div style="background-color:rgb(2,36,77); width:100px; padding:10px"><img src="../uploads/<?php echo $case_r['icon']; ?>" width='75px'></div></td>
                                                 <td><?php echo $case_r['created_date']; ?></td>
                                                <td> <a href="?sid=<?php echo $case_r['id']; ?>&status=<?php echo $case_r['status']=="Active"?"Pending":"Active"?>" class="<?php echo $case_r['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $case_r['status']=="Active"? "Disable":"Enable"?></a></td>
												<td>
                                                    <div class="remove d-flex">
                                                         <a href="?did=<?php echo $case_r['id']; ?>" onclick='return checkdelete(1);' class="btn btn-sm btn-danger edit-item-btn ms-2">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <?php
                                            }
                                        }
                                    ?>
                                    </tbody>
                                    
                                    </table>
                                    </div>
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

</html>





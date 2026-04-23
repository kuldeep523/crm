<?php

include("../connection.php");

?>
<?php
if(!empty($_POST['submit'])){
    
    $c1 = $_POST['contact1'];
    $c2 = $_POST['contact2'];
    $email = $_POST['email'];
   
    $abc=rand(100,9999);
    $filename = $abc.$_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $location = "../uploads/".$filename;
    move_uploaded_file($temp_name,$location);
    
    
    
    $careerq = "INSERT INTO `career`(`contact1`, `contact2`, `email`, `img`, `status`) VALUES ('$c1','$c2','$email','$filename','Active')";
    
    $data = mysqli_query($conn,$careerq) or exit($careerq);
    if($data){
        ?>
        <script>alert("Data in inserted"); </script>
        
        <script>window.location.href="career.php";</script>
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
                    <h4 class="mb-sm-0">Case Studies</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Case Studies</a></li>
                                <li class="breadcrumb-item active">Add Case Studies</li>
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
                                <label for="address" class="form-label ">Contact 1<strong style="color:red;">*</strong></label>
                                <input type="text" name="contact1" class="form-control mb-3" placeholder="Enter Contact" >
                            </div>
                             <div class="col-lg-6">
                                <label for="address" class="form-label ">Contact 2<strong style="color:red;">*</strong></label>
                                <input type="text" name="contact2" class="form-control mb-3" placeholder="Enter Contact" >
                            </div>
                             <div class="col-lg-6">
                                <label for="address" class="form-label ">Email<strong style="color:red;">*</strong></label>
                                <input type="email" name="email" class="form-control mb-3" placeholder="Enter Email" >
                            </div>
                            
                            
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Image<strong style="color:red;"> * <sup>image must be w=980*h=890</sup></strong></label>
                                <input type="file" name="file" accept=".jpg, .jpeg, .png" class="form-control mb-3">
                            </div>
                           
                            
                            <div class="col-lg-12">
                            <input type="submit" class="btn btn-success w-sm"  name="submit" value="Submit">
                            </div>
                        </div>

                    </div>
                    </form>
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





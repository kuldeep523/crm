<?php
include("../connection.php");
?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Home | Add Service</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

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
                        <h4 class="mb-sm-0">Service</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Service</a></li>
                                <li class="breadcrumb-item active">Add New service</li>
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
                                <div class="col-lg-12">
                                    <label for="address" class="form-label ">Service Title<strong style="color:red;">*</strong></label>
                                    <input type="text" name="Title" class="form-control mb-3" placeholder="Enter Service Title" >
                                </div>
                                <div class="col-lg-6">
                                    <label for="address" class="form-label ">Button Name<strong style="color:red;">*</strong></label>
                                    <input type="text" placeholder="Enter Button Name" name="btn" class="form-control mb-3" >
                                </div>
                                <div class="col-lg-6">
                                    <label for="address" class="form-label ">Button Link<strong style="color:red;">*</strong></label>
                                     <select name="btnlink" class="form-control mb-3" >>
                                        <option value='consulting'>Consulting & Implementation</option>
                                        <option value='productDevelopment'>AppExchange Product Development</option>
                                        <option value='ContractStaffing'>Contract Staffing</option>
                                        <option value='dataMigration'>Data Migration</option>
                                        <option value='ManagedServices'>Managed Services</option>
                                        <option value='SoftwareDevelopments'>Software Developments</option>
                                        <option value='AIML'>AI / ML</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="address" class="form-label ">Service Icon<strong style="color:red;"> *<sup>image size must be 80*80</sup></strong></label>
                                    <input type="file" name="iconfile" accept=".png, .svg, .webp" class="form-control mb-3" >
                                </div>
                                <div class="col-lg-6">
                                    <label for="address" class="form-label ">Service Thumnail<strong style="color:red;"> *<sup>image size must be 792*299</sup></strong></label>
                                    <input type="file" name="file" accept=".jpg, .jpeg, .png, .svg, .webp" class="form-control mb-3" >
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


<?php
if(isset($_POST['submit'])){
    $Name = $_POST['Title'];

 $abc=rand(100,9999);
    $icon=$abc.$_FILES['iconfile']['name'];
    $tmp_name=$_FILES['iconfile']['tmp_name'];
    $location="../uploads/".$icon;
    move_uploaded_file($tmp_name,$location);

    $image=$abc.$_FILES['file']['name'];
    $tmp_name1=$_FILES['file']['tmp_name'];
   
    $location1="../uploads/".$image;
    move_uploaded_file($tmp_name1,$location1);

    $button = $_POST['btn'];

    $buttonlink = $_POST['btnlink'];

    $Query = "INSERT INTO `service`( `name`, `icon`, `image`, `bnt`,`bntlink`, `date`, `status`) VALUES ('$Name','$icon','$image','$button' ,'$buttonlink',now(),'Active')";
    $data = mysqli_query($conn,$Query);
    if($data){
        ?>
        <script>window.location.href="service.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    }
?>




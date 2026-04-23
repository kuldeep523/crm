<?php

include("../connection.php");

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
                                <label for="address" class="form-label ">Case Studies Heading<strong style="color:red;">*</strong></label>
                                <input type="text" name="heading" class="form-control mb-3" placeholder="Enter Service Heading" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Case Studies icon<strong style="color:red;"> *<sup>image must be w=50*h=50</sup></strong></label>
                                <input type="file" name="iconfile" accept=".jpg, .jpeg, .png" class="form-control mb-3">
                            </div>
                            <div  class="col-lg-12 pb-3">
                                    <label class="form-label" for="stocks-input">Content<strong style="color:red;">*</strong></label>
                                    <textarea id="" name="content" class="form-control" placeholder="" id="" cols="3" rows="3" ></textarea>
                                </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Image<strong style="color:red;"> * <sup>image must be w=550*h=300</sup></strong></label>
                                <input type="file" name="file" accept=".jpg, .jpeg, .png" class="form-control mb-3">
                            </div>
                           <div class="col-lg-6">
                                <label for="address" class="form-label ">Button Name<strong style="color:red;"> *</strong></label>
                                <input type="text" name="btn_name" class="form-control mb-3">
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Button link<strong style="color:red;">*</strong></label>
                                <input type="text" name="btn_link" class="form-control mb-3" placeholder="Enter Service Title" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Right Heading<strong style="color:red;">*</strong></label>
                                <input type="text" name="r_heading" class="form-control mb-3" placeholder="Enter Heading" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Heading 1st<strong style="color:red;">*</strong></label>
                                <input type="text" name="f_heading" class="form-control mb-3" placeholder="Enter Heading" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Content 1st<strong style="color:red;">*</strong></label>
                                <input type="text" name="f_content" class="form-control mb-3" placeholder="Enter Contetn" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Heading 2d<strong style="color:red;">*</strong></label>
                                <input type="text" name="s_heading" class="form-control mb-3" placeholder="Enter Heading" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Content 2nd<strong style="color:red;">*</strong></label>
                                <input type="text" name="s_content" class="form-control mb-3" placeholder="Enter Heading" >
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
if(!empty($_POST['submit'])){
    $heading = $_POST['heading'];

    $icon=$_FILES['iconfile']['name'];
    $tmp_name=$_FILES['iconfile']['tmp_name'];
    $location="../uploads/".$icon;
    move_uploaded_file($tmp_name,$location);

    $lap=$_FILES['file']['name'];
    $tmp_name1=$_FILES['file']['tmp_name'];
    $location1="../uploads/".$lap;
    move_uploaded_file($tmp_name1,$location1);

    $content = $_POST['content'];
    $btn_name = $_POST['btn_name'];
    $btn_link = $_POST['btn_link'];
    $r_heading = $_POST['r_heading'];
      
    $f_heading = $_POST['f_heading'];
    $f_content = $_POST['f_content'];
    $s_heading = $_POST['s_heading'];
    $s_content = $_POST['s_content'];
    
    
  
    
    $Query = "INSERT INTO `Case_Studies`(`heading`, `icon`, `image`, `content`, `btn_name`, `btn_link`, `status`,`right_heading`, `f_heading`, `f_content`, `s_heading`, `s_content`) VALUES ('$heading','$icon','$lap','$content','$btn_name','$btn_link','Active','$r_heading','$f_heading','$f_content','$s_heading','$s_content')";
    
    $data = mysqli_query($conn,$Query);
    if($data){
        ?>
        <script>alert("Data in inserted")</script>
        
        <script>window.location.href="Case_Studies.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    
}
?>




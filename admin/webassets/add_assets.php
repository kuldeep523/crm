<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../connection.php");

$msg = "";

if(isset($_POST['submit'])){

    $Name = $_POST['Title'];

    $abc=rand(100,9999);

    $icon=$abc.$_FILES['iconfile']['name'];
    if(!move_uploaded_file($_FILES['iconfile']['tmp_name'],"../uploads/".$icon)){
        $msg = "Icon upload failed";
    }

    $lap=$abc.$_FILES['lapfile']['name'];
    if(!move_uploaded_file($_FILES['lapfile']['tmp_name'],"../uploads/".$lap)){
        $msg = "Laptop image upload failed";
    }

    $mob=$abc.$_FILES['mobfile']['name'];
    if(!move_uploaded_file($_FILES['mobfile']['tmp_name'],"../uploads/".$mob)){
        $msg = "Mobile image upload failed";
    }

    $btn = $_POST['link'];
    $color = $_POST['color'];
    $stitle = addslashes($_POST['stitle']);

    $Query = "INSERT INTO assets 
    (title, icon, lap_image, mob_image, content, btnlink, color, date, status) 
    VALUES 
    ('$Name','$icon','$lap','$mob','$stitle','$btn','$color',NOW(),'Active')";

    $data = mysqli_query($conn,$Query);

    if($data){
        $msg = "Product Added successfully";
    } else {
        $msg = "SQL Error: " . mysqli_error($conn);
    }
}
?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Assets | Add Assets</title>
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
                    <h4 class="mb-sm-0">Assets</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Assets</a></li>
                                <li class="breadcrumb-item active">Add New Assets</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php if(!empty($msg)){ ?>
    <div class="alert alert-info"><?php echo $msg; ?></div>
<?php } ?>
                    <form class="g-4" action="" method="post" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-lg-12 row">
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Assets Title<strong style="color:red;">*</strong></label>
                                <input type="text" name="Title" class="form-control mb-3" placeholder="Enter Assets Title" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Assets Icon<strong style="color:red;"> *<sup>image must be 85*85, Accept Only (png, svg, webp)</sup></strong></label>
                                <input type="file" accept=".png, .svg, .webp" name="iconfile" class="form-control mb-3">
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Laptop Image<strong style="color:red;"> * <sup>image must be 1500*447, Accept Only (png, svg, webp)</sup></strong></label>
                                <input type="file" accept=".png, .svg, .webp" name="lapfile" class="form-control mb-3">
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Mobile Image<strong style="color:red;"> *<sup>image must be 1000*1052, Accept Only (png, svg, webp)</sup></strong></label>
                                <input type="file" accept=".png, .svg, .webp" name="mobfile" class="form-control mb-3">
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Button Link<strong style="color:red;">*</strong></label>
                                <input type="text" name="link" class="form-control mb-3" placeholder="Enter Button Link" >
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Border Color<strong style="color:red;">*</strong></label>
                                <input type="color" name="color" class="form-control mb-3" placeholder="Enter Border Color" >
                            </div>
                            <div  class="col-lg-12 pb-3">
                                    <label class="form-label" for="stocks-input">About Sub Title<strong style="color:red;">*</strong></label>
                                    <textarea name="stitle" class="form-control" placeholder="Enter About Sub Title" id="" cols="3" rows="3" ></textarea>
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



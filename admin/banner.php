<?php

include("connection.php");

//Data inseert




if (isset($_POST['submit'])) {
    

    $filename =  $_FILES["uploadfile"]["name"];
    $tempname =  $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploads/".$filename;
    move_uploaded_file($tempname, $folder);



    $title = addslashes($_POST['title']);
    $bannerType = addslashes($_POST['bannerType']);

    $sliderHeading = addslashes($_POST['sliderHeading']);
    $sliderSubheading = addslashes($_POST['sliderSubheading']);
    $btnName = addslashes($_POST['btnName']);
    $btnLink = addslashes($_POST['btnLink']);

  

    $query = "INSERT INTO `banner`(`title`, `bannerType`, `bannerUrl`, `bannerHeading`, `bannerSubheading`, `btnName`, `btnLink`, `status`) VALUES ('$title','$bannerType','$filename','$sliderHeading','$sliderSubheading','$btnName', '$btnLink', 'Active')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script> alert("Banner Upload Successsfully"); </script>';
        // header('Location: update.php');
    } else {
        echo '<script> alert("Banner Not Upload Successsfully"); </script>';
    }
}




//Delete Data

// $id = $_GET['id'];
// $query = "DELETE FROM systemtable WHERE id = '" . $id . "'";
// $data = mysqli_query($conn, $query);
// if ($data) {
//     echo "Data Delete Successfully...";
// }


?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Azallya | Featchure | Banner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
   

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php
        include "header.php";
        include "sidebar.php";
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
                                <h4 class="mb-sm-0">Azallya</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Featchure</a></li>
                                        <li class="breadcrumb-item active"> Add Banner</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form class="g-4" action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label" for="product-title-input">Banner Title</label>

                                        <input type="text" class="form-control" name="title" placeholder="Enter Title">

                                    </div>
                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label" for="product-title-input">Banner Type<strong style="color:red;">*</strong> </label>
                                        <select class="form-select mb-3" name="bannerType" aria-label="Default select example" required>
                                            <option selected>--- Selelct ---</option>
                                            <option value="Slider">Slider</option>
                                            <option value="Offer Banner Top Left">Offer Banner Top Left</option>
                                            <option value="Offer Banner Bottom Left">Offer Banner Bottom Left</option>
                                            <option value="Offer Banner Right">Offer Banner Right</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label" for="product-title-input">Banner Image<strong style="color:red;">*</strong></label>

                                        <input type="file" name="uploadfile" class="form-control" name="banner" required>

                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label class="form-label" for="product-title-input">Slider Heading<strong style="color:red;">*</strong></label>

                                        <input type="text" class="form-control" name="sliderHeading" placeholder="Enter Slider Heading" required>

                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label class="form-label" for="product-title-input">Slider Sub Headng
                                        <strong style="color:red;">*</strong>
                                        </label>

                                        <input type="text" class="form-control" name="sliderSubheading" placeholder="Enter Slider Subheading" required>

                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label class="form-label" for="product-title-input">Botton Name</label>

                                        <input type="text" class="form-control" name="btnName" placeholder="Enter Botton Name" >

                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label class="form-label" for="product-title-input">Button Link</label>

                                        <input type="text" class="form-control" name="btnLink" placeholder="Enter Botton Link">

                                    </div>
                                    <div class="mt-2 col-lg-12">
                                        <input type="submit" class="btn btn-success float-end" name="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">

<div class="col-lg-12">
    <div class="card">
        
        <div class="card-body " style="overflow-x: scroll;">
            <!-- Tables Without Borders -->
            <?php
                $query = "SELECT * FROM banner";
                $query_run = mysqli_query($conn, $query);
                $counter=0;
                ?>
            <table class="table table-borderless table-nowrap">
                <thead>
                    <tr>
                        <th scope="col">SL#</th>

                        <th scope="col">Banner Title</th>
                        <th scope="col">Banner Type</th>
                        <th scope="col">Banner Image</th>
                        <th scope="col">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if ($query_run) {
                        foreach ($query_run as $row) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo ++$counter ?></th>
                            <td><?php echo $row['title']; ?></Td>
                            <td><?php echo $row['bannerType']; ?></td>
                            <td><img style="height: 30px; width: auto;" src="uploads/<?php echo $row['bannerUrl'] ?>" class="img-fluid" alt="<?php echo $row['bannerUrl'] ?>"> </td>
                            <td>
                            <a href="pStatus.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=banner" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a>
                            <td>
                                <div class="d-flex gap-2">
                                   <div class="remove">
                                            <a href="banner_update.php?id=<?php echo $row['id']; ?>&type=update" onclick='return checkupdate();' class="btn btn-sm btn-info edit-item-btn">Update</a>
                                            <a href="delete.php?id=<?php echo $row['id']; ?>&page=banner" onclick='return checkdelete();' class="btn btn-sm btn-danger edit-item-btn">Delete</a>
                                    </div>
                                </div>
                            </td>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
</div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php
            include "footer.php";
            ?>
        </div>
        <!-- end main content-->
    </div>
   

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>


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
<script>
    function checkdelete() {
        return confirm('Are You sure you want to delete this product.');
    }

    function checkupdate() {
        return confirm('Are You sure you want to update this product.');
    }

    function checkview() {
        return confirm('Are You sure you want to view this product.');
    }
</script>
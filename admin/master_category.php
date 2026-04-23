<?php

 

include("connection.php");

//Data inseert
if (isset($_POST['submit'])) {
    $label = $_POST['label'];
    $value = $_POST['value'];
    

    $query = "INSERT INTO `systemtable`(`type`, `label`, `value`, `status`)
    VALUES ('Master','$label','$label','Active')";
    $query_run = mysqli_query($conn, $query);
 
    if ($query_run) {
        echo '<script> alert("Category Successfully Added"); </script>';
        // header('Location: update.php');
    } else {
        echo '<script> alert("Category Not Successfully Added"); </script>';
    }
}

//Delete Data

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>CRM Landing | Category | Master Category</title>
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
                                <h4 class="mb-sm-0">CRM Landing</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                                        <li class="breadcrumb-item active">Master Category</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form class="g-4" action="#" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-lg-5">
                                        <label class="form-label" for="product-title-input">Label</label>

                                        <input type="text" class="form-control" name="label" placeholder="Enter Label" required>

                                    </div>
                                    <div class="mb-3 col-lg-5">
                                        <label class="form-label" for="product-title-input">Value</label>

                                        <input type="text" class="form-control" name="value" placeholder="Enter Value" required>

                                    </div>
                                    <div class="mt-4 col-lg-2">
                                        <input type="submit" class="btn btn-success" name="submit" value="Submit">
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
                                    <?php
                                    $query = "SELECT * FROM systemtable where type='Master'";
                                    $query_run = mysqli_query($conn, $query);
                                    $counter=0;
                                    ?>
                                    <table class="table table-borderless table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL#</th>

                                                <th scope="col">Master</th>
                                                <th scope="col">Label</th>
                                                <th scope="col">value</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($query_run) {
                                                foreach ($query_run as $row) {
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$counter ?></th>
                                                        <td><?php echo $row['type']; ?></Td>
                                                        <td><?php echo $row['label']; ?></td>
                                                        <td><?php echo $row['value']; ?></Td>

                                                        <td>
                                                            <div class="d-flex gap-2">
                                                               
                                                                <div class="remove">
                                                                    <a href="delete.php?id=<?php echo $row['id']; ?>&page=master" onclick='return checkdelete();' class="btn btn-sm btn-danger edit-item-btn">Delete</a>
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
    <!-- END layout-wrapper -->
    
    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

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
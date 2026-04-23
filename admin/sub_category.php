<!-- <?php

        include("connection.php");

        // session_start();
        // if($_SESSION['userName'] == NULL)
        // {
        //  header('location:../login.php');
        // }
        

        //Data inseert

        if (isset($_POST['submit'])) {
            $master = $_POST['master'];
            $label = $_POST['label'];
            $value = $_POST['value'];


            
            $filename =  $_FILES["uploadfile"]["name"];
            $tempname =  $_FILES["uploadfile"]["tmp_name"];
            $folder = "uploads/".$filename;
            move_uploaded_file($tempname, $folder);

            

            $query = "INSERT INTO `systemtable`( `type`, `label`, `value`, `categoryImage`, `status`)
        VALUES ('$master','$label','$label','$filename','Active')";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                echo '<script> alert("Successfully Category"); </script>';
                // header('Location: update.php');
            } else {
                echo '<script> alert("Unsuccessfully Category"); </script>';
            }
        }
        //Data Show


        ?> -->
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>CRM Landing | Category | Sub Categoryy</title>
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
                                        <li class="breadcrumb-item active">Sub Category</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form class="g-4" action="#" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-lg-3">
                                        <label for="status-field" class="form-label">Master categery</label>
                                        <?php
                                        $query = "SELECT label FROM systemtable where type='Master'";
                                        $query_run = mysqli_query($conn, $query);
                                        ?>
                                        <select class="form-select mb-3" aria-label="Default select example" name="master">

                                            <option selected>--- Selelct ---</option>
                                            <?php
                                            if ($query_run) {
                                                foreach ($query_run as $row) {
                                            ?>
                                                    <option value="<?php echo $row['label']; ?>"><?php echo $row['label']; ?></option>
                                            <?php
                                                }
                                            } else {
                                                echo "No Record Found";
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label class="form-label" for="product-title-input">Label</label>

                                        <input type="text" class="form-control" name="label" value="" placeholder="Enter Label" required>

                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label class="form-label" for="product-title-input">Value</label>
                                        <input type="text" class="form-control" id="product-title-input" value="" name="value" placeholder="Enter Value" required>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <label class="form-label" for="product-title-input">Category Imagge</label>
                                        <input type="file" name="uploadfile" class="form-control" >
                                    </div>
                                    <div class="col-lg-12 ">
                                        <input type="submit" class="btn btn-success float-end" name="submit" value="Submit">
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
                                    $query = "SELECT * FROM systemtable";
                                    $query_run = mysqli_query($conn, $query);
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
                                                    $counter=0;
                                            ?>
                                            <?php
                                            $query1 = "SELECT * FROM systemtable WHERE type='".$row['label']."'";
                                            $query_run1 = mysqli_query($conn, $query1);
                                           
                                            
                                            if ($query_run1) {
                                                foreach ($query_run1 as $row) {
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$counter ?></th>
                                                        <td><?php echo $row['type']; ?></Td>
                                                        <td><?php echo $row['label']; ?></td>
                                                        <td><img style="height: 30px; width: auto;" src="uploads/<?php echo $row['categoryImage'] ?>" ></td>
                            <td>

                                                        <td>
                                                            <div class="d-flex gap-2">
                                                               
                                                                <div class="remove">
                                                                    <a href="delete.php?id=<?php echo $row['id']; ?>&page=subcategory" onclick='return checkdelete();' class="btn btn-sm btn-danger edit-item-btn">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </td>
                                                    </tr>
                                                    <?php
                                             }
                                            }
                                             ?>
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
    <div class="modal fade" id="showdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">Type</label>
                            <input type="text" id="customername-field" class="form-control" placeholder="" required />
                        </div>

                        <div class="mb-3">
                            <label for="email-field" class="form-label">Label</label>
                            <input type="email" id="email-field" class="form-control" placeholder="" required />
                        </div>

                        <div class="mb-3">
                            <label for="phone-field" class="form-label">value</label>
                            <input type="text" id="phone-field" class="form-control" placeholder="" required />
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Type</label>
                                <input type="text" id="customername-field" class="form-control" placeholder="" required />
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Label</label>
                                <input type="email" id="email-field" class="form-control" placeholder="" required />
                            </div>

                            <div class="mb-3">
                                <label for="phone-field" class="form-label">value</label>
                                <input type="text" id="phone-field" class="form-control" placeholder="" required />
                            </div>


                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <form action="#" method="post">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <input type="button" name="delete" class="btn w-sm btn-danger" value="Yes, Delete It!" id="delete-record" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
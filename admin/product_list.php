<?php
include("connection.php");
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>VSDMisthi | Product List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    </link>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    </link>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php

        include "header.php";
        ?>
        <?php
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
                                <h4 class="mb-sm-0">Product</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                        <li class="breadcrumb-item active">Product List</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div style="overflow-x: auto">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <div class="row g-4">
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <a href="add_product.php" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Blog</a>
                                                    </div>
                                                </div>
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
                                        <form method="post" action="">
                                            <?php
                                            $query = "SELECT * FROM addblog";
                                            $query_run = mysqli_query($conn, $query);
                                            $counter = 0;
                                            ?>
                                            <table class="table table-hover mb-0 m-4 table table-bordered" id="">
                                                <thead style="background-color: black;">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Blog Name</th>
                                                        <th scope="col">Blog Subtitle</th>
                                                        <th scope="col">Blog Category</th>
                                                        <th scope="col">Blog Thumbnail</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $cu = 0;
                                                    if ($query_run) {
                                                        foreach ($query_run as $row) {
                                                            $cu = $cu + 1;
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $cu; ?></td>
                                                                <td><?php echo $row['blogDate']; ?></td>
                                                                <td><?php echo $row['blogTitle']; ?></td>
                                                                <td><?php echo $row['bSubTitle']; ?></td>
                                                                <td><?php echo $row['blogCategory']; ?></td>
                                                                <td><img style="height: 50px; width: auto;" src="uploads/<?php echo $row['thumbnail'] ?>" class="img-fluid" alt=""></td>

                                                                <td>
                                                                    <div class="form-check form-switch">
                                                                        <a href="pStatus.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status'] == "Active" ? "Pending" : "Active" ?>&action=blog" class="<?php echo $row['status'] == "Active" ? "btn btn-sm btn-dark" : "btn btn-sm btn-light" ?>"><?php echo $row['status'] == "Active" ? "Disable" : "Enable" ?></a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="remove">
                                                                        <a href="delete.php?id=<?php echo $row['id']; ?>&page=blogList" onclick='return checkdelete();' class="btn btn-sm btn-danger edit-item-btn">Delete</a>
                                                                    </div>
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    include "footer.php";
    ?>

    </div>


    <!-- end main content-->


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
    <script>
        function checkdelete() {
            return confirm('Are You sure you want to delete this product.');
        }
    </script>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/libs/nouislider/nouislider.min.js"></script>
    <script src="assets/libs/wnumb/wNumb.min.js"></script>

    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <script src="../../../../unpkg.com/gridjs%405.1.0/plugins/selection/dist/selection.umd.js"></script>
    <!-- ecommerce product list -->
    <script src="assets/js/pages/ecommerce-product-list.init.js"></script>


    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- sellers init js -->
    <script src="assets/js/pages/sellers.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',

                buttons: [
                    'excel', 'pdf', 'print'
                ],
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
</body>

</html>
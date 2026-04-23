<?php
include("../connection.php");
if(!empty($_GET['id']))
    {
    $did = $_GET['id'];
    $delete = "DELETE FROM `service` WHERE Id='$did'";
    $run = mysqli_query($conn, $delete);
    ?>
        <script>alert("Srevice dalete successfully");
        window.location.href="service.php";</script>
        <?php
    }
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>CRMlanding | Services</title>
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

        include "../folderheader.php";
        ?>
        <?php
        include "../foldersidebar.php";
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
                                        <li class="breadcrumb-item active">Service List</li>
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
                                                        <a href="add_service.php" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Service</a>
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
                                       
                                        <?php
                                    $query = "SELECT * FROM  `service`";
                                    $query_run = mysqli_query($conn, $query);
                                    $counter=0;
                                    ?>
                                    <table class="table" id="example">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th scope="col">S.NO.</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">icon</th>
                                                <th scope="col">image</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Add Attributes</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Oparetion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($query_run) {
                                                foreach ($query_run as $row) {
                                            ?>
                                                    <tr>
                                                        <td scope="row"><?php echo ++$counter ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><img src="../uploads/<?php echo $row['icon']?>" alt="" height="50px" width="50px"></td>
														<td><img src="../uploads/<?php echo $row['image']?>" alt="" height="50px"  width="50px"></td></td>
                                                       
                                                        <td><?php echo $row['date']; ?></td>
                                                        <td><a href="service_list.php?id=<?php echo $row['Id']; ?>" class="btn btn-sm btn-danger edit-item-btn">Add Attributes</a></td>
                                                        <td> <a href="../pStatus.php?id=<?php echo $row['Id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=service" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
                                                        <td>
                                                            <div class="remove"> 
                                                            <a href="?Id=<?php echo $row['Id'];?>" class="btn btn-sm btn-danger edit-item-btn " data-bs-toggle="modal" data-bs-target="#service<?php echo $row['Id']; ?>">Update</a>
                                                                <a href="?id=<?php echo $row['Id'];?>"  onclick="return checkdelete(1)" class="btn btn-sm btn-danger edit-item-btn">Delete</a>

                                                                <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                                <div class="modal fade flip" id="service<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="myLargeModalLabel">Service</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 row">
                                                                                    <input class="d-none" name="id" value="<?php echo $row['Id']?>">
                                                                                        <div class="col-lg-12">
                                                                                            <label for="address" class="form-label ">Heading<strong style="color:red;">*</strong></label>
                                                                                            <input type="text" name="Title" class="form-control mb-3" value="<?php echo $row['name']; ?>">
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <label for="address" class="form-label ">Button Name<strong style="color:red;">*</strong></label>
                                                                                            <input type="text" name="btn" class="form-control mb-3" value="<?php echo $row['bnt']; ?>">
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <label for="address" class="form-label ">Button link<strong style="color:red;"> *</strong></label>
                                                                                            <input type="text" name="btnlink" class="form-control mb-3" value="<?php echo $row['bntlink'];?>">
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <label for="address" class="form-label ">icon<strong style="color:red;">*</strong></label>
                                                                                            <input type="file" name="iconfile" class="form-control mb-3" value="<?php echo $row['icon']; ?>">
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <label for="address" class="form-label ">image<strong style="color:red;"> *</strong></label>
                                                                                            <input type="file" name="file" class="form-control mb-3" value="<?php echo $row['image'];?>">
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                                <input type="submit" class="btn btn-danger" data-bs-dismiss="modal" onclick="return checkdelete(2)" name="upsubmit" value="Update">
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
                                            } else {
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
                </div>
            </div>
        </div>

    </div>
    <?php
    include "../folderfooter.php";
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
    $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',

                buttons: [
                    'excel', 'pdf', 'print'
                ],
            });
        });
        function checkdelete(id) {
        if(id==1){
        return confirm('Are You sure you want to delete this record.');
        }
        if(id==2){
            return confirm('Are You sure you want to Update this record.');
        }
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


<?php
if(isset($_POST['upsubmit'])){
   
    $id = $_POST['id'];

    $Name = $_POST['Title'];

    $abc=rand(100,9999);
    $icon=$_FILES['iconfile']['name'];
    $icon2=$abc.$icon;
    $tmp_name=$_FILES['iconfile']['tmp_name'];
    
    $location="../uploads/".$icon2;
    move_uploaded_file($tmp_name,$location);

    $image=$_FILES['file']['name'];
    $image2=$abc.$image;
    $tmp_name1=$_FILES['file']['tmp_name'];
    $location1="../uploads/".$image2;
    move_uploaded_file($tmp_name1,$location1);

    $sql = "SELECT * from `service` where Id='".$id."'";
                 $res= $conn->query($sql);
                 if($res->num_rows > 0 ){
                 while($data = $res->fetch_assoc()){
                if(empty($icon)){ $icon2 = $data['icon'];}
                if(empty($image)){ $image2 = $data['image'];}}}

    $button = $_POST['btn'];

    $buttonlink = $_POST['btnlink'];

    $Query = "UPDATE `service` SET `name`='$Name',`icon`='$icon2',`image`='$image2',`bnt`='$button',`bntlink`='$buttonlink',`date`=now() WHERE `Id`='$id'";
   
    $data = mysqli_query($conn,$Query);
    if($data){
       
        ?>
        <script>alert("Srevice update successfully");
        window.location.href="service.php";</script>
        <?php
       
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    
}
?>
<?php
include("../connection.php");
if(!empty($_GET['Id']))
    {
    $did = $_GET['Id'];
    $delete = "DELETE FROM `career` WHERE id='$did'";
    $run = mysqli_query($conn, $delete);
     ?>
        
        <script>window.location.href="career.php";</script>
        <?php
    }
    
   
if(!empty($_GET['sid']))
{   
    $sid = $_GET['sid'];
    $status = $_GET['status'];
    $query = "UPDATE `career` SET `status`='$status' WHERE id=$sid";
    $query_run = mysqli_query($conn, $query);
    ?>
        <script>window.location.href="career.php";</script>
        <?php
}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>CRM Landing | Case Studies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    </link>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    </link>
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

        include "../folderheader.php";
       
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
                                <h4 class="mb-sm-0">Career</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Career</a></li>
                                        <li class="breadcrumb-item active">Career</li>
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
                                                        <a href="add_career.php" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Career</a>
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
                                    $query = "SELECT * FROM `career`";
                                    $query_run = mysqli_query($conn, $query);
                                    $counter=0;
                                    ?>
                                    <table class="table" id="example">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th>S.NO.</th>
                                                <th>Contact 1</th>
                                                <th>Contact 2</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Add Attributes</th>
                                                <th>Status</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($query_run) {
                                                foreach ($query_run as $row) {
                                            ?>
                                                    <tr>
                                                        <td scope="row"><?php echo ++$counter ?></td>
                                                        <td><?php echo $row['contact1']?></td>
                                                        <td><?php echo $row['contact2']?></td>
                                                        <td><?php echo $row['email']?></td>
                                                        <td><img src="../uploads/<?php echo $row['img']?>" alt="" height="50px"  width="50px"></td>
                                                       
                                                        
                                                        <td><?php echo $row['created_date']; ?></td>

                                                        <td><a href="atrributes.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Add Atrributes</a></td>
                                                        <td> <a href="?sid=<?php echo $row['id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
														<td>
                                                    <div class="remove d-flex"> 
                                                    <a href="?id=<?php echo $row['id'];?>" class="btn btn-sm btn-primary edit-item-btn " data-bs-toggle="modal" data-bs-target="#demo<?php echo $row['id']; ?>">Update</a>
                                                        <a href="?Id=<?php echo $row['id'];?>" onclick='return checkdelete(1);' class="btn btn-sm btn-danger edit-item-btn ms-2">Delete</a>
                                                    <div class="container mt-3">
                                       
                                        

                                                            <!-- The Modal -->
                                                        <div class="modal flip" id="demo<?php echo $row['id']; ?>">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Update Career</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                                <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                            
                                                                    <div class="container-fluid">

                                                                        <!-- start page title -->
                                                                        
                                                                        <!-- Product Detail -->
                                                                        <div id="hide">
                                                                        <div class="row">
                                                                            <div class="col-xl-12">
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h4 class="card-title mb-0">Career Details</h4>
                                                                                    </div><!-- end card header -->
                                                                                    <div class="card-body form-steps">
                                                                                        
                                                                                        <div class="row">

                                                                                            <div class="col-lg-12 row">
                                                                                                <input type="text" class="d-none" name="id"  value="<?php echo $row['id']?>">
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Contact 1<strong style="color:red;">*</strong></label>
                                <input type="text" name="contact1" class="form-control mb-3" placeholder="Enter Contact Number" value='<?php echo $row['contact1']?>'>
                            </div>
                            
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Contact 2 <strong style="color:red;">*</strong></label>
                                <input type="text" name="contact2" class="form-control mb-3" placeholder="Enter Contact Number" value='<?php echo $row['contact2']?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Email<strong style="color:red;">*</strong></label>
                                <input type="email" name="email" class="form-control mb-3" placeholder="Enter Email" value='<?php echo $row['email']?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Image<strong style="color:red;"> *<sup>image must be w=980*h=890</sup></strong></label>
                                <input type="file" name="file" accept=".jpg, .png, .jpeg" class="form-control mb-3">
                            </div>
                           
                            
                         
                                                                                            </div>

                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        
                                                                        </div>
                                                                                
                                                                    
                                                                </div>

                                                                <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                        <input type="submit" class="btn btn-danger" onclick='return checkdelete(2);' data-bs-dismiss="modal" name="upsubmit" value="Update">
                                                                
                                                                </div>
                                                                </form>
                                                            </div>
                                                    </div>
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
<?php
if(!empty($_POST['upsubmit'])){
    
    $did = $_POST['id'];

    $abc=rand(100,9999);
    $lap=$_FILES['file']['name'];
    $n=$abc.$lap;
    $tmp_name1=$_FILES['file']['tmp_name'];
    $location1="../uploads/".$n;
    move_uploaded_file($tmp_name1,$location1);


    $contact1 = $_POST['contact1'];
    $contact2 = $_POST['contact2'];
    $email = $_POST['email'];
    
    if(empty($lap)){
         $sql = "SELECT * from `career` where id='".$did."'";
          $q_run=mysqli_query($conn,$sql);
            $res=mysqli_fetch_row($q_run);
            $n=$res[4];
    }
   
         
    $UQuery = "UPDATE `career` SET `contact1`='$contact1',`contact2`='$contact2',`email`='$email',`img`='$n' WHERE id='$did'";
    
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
        
        ?>
        <script>alert("Data Update")</script>
        <script>window.location.href="career.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
}
?>
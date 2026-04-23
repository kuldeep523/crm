<?php
include("../connection.php");
if(!empty($_GET['id']))
    {
    $did = $_GET['id'];
    $delete = "DELETE FROM `about_us` WHERE Id='$did'";
    $run = mysqli_query($conn, $delete);?>
    <script>alert("About us delete successfully");
    window.location.href="about_us.php;</script>
    <?php
    }
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>CRMlanding | About us</title>
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
                                <h4 class="mb-sm-0">About us</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">About us</a></li>
                                        <li class="breadcrumb-item active">About us List</li>
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
                                                        <a href="add_about_us.php" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add About us</a>
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
                                    $query = "SELECT * FROM  `about_us`";
                                    $query_run = mysqli_query($conn, $query);
                                    $counter=0;
                                    ?>
                                    <table class="table" id="example">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th scope="col">S.NO.</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">sub Heading</th>
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
                                                        <td><?php 



                                                                 $content1 = $row['title'];
                                                                 for($y = 0;$y<strlen($content1);$y++){ 
                                                                    echo ($content1)[$y]; 
                                                                    if($y == 10)
                                                                    {echo '.......';
                                                                    $content1= ''; }
                                                                 }
                                                        
                                                        
                                                        
                                                        ?></td>
                                                        <td><?php 

                                                                $content = $row['s_title'];
                                                               for($i = 0;$i<strlen($content);$i++){ 
                                                                  echo ($content)[$i]; 
                                                                  if($i==50)
                                                                  {echo '.......';
                                                                  $content= ''; }
                                                               } ?></td>
														        <td><img src="../uploads/<?php echo $row['img']?>" alt="" height="50px"  width="50px"></td></td>
                                                       
                                                        <td><?php echo $row['date']; ?></td>
                                                        <td><a href="about_us_list.php?id=<?php echo $row['Id']; ?>" class="btn btn-sm btn-danger edit-item-btn">Add Attributes</a></td>
                                                        <td> <a href="../pStatus.php?id=<?php echo $row['Id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=addabout" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>

                                                        <td>
                                                            <div class="remove d-flex"> 
                                                                <a  class="btn btn-sm btn-danger edit-item-btn me-2 " data-bs-toggle="modal" data-bs-target="#demo<?php echo $row['Id']; ?>">Update</a>
                                                                <a href="?id=<?php echo $row['Id'];?>" onclick="return checkdelete(1)"  class="btn btn-sm btn-danger edit-item-btn">Delete</a>

                                                                
                                                                <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                                <div class="modal fade  flip" id="demo<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="myLargeModalLabel">About Us</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="card-body form-steps">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 row">
                                                                                        <input class="d-none" name="id" value="<?php echo $row['Id']?>">
                                                                                        <div class="col-lg-6">
                                                                                                <label for="address" class="form-label ">Color<strong style="color:red;"> *</strong></label>
                                                                                                <input type="text" name="upTitle" class="form-control mb-3" value="<?php echo $row['title'];?>">
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <label for="address" class="form-label ">Image<strong style="color:red;">*</strong></label>
                                                                                                <input type="file" name="upiconfile" class="form-control mb-3" src="<?php echo $row['img']; ?>">
                                                                                            </div>
                                                                                            <div class="col-lg-12">
                                                                                                <label for="address" class="form-label ">contant<strong style="color:red;">*</strong></label>
                                                                                                <textarea id="ckeditor-c lassic" name="upstitle" class="form-control"  id="" cols="3" rows="3" ><?php echo $row['s_title'];?></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            <!-- Modal footer -->
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                                    <input type="submit" class="btn btn-danger"  data-bs-dismiss="modal" onclick="return checkdelete(2)" name="upsubmit" value="Update">
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
                                                    }   
                                                    else
                                                    {
                                                        echo "Data not found";
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
    include ("../folderfooter.php");
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
       
         function checkdelete(id) {
        if(id==1){
        return confirm('Are You sure you want to delete this record.');
        }
        if(id==2){
            return confirm('Are You sure you want to Update this record.');
        }
    }
   
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
if(isset($_POST['upsubmit'])){
    
    $did = $_POST['id'];
    $Name = $_POST['upTitle'];

    $abc=rand(100,9999);
    $icon=$abc.$_FILES['upiconfile']['name'];
    $tmp_name=$_FILES['upiconfile']['tmp_name'];
    $location="../uploads/".$icon;
    move_uploaded_file($tmp_name,$location);


    $sql = "SELECT * from `about_us` where Id='".$did."'";
    $res= $conn->query($sql);
    if($res->num_rows > 0 ){
    while($data = $res->fetch_assoc()){
   if(empty($icon)){ $icon = $data['img'];}}}

    $stitle = addslashes($_POST['upstitle']);
    $UQuery = "UPDATE `about_us` SET`title`='$Name',`s_title`='$stitle',`img`='$icon',`date`=now() WHERE  `Id` = '$did'";
    
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
        
        ?>
        <script>alert("About us update successfully");</script>
        <script>window.location.href="about_us.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    


}
?>
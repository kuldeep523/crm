<?php
include("../connection.php");
if(!empty($_GET['Id']))
    {
    $did = $_GET['Id'];
    $delete = "DELETE FROM `assets` WHERE id='$did'";
    $run = mysqli_query($conn, $delete);
    header("location:assets.php");
    }
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>CRM Landing | Assets</title>
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
                                <h4 class="mb-sm-0">Assets</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Assets</a></li>
                                        <li class="breadcrumb-item active">Assets List</li>
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
                                                        <a href="add_assets.php" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Assets</a>
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
                                    $query = "SELECT * FROM `assets`";
                                    $query_run = mysqli_query($conn, $query);
                                    $counter=0;
                                    ?>
                                    <table class="table" id="example">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th scope="col">S.NO.</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">icon image</th>
                                                <th scope="col">mobile image</th>
                                                <th scope="col">laptop image</th>
                                                <th scope="col">content</th>
                                                <th scope="col">Color</th>
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
                                                        <td><?php echo $row['title']?></td></td>
                                                        <td><img src="../uploads/<?php echo $row['icon']?>" alt="" height="50px"  width="50px"></td></td>
                                                        <td><?php if($row['mob_image']){?><img src="../uploads/<?php echo $row['mob_image']?>" alt="" height="15px"  width="50px"><?php }?></td>
                                                        <td><?php if($row['lap_image']){?><img src="../uploads/<?php echo $row['lap_image']?>" alt="" height="15px"  width="50px"><?php }?></td>
                                                        
                                                        <td><?php 
                                                                $content =$row['content'];
                                                               for($i = 0;$i<strlen($content);$i++){ 
                                                                  echo ($content)[$i]; 
                                                                  if($i==10 )
                                                                  {echo '.......';
                                                                    $content= ''; }
                                                               } ?></td>
														       <td><?php echo $row['color']?></td></td>       
                                                       
                                                        <td><?php echo $row['date']; ?></td>
                                                        <td><a href="features.php?fid=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger edit-item-btn">Add Attributes</a></td>
                                                        <td> <a href="../pStatus.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=assets" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
														<td>
                                                    <div class="remove d-flex"> 
                                                    <a href="?id=<?php echo $row['id'];?>" class="btn btn-sm btn-danger edit-item-btn " data-bs-toggle="modal" data-bs-target="#demo<?php echo $row['id']; ?>">Update</a>
                                                        <a href="?Id=<?php echo $row['id'];?>" onclick='return checkdelete(1);' class="btn btn-sm btn-danger edit-item-btn ms-2">Delete</a>
                                                    <div class="container mt-3">
                                       
                                        

                                                            <!-- The Modal -->
                                                        <div class="modal flip" id="demo<?php echo $row['id']; ?>">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">About us</h4>
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
                                                                                        <h4 class="card-title mb-0">About us Details</h4>
                                                                                    </div><!-- end card header -->
                                                                                    <div class="card-body form-steps">
                                                                                        
                                                                                        <div class="row">

                                                                                            <div class="col-lg-12 row">
                                                                                                <input type="text" class="d-none" name="id"  value="<?php echo $row['id']?>">
                                                                                                <div class="col-lg-6">
                                                                                                    <label for="address" class="form-label ">Assets Title<strong style="color:red;">*</strong></label>
                                                                                                    <input type="text" name="Title" class="form-control mb-3" value="<?php echo $row['title']?>" >
                                                                                                </div>
                                                                                                <div class="col-lg-6">
                                                                                                    <label for="address" class="form-label ">Assets icon<strong style="color:red;"> *</strong></label>
                                                                                                    <input type="file" name="iconfile" class="form-control mb-3" value="<?php echo $row['icon']?>" >
                                                                                                </div>
                                                                                                <div class="col-lg-6">
                                                                                                    <label for="address" class="form-label ">Laptop image<strong style="color:red;"> *</strong></label>
                                                                                                    <input type="file" name="lapfile" class="form-control mb-3" value="<?php echo $row['lap_image']?>" >
                                                                                                </div>
                                                                                                <div class="col-lg-6">
                                                                                                    <label for="address" class="form-label ">Mobile image<strong style="color:red;"> *</strong></label>
                                                                                                    <input type="file" name="mobfile" class="form-control mb-3" value="<?php echo $row['mob_image']?>" >
                                                                                                </div>
                                                                                                <div class="col-lg-6">
                                                                                                    <label for="address" class="form-label ">buttom link<strong style="color:red;">*</strong></label>
                                                                                                    <input type="text" name="link" class="form-control mb-3" value="<?php echo $row['btnlink']?>"  >
                                                                                                </div>
                                                                                                <div class="col-lg-6">
                                                                                                    <label for="address" class="form-label ">color<strong style="color:red;">*</strong></label>
                                                                                                    <input type="color" name="color" class="form-control mb-3" value="<?php echo $row['color']?>"  >
                                                                                                </div>
                                                                                                <div  class="col-lg-12 pb-3">
                                                                                                        <label class="form-label" for="stocks-input"> About sub Title<strong style="color:red;">*</strong></label>
                                                                                                        <textarea id="ckeditor-c lassic" name="stitle" class="form-control" placeholder="Enter Short Blog Details" id="" cols="3" rows="3" ><?php echo $row['content']?></textarea>
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
if(isset($_POST['upsubmit'])){
    
    $did = $_POST['id'];
    $Name = $_POST['Title'];

    $abc=rand(100,9999);
    $icon=$_FILES['iconfile']['name'];
    $icon2=$abc.$icon;
    $tmp_name=$_FILES['iconfile']['tmp_name'];
    $location="../uploads/".$icon2;
    move_uploaded_file($tmp_name,$location);

    $lap=$_FILES['lapfile']['name'];
    $lap2=$abc.$lap;
    $tmp_name1=$_FILES['lapfile']['tmp_name'];
    $location1="../uploads/".$lap2;
    move_uploaded_file($tmp_name1,$location1);

    $mob=$_FILES['mobfile']['name'];
    $mob2=$abc.$mob;
    $tmp_name2=$_FILES['mobfile']['tmp_name'];
    $location2="../uploads/".$mob2;
    move_uploaded_file($tmp_name2,$location2);
    $sql = "SELECT * from `assets` where id='".$did."'";
                 $res= $conn->query($sql);
                 if($res->num_rows > 0 ){
                 while($data = $res->fetch_assoc()){
                if(empty($icon)){ $icon2 = $data['icon'];}
                if(empty($lap)){ $lap2 = $data['lap_image'];}
                if(empty($mob)){ $mob2 = $data['mob_image'];}}}


    $btn = $_POST['link'];

    $color = $_POST['color'];
    
    $stitle = addslashes($_POST['stitle']);
    $UQuery = "UPDATE `assets` SET`title`='$Name',`icon`='$icon2',`lap_image`='$lap2',`mob_image`='$mob2',`content`='$stitle',`btnlink`='$btn',`color`='$color',`date`=now() WHERE  `Id` = '$did'";
    
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
        
        ?>
        <script>alert("Data in Updata")</script>
        <script>window.location.href="assets.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
}
?>
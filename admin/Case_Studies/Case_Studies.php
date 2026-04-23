<?php
include("../connection.php");
if(!empty($_GET['Id']))
    {
    $did = $_GET['Id'];
    $delete = "DELETE FROM `Case_Studies` WHERE id='$did'";
    $run = mysqli_query($conn, $delete);
     ?>
        
        <script>window.location.href="Case_Studies.php";</script>
        <?php
    }
    
   
if(!empty($_GET['sid']))
{   
    $sid = $_GET['sid'];
    $status = $_GET['status'];
    $query = "UPDATE `Case_Studies` SET `status`='$status' WHERE id=$sid";
    $query_run = mysqli_query($conn, $query);
    ?>
        <script>window.location.href="Case_Studies.php";</script>
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
                                <h4 class="mb-sm-0">Case Studies</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Case Studies</a></li>
                                        <li class="breadcrumb-item active">Case Studies List</li>
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
                                                        <a href="add_Case_Studies.php" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Case Studies</a>
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
                                    $query = "SELECT * FROM `Case_Studies`";
                                    $query_run = mysqli_query($conn, $query);
                                    $counter=0;
                                    ?>
                                    <table class="table" id="example">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th scope="col">S.NO.</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">icon image</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">content</th>
                                                <th scope="col">Right Heading</th>
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
                                                        <td><?php echo $row['heading']?></td>
                                                        <td><img src="../uploads/<?php echo $row['icon']?>" alt="" height="50px"  width="50px"></td>
                                                        <td><img src="../uploads/<?php echo $row['image']?>" alt="" height="50px"  width="50px"></td>
                                                       
                                                        <td><?php 
                                                                $content =$row['content'];
                                                               for($i = 0;$i<strlen($content);$i++){ 
                                                                  echo ($content)[$i]; 
                                                                  if($i==10 )
                                                                  {echo '.......';
                                                                    $content= ''; }
                                                               } ?></td>
                                                               <td><?php echo $row['right_heading']?></td>
                                                                      
                                                       
                                                        <td><?php echo $row['created_date']; ?></td>
                                                        <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#de<?php echo $row['id'];?>" title="View Details">Atrributes</button>
                                                    <div id="de<?php echo $row['id'];?>" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="flipModalLabel">Attributes Details</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <center style=''>
                                                            <a href="context.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Context</a>
															<a href="challenge.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">Challenges</a>
															<a href="solution.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">Solutions</a>
															<a href="benefit.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm">Benefits</a>
                                                           </center>
                                                        </div>
                                                        <div class="modal-footer">
							                                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                         </div>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div></td>
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
                                                                    <h4 class="modal-title">Update CASE STUDIES</h4>
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
                                                                                        <h4 class="card-title mb-0">CASE STUDIES Details</h4>
                                                                                    </div><!-- end card header -->
                                                                                    <div class="card-body form-steps">
                                                                                        
                                                                                        <div class="row">

                                                                                            <div class="col-lg-12 row">
                                                                                                <input type="text" class="d-none" name="id"  value="<?php echo $row['id']?>">
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Case Studies Heading<strong style="color:red;">*</strong></label>
                                <input type="text" name="heading" class="form-control mb-3" placeholder="Enter Service Heading" value='<?php echo $row['heading']?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Case Studies icon<strong style="color:red;"> *<sup>image must be w=50*h=50</sup></strong></label>
                                <input type="file" name="iconfile" class="form-control mb-3">
                            </div>
                            <div  class="col-lg-12 pb-3">
                                    <label class="form-label" for="stocks-input">Content<strong style="color:red;">*</strong></label>
                                    <textarea id="" name="content" class="form-control" placeholder="" id="" cols="3" rows="3" ><?php echo $row['content']?></textarea>
                                </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Image<strong style="color:red;"> * <sup>image must be w=550*h=300</sup></strong></label>
                                <input type="file" name="file" class="form-control mb-3">
                            </div>
                           <div class="col-lg-6">
                                <label for="address" class="form-label ">Button Name<strong style="color:red;"> *</strong></label>
                                <input type="text" name="btn_name" class="form-control mb-3" value='<?php echo $row['btn_name']?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Button link<strong style="color:red;">*</strong></label>
                                <input type="text" name="btn_link" class="form-control mb-3" placeholder="Enter Service Title" value='<?php echo $row['btn_link']?>'>
                            </div>
                             <div class="col-lg-6">
                                <label for="address" class="form-label ">Right Heading<strong style="color:red;">*</strong></label>
                                <input type="text" name="r_heading" class="form-control mb-3" placeholder="Enter Service Title" value='<?php echo $row['right_heading']?>'>
                            </div>
                               <div class="col-lg-6">
                                <label for="address" class="form-label ">Heading 1st<strong style="color:red;">*</strong></label>
                                <input type="text" name="f_heading" class="form-control mb-3" placeholder="Enter Heading" value='<?php echo $row['f_heading']?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Content 1st<strong style="color:red;">*</strong></label>
                                <input type="text" name="f_content" class="form-control mb-3" placeholder="Enter Contetn" value='<?php echo $row['f_content']?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Heading 2d<strong style="color:red;">*</strong></label>
                                <input type="text" name="s_heading" class="form-control mb-3" placeholder="Enter Heading" value='<?php echo $row['s_heading']?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Content 2nd<strong style="color:red;">*</strong></label>
                                <input type="text" name="s_content" class="form-control mb-3" placeholder="Enter Heading" value='<?php echo $row['s_content']?>'>
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
    $heading = $_POST['heading'];
    $r_heading = $_POST['r_heading'];
    $icon=$_FILES['iconfile']['name'];
    $tmp_name=$_FILES['iconfile']['tmp_name'];
    $location="../uploads/".$icon;
    move_uploaded_file($tmp_name,$location);

    $lap=$_FILES['file']['name'];
    $tmp_name1=$_FILES['file']['tmp_name'];
    $location1="../uploads/".$lap;
    move_uploaded_file($tmp_name1,$location1);

    $btn_name = $_POST['btn_name'];
    $btn_link = $_POST['btn_link'];
    
    $content = addslashes($_POST['content']);
    $f_heading = $_POST['f_heading'];
    $f_content = $_POST['f_content'];
    $s_heading = $_POST['s_heading'];
    $s_content = $_POST['s_content'];
    
    $sql = "SELECT * from `Case_Studies` where id='".$did."'";
                 $res= $conn->query($sql);
                 if($res->num_rows > 0 ){
                 while($data = $res->fetch_assoc()){
                if(empty($icon)){ $icon = $data['icon'];}
                if(empty($lap)){ $lap = $data['image'];}
            }}


  
    $UQuery = "UPDATE `Case_Studies` SET `heading`='$heading',`icon`='$icon',`image`='$lap',`content`='$content',`btn_name`='$btn_name',`btn_link`='$btn_link',`right_heading`='$r_heading',`f_heading`='$f_heading',`f_content`='$f_content',`s_heading`='$s_heading',`s_content`='$s_content' WHERE id='$did'";
    
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
        
        ?>
        <script>alert("Data Update")</script>
        <script>window.location.href="Case_Studies.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
}
?>
<?php
include("../connection.php");
     $id=$_GET['id']; 
if(!empty($_GET['did'])){
     $ddid=$_GET['did'];
     $id=$_GET['id']; 
    $d = "DELETE FROM `Case_Studies_Context` WHERE id='$ddid'";
    $d_r = mysqli_query($conn,$d);
    ?>
    <script>window.location.href="context.php?id=<?php echo $id; ?>";</script>
    <?php
}

if(!empty($_GET['sid']))
{   
    $sid = $_GET['sid'];
    $status = $_GET['status'];
    $query = "UPDATE `Case_Studies_Context` SET `status`='$status' WHERE id=$sid";
    $query_run = mysqli_query($conn, $query);
    ?>
        <script>window.location.href="context.php?id=<?php echo $id; ?>";</script>
        <?php
}

?>
<?php
if(!empty($_POST['submit'])){
    
    $context_number = $_POST['contextNo'];
    $colour = $_POST['clr'];
    $content = addslashes($_POST['case_content']);
   
    
    $query = "INSERT INTO `Case_Studies_Context`(`Case_Studies_id`, `number`, `color`, `content`, `status`) VALUES ('$id','$context_number','$colour','$content','Active')";
    
    $data = mysqli_query($conn,$query) or exit($query);
    if($data){
        ?>
        <script>alert("Data in inserted")</script>
        
        <script>window.location.href="context.php?id=<?php echo $id; ?>";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    
}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Category | Sub Categoryy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
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
                    <h4 class="mb-sm-0">Context</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Case Studies</a></li>
                                <li class="breadcrumb-item active">Context</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form class="g-4" action="" method="post" >
                    <div class="row">

                        <div class="col-lg-12 row">
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Context Number<strong style="color:red;">*</strong></label>
                                <input type="text" name="contextNo" class="form-control mb-3" placeholder="Enter Service Heading" >
                            </div>
                            
                           <div class="col-lg-6">
                                <label for="address" class="form-label ">Colour<strong style="color:red;"> *</strong></label>
                                <input type="color" name="clr" class="form-control mb-3">
                            </div>
                           
                            <div  class="col-lg-12 pb-3">
                                    <label class="form-label" for="stocks-input">Content<strong style="color:red;">*</strong></label>
                                    <textarea id="ckeditor- classic" name="case_content" class="form-control" placeholder="" id="" cols="3" rows="3" ></textarea>
                                </div>
                            
                            <div class="col-lg-12">
                            <input type="submit" class="btn btn-success w-sm"  name="submit" value="Submit">
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
            
            <div style="overflow-x: auto">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <div class="row g-4">
                                                
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
                                      
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                        
                                        <?php
                                            $caseq= "SELECT * FROM `Case_Studies_Context` where Case_Studies_id='$id'";
                                            $caseq_r = mysqli_query($conn,$caseq);
                                            $counter = 0;
                                        ?>
                                       
                                        <table class="table dataTable no-footer" id="example" aria-describedby="example_info">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.NO.: activate to sort column descending">S.NO.</th>
                                                <th scope="col" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Heading: activate to sort column ascending" >Number</th>
                                                <th scope="col" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="icon image: activate to sort column ascending">Content</th>
                                                <th scope="col" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Color</th>
                                                <th scope="col" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="content: activate to sort column ascending">Date</th>
                                                <th scope="col" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                                                <th scope="col" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Oparetion: activate to sort column ascending">Operation</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                                <?php
                                            if($caseq_r){
                                                foreach($caseq_r as $case_r){
                                          ?>                                                                                                
                                            <tr class="odd">
                                                <td scope="row" class="sorting_1"><?php echo ++$counter; ?></td>
                                                <td><?php echo $case_r['number']; ?></td>
                                                <td><?php echo $case_r['content']; ?></td>
                                                <td><div style='width:20px;height:20px;background-color:<?php echo $case_r['color']; ?>' ></div></td>
                                                <td><?php echo $case_r['created_date']; ?></td>
                                                
                                                <td> <a href="?id=<?php echo $id; ?>&sid=<?php echo $case_r['id']; ?>&status=<?php echo $case_r['status']=="Active"?"Pending":"Active"?>" class="<?php echo $case_r['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $case_r['status']=="Active"? "Disable":"Enable"?></a></td>
												<td>
                                                    <div class="remove d-flex"> 
                                                    <!--<a href="?id=6" class="btn btn-sm btn-primary edit-item-btn " data-bs-toggle="modal" data-bs-target="#demo6">Update</a>-->
                                                        <!--<a href="?Id=6" onclick="return checkdelete(1);" class="btn btn-sm btn-danger edit-item-btn ms-2">Delete</a>-->
                                                         <a href="?did=<?php echo $case_r['id']; ?>&id=<?php echo $id; ?>" onclick='return checkdelete(1);' class="btn btn-sm btn-danger edit-item-btn ms-2">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
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





<?php
include("../connection.php");
?>
<?php
$q='select * from contact_us';
$q_run=mysqli_query($conn,$q);
$row=mysqli_fetch_row($q_run);
$id=$row[0];
?>

<?php
if(!empty($_POST['submit'])){
    $contact1=$_POST['contact1'];
    $contact2=$_POST['contact2'];
    $gmail1=$_POST['gmail1'];
    $gmail2=$_POST['gmail2'];
    $address=$_POST['address'];
    
    $abc=rand(100,9999);
    $lap=$_FILES['file']['name'];
    $n=$abc.$lap;
    $tmp_name1=$_FILES['file']['tmp_name'];
    $location1="../uploads/".$n;
    move_uploaded_file($tmp_name1,$location1);
    
    if(empty($lap)){
        $n=$row[6];
    }
    
    $qu="UPDATE `contact_us` SET `contact1`='$contact1',`contact2`='$contact2',`gmail1`='$gmail1',`gmail2`='$gmail2',`address`='$address',`img`='$n' WHERE id='$id'";
    $qu_run=mysqli_query($conn,$qu);
    ?>
    <script>alert("Update successfully");window.location.href='contact_us.php';</script>
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
                                <h4 class="mb-sm-0">Contact Us</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Contact Us</a></li>
                                        <li class="breadcrumb-item active">Contact Us</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                   
                   
                   <div class="card">
                <div class="card-body">
                    <form class="g-4" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        
                        <div class="col-lg-12 row mx-0">
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Contact 1<strong style="color:red;">*</strong></label>
                                <input type="text" name="contact1" class="form-control mb-3" placeholder="Enter Contact 1" value='<?php echo $row[1]; ?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Contact 2<strong style="color:red;">*</strong></label>
                                <input type="text" name="contact2" class="form-control mb-3" placeholder="Enter Contact 2" value='<?php echo $row[2]; ?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Gmail 1<strong style="color:red;">*</strong></label>
                                <input type="email" name="gmail1" class="form-control mb-3" placeholder="Enter Email 1" value='<?php echo $row[3]; ?>'>
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="form-label ">Gmail 2<strong style="color:red;">*</strong></label>
                                <input type="email" name="gmail2" class="form-control mb-3" placeholder="Enter Email 2" value='<?php echo $row[4]; ?>'>
                            </div>
                             <div class="col-lg-12">
                                <label for="address" class="form-label ">Image<strong style="color:red;"> * <sup>image must be w=780*h=630</sup></strong></label>
                                <input type="file" name="file" accept=".jpg, .jpeg, .png" class="form-control mb-3">
                            </div>
                            <div  class="col-lg-12">
                                    <label class="form-label" for="stocks-input">Address<strong style="color:red;">*</strong></label>
                                    <textarea id="" name="address" class="form-control" placeholder="" id="" cols="3" rows="3" ><?php echo $row[5]; ?></textarea>
                                </div>
                            
                           
                            
                            <div class="col-lg-12 mt-3">
                            <input type="submit" class="btn btn-success w-sm"  name="submit" value="Update">
                            </div>
                        </div>

                    </div>
                    </form>
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
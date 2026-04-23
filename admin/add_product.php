<?php
include("connection.php");


if (isset($_POST['submit'])) {

    
    $filename =  $_FILES["uploadfile"]["name"];
    $tempname =  $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploads/" . $filename;
    move_uploaded_file($tempname, $folder);

    //Multy Select Images

    
    //Product Detail
    $blogTitle = addslashes($_POST['blogTitle']);
    
    $bSubTitle = $_POST['bSubTitle'];
        
    $ProductDescription = addslashes($_POST['ProductDescription']);
    $blogCategory = $_POST['blogCategory'];
    $query = "INSERT INTO `addblog`(`blogTitle`, `bSubTitle`, `blogCategory`, `ProductDescription`, `thumbnail`, `blogDate`, `status`) VALUES ('$blogTitle','$bSubTitle','$blogCategory','$ProductDescription','$filename',now(),'Active')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
       // header('Location:product_list.php');
       // echo '<script> alert("Product Upload Successsfully"); </script>';
       ?>
       <script>window.location.href="product_list.php";</script>
       <?php
        
    } else {
        echo '<script> alert("Product Not Upload Successsfully"); </script>';
    }
}

?>

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
            <form class="needs-validation" method="post" action="#" enctype="multipart/form-data">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Blog</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                            <li class="breadcrumb-item active">Add New Product</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Product Detail -->
                        <div id="hide">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Product Details</h4>
                                    </div><!-- end card header -->
                                    <div class="card-body form-steps">

                                        <div class="row">

                                            <div class="col-lg-12 row">
                                                <div class="col-lg-12">
                                                    <label for="address" class="form-label ">Blog Title<strong style="color:red;">*</strong></label>
                                                    <input type="text" name="blogTitle" class="form-control mb-3" placeholder="Enter Blog Title" >
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="address" class="form-label ">Blog Sub Title</label>
                                                    <textarea rows="5" class="form-control mb-3" cols="5" name="bSubTitle"></textarea>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="address" class="form-label">Blog Category<strong style="color:red;">*</strong></label>
                                                    <?php
                                                      $query = "SELECT label FROM systemtable where type='Blog Category'";
                                                      $query_run = mysqli_query($conn, $query);
                                                      ?>
                                                    <select class="form-select mb-3" onChange="my(this.value)" name="blogCategory" >
                                                        <option disabled selected>---Select---</option>
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
                                                <div class="col-lg-6">
                                                    <label for="address" class="form-label ">Thumnail<strong style="color:red;">*</strong></label>
                                                    <input type="file" name="uploadfile" class="form-control mb-3" >
                                                </div>
                                                
                                                <div class="col-lg-12 col-12 mb-3">
                                                    <div>
                                                        <label class="form-label" for="stocks-input">Product Description<strong style="color:red;">*</strong></label>
                                                        <textarea id="ckeditor-classic" name="ProductDescription" class="form-control" placeholder="Enter Short Product Details" id="" cols="3" rows="3" ></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                              
                                        </div>
                                    </div>
                                    
                                </div>
                                <input type="submit" class="btn btn-success w-sm"  name="submit" value="Submit">
                            </div>
                           
                        </div>
                        
            </form>

    </div>
    </div>



    </div>



    <?php
    include "footer.php";
    ?>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper --> 
                                                          




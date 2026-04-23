 <?php
include("../connection.php");
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Service | Attributes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

<?php
include "../folderheader.php";
include "../foldersidebar.php";
if(!empty($_GET['did']))
    {
    $did = $_GET['did'];
    $id = $_GET['id'];
    $delete = "DELETE FROM `service_detail` WHERE Id='$did'";
    $run = mysqli_query($conn, $delete);
    ?>
    <script>alert("About us attributes delete successfully");
    window.location.href="service_list.php?id=<?php echo $id ?>";</script>
    <?php
    }

?>
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
                        <h4 class="mb-sm-0">Service Attributes</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Service</a></li>
                                <li class="breadcrumb-item active">Attributes</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form class="g-4" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="mb-3 col-lg-12">
                            <table id="data_table" class="table">
                                            <!-- Your table headers -->
                                            <tr>
                                            
                                            <th class="text-black">Service Point:</th>
                                        
                                            </tr>
                                            <tr>
                                            
                                            <td><input type='text' placeholder="Enter Service Point" name='city[]' class='form-control gen' required></td>
                                            </tr>

                                        <!-- Rows will be dynamically added here -->
                                        </table>
                                       
                                        <button type="button" onclick="a()" class="btn btn-primary w-sm">Add More row</button>
                                        <input type="submit" name="submit" value="Submit"  class="btn btn-success w-sm text-center">
                                        </form>

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
                            
                            <table class="table table-borderless table-nowrap">
                                <thead>
                                    <tr class="bg-dark">
                                        <th scope="col">Id</th>
                                       
                                        <th scope="col">Point</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $id = $_GET['id'];
                                 $query = "SELECT * FROM `service_detail` where `service_id`='$id'";
                                 $query_run = mysqli_query($conn, $query);
                                 $counter=0;
                                    if ($query_run) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr>
                                                <th class="text-dark"><?php echo ++$counter ?></th>
                                                
                                                <td ><?php 
                                                
                                                    $list = $row['list'];
                                                    for($i = 0;$i<strlen($list);$i++){ 
                                                        echo ($list)[$i]; 
                                                        if($i==100 )
                                                        {echo '.......';
                                                         $list= ''; }
                                                    } 
                                                
                                                
                                                   

                                                ?></td>
                                                <td> <a href="../pStatus.php?id=<?php echo $row['Id']; ?>&fid=<?php echo $row['service_id']?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=servicelist" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
                                                
                                                <td>
                                                    <div class="remove"> 
                                                        <a class="btn btn-sm btn-danger edit-item-btn " data-bs-toggle="modal" data-bs-target="#demo<?php echo $row['Id']; ?>">Update</a>
                                                        <a href="?did=<?php echo $row['Id'];?>&id=<?php echo $id?>" onclick="return checkdelete(1)" class="btn btn-sm btn-danger edit-item-btn">Delete</a>

                                                        <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                            <div class="modal fade  flip" id="demo<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="myLargeModalLabel">Service Attributes</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="card-body form-steps">
                                                                                        
                                                                                        
                                                                                <div class="row">
                                                                                   
                                                                                    
                                                                                    <div class="col-lg-12 row">
                                                                                    <input class="d-none" name="id" value="<?php echo $row['Id']?>">
                                                                                    <input class="d-none" name="sid" value="<?php echo $row['service_id']?>">
                                                                                        <div class="col-lg-12">
                                                                                            <label for="address" class="form-label ">Point<strong style="color:red;">*</strong></label>
                                                                                            <input type="text" name="point" class="form-control mb-3" value="<?php echo $row['list']; ?>">
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        <!-- Modal footer -->
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
                                    }
                                    
                                       
                                    else {
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
<script>
    function a() {
                // Create a new row
                var table = document.getElementById("data_table");
                var newRow = table.insertRow(table.rows.length);

                // Add cells to the new row
                var cell1 = newRow.insertCell(0);
               
                // Set input fields for each cell
                cell1.innerHTML = "<input type='text'  name='city[]'  class='form-control' required>";
             
    }
    function checkdelete(id) {
        if(id==1){
        return confirm('Are You sure you want to delete this record.');
        }
        if(id==2){
            return confirm('Are You sure you want to Update this record.');
        }
    }
  
</script>
</html>
<?php
if (!empty($_POST['submit'])) {
    $city = $_POST['city'];
    $id = $_GET['id'];  // Move this outside the loop

    for ($i = 0; $i < count($city); $i++) {
        $c = mysqli_real_escape_string($conn, $city[$i]);
        $sql = "INSERT INTO `service_detail`(`service_id`, `list`, `status`) VALUES ('$id','$c','Active')";
        $r = mysqli_query($conn, $sql);
    }

        ?>
        <script>window.location.href="service_list.php?id=<?php echo $id; ?>";</script>
        <?php
}


if ($_POST['upsubmit']) {
    // Get the data from the form
    $eid = $_POST['id'];
    $sid = $_POST['sid'];
    $city = $_POST['point'];
     
     $sql = "UPDATE `service_detail` SET `list`='$city' WHERE Id = $eid";

        // Execute the query
        if (mysqli_query($conn, $sql)) {
        ?>
        <script>window.location.href="service_list.php?id=<?php echo $sid?>";</script>
        <?php
                
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    
    
}

?>
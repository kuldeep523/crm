
 <?php

include("../connection.php");

if(!empty($_GET['Id']))
    {
    $did = $_GET['Id'];
    $adid = $_GET['aid'];
    $delete = "DELETE FROM `about_us_list` WHERE Id='$did'";
    $run = mysqli_query($conn, $delete);
    ?>
    <script>alert("About us attributes delete successfully");
    window.location.href="about_us_list.php?id=<?php echo $adid; ?>";</script>
    <?php
    }

?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | Home | About Us | Attributes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

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
                        <h4 class="mb-sm-0">About Us Attributes</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">About Us</a></li>
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
                                            <th colspan="4" class="text-black" >About Us Attributes</th>
                                            </tr>
                                            <tr>
                                            <th class="text-black">Title</th>
                                                <th class="text-black">Number</th>
                                                <th class="text-black">Countable</th>
                                                
                                                <th class="text-black">Color</th>
                                            </tr>
                                            <tr>
                                            <td class="col-3"><input type='TEXT' placeholder="Enter Title" name='city2[]' class='form-control gen'></td>
                                            <td class="col-3"><input type='TEXT' placeholder="Enter Number" name='city[]' class='form-control gen'></td>
                                            <td class="col-3"><select   name='city1[]' class='form-control gen'>
                                                <option value=''>-- SELECT --</option>
                                                <option value='1'>YES</option>
                                                <option value='0'>NO</option>
                                                </select>
                                            </td>
                                                
                                           
                                            <td class="col-3"><input type='color'  name='city3[]' class='form-control gen'></td>
                                            </tr>

                                        <!-- Rows will be dynamically added here -->
                                        </table>
                                       
                                        <button type="button" onclick="a()" class="btn btn-primary w-sm">Add More row</button>
                                        <input type="submit" value="Submit" name="submit" class="btn btn-success w-sm text-center">
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
                                        <th scope="col">Title</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 $id = $_GET['id'];
                                 $query = "SELECT * FROM `about_us_list` where `about_id`='$id'";
                                 $query_run = mysqli_query($conn, $query);
                                 $counter=0;
                                    if ($query_run) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr>
                                                <th class="text-dark"><?php echo ++$counter ?></th>
                                                <td ><?php echo $row['heading']; ?></td>
                                                <td ><?php echo $row['Number']; ?></td>
                                                <td class="d-flex"><div style="background:<?php echo $row['color'];?>; width:20px"></div><?php echo $row['color'];?></td>
                                                <td ><?php echo $row['date']; ?></td>
                                                <td> <a href="../pStatus.php?id=<?php echo $row['Id']; ?>&fid=<?php echo $row['about_id']?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=aboutlist" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
                                                <td>
                                                    <div class="remove"> 
                                                        <a  class="btn btn-sm btn-danger edit-item-btn " data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg<?php echo $row['Id']; ?>">Update</a>
                                                        <a href="?Id=<?php echo $row['Id'];?>&aid=<?php  echo $row['about_id'];?>" onclick="return checkdelete(1)" class="btn btn-sm btn-danger edit-item-btn">Delete</a>
                                                        <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                            <div class="modal fade flip bs-example-modal-lg<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="myLargeModalLabel">About Us Attributes</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 row">
                                                                                <input class="d-none" name="id" value="<?php echo $row['Id']?>">
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Nunber<strong style="color:red;">*</strong></label>
                                                                                        <input type="text" name="upnumber" class="form-control mb-3" value="<?php echo $row['Number']; ?>">
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Image<strong style="color:red;">*</strong></label>
                                                                                        <select type="text" name="upcount" class="form-control mb-3">
                                                                                            <option value="1" 
                                                                                            <?php

                                                                                                if($row['count'] == 1){
                                                                                                    echo "selected";
                                                                                                }
                                                                                            ?>
                                                                                            >Yes</option>
                                                                                            <option value="0" 
                                                                                            <?php

                                                                                                if($row['count'] == 0){
                                                                                                    echo "selected";
                                                                                                }
                                                                                            ?>
                                                                                            >No</option>
                                                                                        <select>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Heading<strong style="color:red;">*</strong></label>
                                                                                        <input type="text" name="upheading" class="form-control mb-3" value="<?php echo $row['heading']; ?>">
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Color<strong style="color:red;"> *</strong></label>
                                                                                        <input type="color" name="upcolor" class="form-control mb-3" value="<?php echo $row['color'];?>">
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                            <input type="submit" class="btn btn-danger" data-bs-dismiss="modal"  onclick="return checkdelete(2)" name="upsubmit" value="Update">
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
                var cell2 = newRow.insertCell(1);
                var cell3 = newRow.insertCell(2);
                var cell4 = newRow.insertCell(3 );
               
                // Set input fields for each cell
                cell1.innerHTML = "<input type='TEXT'  name='city2[]' class='form-control gen'>";
                cell2.innerHTML = "<input type='text'  name='city[]'  class='form-control' >";
                cell3.innerHTML = "<select type='radio'  name='city1[]' class='form-control gen'><option value=''>SELECT</option><option value='1'>YES</option><option value='0'>NO</option> </select>";
                cell4.innerHTML = "<input type='color'  name='city3[]' class='form-control gen'>";
             
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
if(isset($_POST['submit'])){
    // Get the data from the form
    $city = $_POST['city'];
    $city1 = $_POST['city1'];
    $city2 = $_POST['city2'];
    $city3 = $_POST['city3'];

	 
    // Establish a database connection (Replace with your database credentials)
    error_reporting(0);
   include("connection.php");

    // Loop through the data and insert each row into the "product" table
    for ($i = 0; $i < count($city); $i++) {
        $City = mysqli_real_escape_string($conn, $city[$i]);
        $City1 = mysqli_real_escape_string($conn, $city1[$i]);
        $City2 = mysqli_real_escape_string($conn, $city2[$i]);
        $City3 = mysqli_real_escape_string($conn, $city3[$i]);
        $id = $_GET['id'];
        // Prepare the insert query
         $sql = "INSERT INTO `about_us_list`( `about_id`,`Number`, `count`, `heading`,`color`, `date`, `status`) VALUES ('$id','$City','$City1','$City2','$City3',now(),'Active')";
            $r=mysqli_query($conn, $sql);
        // Execute the query
    }
        ?>
        <script>alert("About us attributes insert successfully")</script>
        <script>window.location.href="about_us_list.php?id=<?php echo $id; ?>";</script>
        <?php
    
}



if(isset($_POST['upsubmit'])){
    
    $did = $_POST['id'];
    $Number = $_POST['upnumber'];
    $count = $_POST['upcount'];
    $heading = $_POST['upheading'];
    $color = $_POST['upcolor'];
    
    $UQuery = "UPDATE `about_us_list` SET `Number`='$Number',`count`='$count',`heading`='$heading',`color`='$color',`date`=now() WHERE  `Id` = '$did'";
    echo $UQuery;
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
        $abid = $_GET['id'];
        
        ?>
        <script>alert("About us attributes update successfully")</script>
        <script>window.location.href="about_us_list.php?id=<?php echo $abid; ?>";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    


}
?>

 <?php

include("../connection.php");

if(!empty($_GET['Id']))
    {
    $did = $_GET['Id'];
    
    $delete = "DELETE FROM `testimonial` WHERE id='$did'";
    $run = mysqli_query($conn, $delete);
    header("location:testimonial.php");
    }

?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

<meta charset="utf-8" />
<title>CRM Landing | HOME | TESTIMONIAL    </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
App favicon
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
                        <h4 class="mb-sm-0">Testimonial</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Testimonial</a></li>
                                <li class="breadcrumb-item active">Add Testimonial</li>
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
                                <th colspan="2" class="text-black" >Service Point:</th>
                                </tr>
                                
                                <tr>
                                <td class="col-4"><label for="">Customers Name</label><input type='TEXT' placeholder="Enter Customer Name" name='city[]' class='form-control gen'required></td>
                                <td class="col-4"><label for="">Testimonial Heading</label><input type='text' placeholder="Enter Testimonial Heading" name='city1[]' class='form-control gen'></td>
                                <td class="col-4"><label for="">Border Color</label><input type='color'  name='city2[]' class='form-control gen'></td>
                                </tr>
                                <tr>
                                   <td class="col-6"><label for="">customer designation</label><input type='TEXT' placeholder="Enter Customer designation" name='designation[]' class='form-control gen'required></td>
                                <td class="col-6"><label for="">Customer Image</label><input type='file'  name='file[]' class='form-control gen'></td>
                                </tr>
                                <tr>
                                <td class="col-12" colspan="3"><label for="">Testimonial Desription</label><textarea name="stitle[]" class="form-control" placeholder="Enter Testimonial Desription" ></textarea>
                                </td>
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
                        <div class="card-body" style='overflow:auto'>
                            <!-- Tables Without Borders -->
                            
                            <table class="table">
                                <thead>
                                    <tr class="bg-dark">
                                        <th scope="col">Id</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">count</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">color</th>
                                        <th>Designation</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Update</th>
                                         <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 
                                 $query = "SELECT * FROM `testimonial`";
                                 $query_run = mysqli_query($conn, $query);
                                 $counter=0;
                                    if ($query_run) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr>
                                                <th class="text-dark"><?php echo ++$counter ?></th>
                                                
                                                <td ><?php echo $row['name']; ?></td>
                                                <td >
                                                <?php 
                                                
                                                $heading =$row['heading'];
                                                for($i = 0;$i<strlen($heading);$i++){ 
                                                    echo ($heading)[$i]; 
                                                    if($i==30 )
                                                    {echo '.......';
                                                        $heading= ''; }
                                                    }
                                                        ?>
                                                
                                                </td>
                                                <td ><?php 
                                                
                                                    $content =$row['content'];
                                                    for($i = 0;$i<strlen($content);$i++){ 
                                                        echo ($content)[$i]; 
                                                        if($i==30 )
                                                        {echo '.......';
                                                            $content= ''; }
                                                        }
                                                            ?>
                                                </td>
                                                <td class="d-flex"><div style="background:<?php echo $row['color'];?>; width:20px" class="me-1"></div><?php echo $row['color'];?></td>
                                               <td><?php echo $row['designation']; ?></td>
                                                <td ><?php echo $row['date']; ?></td>
                                                <td> <a href="../pStatus.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']=="Active"?"Pending":"Active"?>&action=testimonial" class="<?php echo $row['status']=="Active"?"btn btn-sm btn-dark":"btn btn-sm btn-light"?>"><?php echo $row['status']=="Active"? "Disable":"Enable"?></a></td>
                                                <td>
                                                    <div class="remove"> 
                                                        <a  class="btn btn-sm btn-danger edit-item-btn " data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg<?php echo $row['id']; ?>">Update</a>
                
                                                        <form class="needs-validation" method="post" action="" enctype="multipart/form-data">
                                                            <div class="modal fade flip bs-example-modal-lg<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="myLargeModalLabel">Testimonial</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 row">
                                                                                    <input type="text" class="d-none" name="did" value="<?php echo $row['id']?>">
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Name<strong style="color:red;">*</strong></label>
                                                                                        <input type="text" name="upname" class="form-control mb-3" value="<?php echo $row['name']; ?>">
                                                                                    </div>
                                                                                   
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Heading<strong style="color:red;">*</strong></label>
                                                                                        <input type="text" name="upheading" class="form-control mb-3" value="<?php echo $row['heading']; ?>">
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Color<strong style="color:red;">*</strong></label>
                                                                                        <input type="color" name="upcolor" class="form-control mb-3" value="<?php echo $row['color']; ?>">
                                                                                    </div>
                                                                                     <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Designation<strong style="color:red;">*</strong></label>
                                                                                        <input type="text" name="designation" class="form-control mb-3" value="<?php echo $row['designation']; ?>">
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label for="address" class="form-label ">Image<strong style="color:red;">*</strong></label>
                                                                                        <input type="file" name="file" class="form-control mb-3" value="<?php echo $row['img']; ?>">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label for="address" class="form-label ">Content<strong style="color:red;"> *</strong></label>
                                                                                        <textarea type="text" name="upcontent" class="form-control mb-3" ><?php echo $row['content'];?></textarea>
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
                                                <td>
                                                    
                                                                                            <a href="?Id=<?php echo $row['id'];?>" onclick="return checkdelete(1)" class="btn btn-sm btn-danger edit-item-btn">Delete</a>
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
    var newRow1 = table.insertRow(table.rows.length);

    // Add cells to the new row
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow1.insertCell(0);
    cell4.setAttribute("colspan", "3");

    // Set input fields for each cell
    cell1.innerHTML = "<label>Name</label><input type='text' name='city[]' class='form-control gen' required>";
    cell2.innerHTML = "<label>Heading</label><input type='text' name='city1[]' class='form-control' required>";
    cell3.innerHTML = "<label>Color</label><input type='color' name='city2[]' class='form-control gen'>";
    cell4.innerHTML = "<label>Content</label><textarea name='stitle[]' class='form-control' placeholder='Enter Short Blog Details' id='' cols='2' rows='2'></textarea>";

    // Append customer designation and customer image fields to the new row
    cell1.innerHTML += "<label>Customer Designation</label><input type='text' placeholder='Enter Customer designation' name='designation[]' class='form-control gen' required>";
    cell2.innerHTML += "<label>Customer Image</label><input type='file' name='file[]' class='form-control gen'>";
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
    $city2 = $_POST['stitle'];
    $city3 = $_POST['city2'];
	 $deg=$_POST['designation'];
	 
	for ($j = 0; $j < count($_FILES['file']['name']); $j++) {
    
	}
    // Establish a database connection (Replace with your database credentials)
    error_reporting(0);
   include("connection.php");

   
    for ($i = 0; $i < count($city); $i++) {
        $City = mysqli_real_escape_string($conn, $city[$i]);
        $City1 = mysqli_real_escape_string($conn, $city1[$i]);
        $City2 = mysqli_real_escape_string($conn, $city2[$i]);
        $City3 = mysqli_real_escape_string($conn, $city3[$i]);
        $degin = mysqli_real_escape_string($conn, $deg[$i]);
        
        $abc=rand(100,9999);
        $filename = $abc.$_FILES['file']['name'][$i];
    $temp_name = $_FILES['file']['tmp_name'][$i];
    $location = "../uploads/".$filename;
    move_uploaded_file($temp_name, $location);

       
        
         $sql = "INSERT INTO `testimonial`(`name`, `heading`, `content`,`color`, `date`, `status`,`designation`,`img`) VALUES ('$City','$City1','$City2','$City3',now(),'Active','$degin','$filename')";
            $r=mysqli_query($conn, $sql);
    }
        ?>
        <script>window.location.href="testimonial.php";</script>
        <?php
    
}



if(isset($_POST['upsubmit'])){
    
    $did = $_POST['did'];
    $name = addslashes($_POST['upname']);
    $heading = addslashes($_POST['upheading']);
    $content = addslashes($_POST['upcontent']);
    
     $deg=$_POST['designation'];
    $color = $_POST['upcolor'];
    
    $abc=rand(100,9999);
     $filename = $_FILES['file']['name'];
     $filename2=$abc.$filename;
    $temp_name = $_FILES['file']['tmp_name'];
    $location = "../uploads/".$filename2;
    move_uploaded_file($temp_name, $location);
     $sql = "SELECT * from `testimonial` where id='".$did."'";
                 $res= $conn->query($sql);
                 if($res->num_rows > 0 ){
                 while($data = $res->fetch_assoc()){
                if(empty($filename)){ $filename2 = $data['img'];}
            }}
    
  
    $UQuery = "UPDATE `testimonial` SET `name`='$name',`heading`='$heading',`content`='$content',`color`='$color',`designation`='$deg',`img`='$filename2' WHERE `id`='$did'";
    $Udata = mysqli_query($conn,$UQuery);
    if($Udata){
        
        
        ?>
        <script>alert("Data in Updata")</script>
        <script>window.location.href="testimonial.php";</script>
        <?php
    }
    else{
        echo "<script>alert('Please Try Again...!')</script>";
    }
    


}
?>
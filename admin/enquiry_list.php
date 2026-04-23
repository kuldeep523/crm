<?php
    include("connection.php");
?>
<?php
    if(!empty($_GET['did']))
    {
    $did = $_GET['did'];
    $delete = "DELETE FROM `Enquiry` WHERE id='$did'";
    $run = mysqli_query($conn, $delete);
    header("location:enquiry_list.php");
	//exit();
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>CRM Landing | Enquiry List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></link>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"></link>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    <?php                  
    include "header.php";                 
    ?>
    <?php                  
    include "sidebar.php";                 
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
                                <h4 class="mb-sm-0">Enquiry</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Enquiry</a></li>
                                        <li class="breadcrumb-item active">Enquiry List</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                
                                <div class="card-body" style="overflow-x:auto;">
                                    <!-- Tables Without Borders -->
                                    <?php
                                    $query = "SELECT * FROM Enquiry order by id desc";
                                    $query_run = mysqli_query($conn, $query);
                                    $counter=0;
                                    ?>
                                    <table class="table" id="example">
                                        <thead style="background-color: black;color:white">
                                            <tr>
                                                <th scope="col">S.No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Contact</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Call Request</th>
                                                <th scope="col">Opration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($query_run) {
                                                foreach ($query_run as $row) {
                                            ?>
                                                    <tr>
                                                        <td scope="row"><?php echo ++$counter ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['designation']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
														<td><?php echo $row['country']; ?>-<?php echo $row['contact']; ?></td>
														<td><?php echo $row['date']; ?></td>
                                                        <td>
                                                            <?php
                                                            if($row['callRequest']=='1')
                                                            {
                                                                ?>
                                                            <span class="badge bg-success">Call Request</span>
                                                            <?php
                                                            }
                                                            elseif($row['callRequest']=='2')
                                                            {
                                                                ?>
                                                            <span class="badge bg-primary">Career Request</span>
                                                            <?php
                                                            }
                                                            elseif($row['callRequest']=='3')
                                                            {
                                                                ?>
                                                            <span class="badge bg-info">Contact Request</span>
                                                            <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                    <span class="badge bg-warning">Normal Query</span>
                                                                <?php
                                                            }
                                                            ?>
                                                            </td>
                                                        
														<td>
                                                <div class="remove">
                                                    <a href="?vid=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#demo<?php echo $row['id']; ?>"><i class="ri-eye-fill "></i></a>
                                                       <div class="modal fade" id="demo<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        
                                                        <h4  class="modal-title text-primary" id="exampleModalgridLabel" style="margin-left:150px"><?php
                                                            if($row['callRequest']=='1')
                                                            {
                                                                ?>
                                                            Call Request
                                                            <?php
                                                            }
                                                            elseif($row['callRequest']=='2')
                                                            {
                                                                ?>
                                                            Career Request
                                                            <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                            Normal Request
                                                            <?php
                                                            }
                                                            ?>
                                                        </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body pt-4">
                                                        <form action="javascript:void(0);">
                                                            <div class="row g-3">
                                                                <div class="col-xxl-6">
                                                                    <div>
                                                                        <label for="firstName" class="form-label">Name</label>
                                                                        <input type="text" class="form-control" id="firstName" value="<?php echo $row['name']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-6">
                                                                    <div>
                                                                        <label for="lastName" class="form-label">Email</label>
                                                                        <input type="text" class="form-control" id="lastName" value="<?php echo $row['email']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-6">
                                                                    <div>
                                                                        <label for="lastName" class="form-label">Country</label>
                                                                        <input type="text" class="form-control" id="lastName" value="<?php echo $row['country']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6">
                                                                    <div>
                                                                        <label for="lastName" class="form-label">Contact</label>
                                                                        <input type="text" class="form-control" id="lastName" value="<?php echo $row['contact']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6">
                                                                    <div>
                                                                        <label for="lastName" class="form-label">Date</label>
                                                                        <input type="text" class="form-control" id="lastName" value="<?php echo $row['date']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                
                                                                <?php
                                                                    if($row['callRequest']=='2')
                                                                    {
                                                                    ?>
                                                                    <div class="col-xxl-6">
                                                                        <div >
                                                                            <label for="lastName" class="form-label">Document</label>
                                                                            <div>
                                                                                <!--<img src="uploads/<?php echo $row['file'];?>" style="height:50px">-->
                                                                            <a href="uploads/<?php echo $row['file'];?>" download class="ps-2 btn btn-sm btn-success edit-item-btn"> Download</a>
                                                                            <a href="uploads/<?php echo $row['file'];?>" class="ps-2 btn btn-sm btn-warning edit-item-btn" target="_blank">Viwe Document</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                
                                                                <div class="col-xxl-12">
                                                                    <div>
                                                                        <label for="lastName" class="form-label">Date</label>
                                                                        <div>
                                                                        <textarea type="text" class="form-control"><?php echo $row['message']; ?></textarea>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                                <!--end col--> 
                                                            </div>
                                                            <!--end row-->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                    <a href="?did=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger edit-item-btn"><i class="ri-delete-bin-line"></i></a>
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
            include "footer.php";                 
            ?>



        </div>
        <!-- end main content-->

    </div>
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

   <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" ></script>
<script>
		$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
		
        buttons: [
            'excel', 'p df', 'pr int'
        ],
    } );
} );
		</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>


    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- sellers init js -->
    <script src="assets/js/pages/sellers.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>
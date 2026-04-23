<?php
    include("connection.php");


    $oId = $_GET['id'];
    $status = $_GET['status'];
    $action = $_GET['action'];
    $fid = $_GET['fid'];

   
if($action=="pList")
{
    $query = "UPDATE `enquiry` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
            header('location:product_list.php');
        }
        if($status=="Active")
        {
            header('location:product_list.php');
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
if($action=="banner")
{
    $query = "UPDATE `banner` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
            header('location:banner.php');
        }
        if($status=="Active")
        {
            header('location:banner.php');
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
if($action=="features_list")
{
    $query = "UPDATE `features_list` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
           ?>
            <script>window.location.href="webassets/features_list.php?id=<?php echo $fid?>";</script>
            <?php
        }
        if($status=="Active")
        {
            ?>
            <script>window.location.href="webassets/features_list.php?id=<?php echo $fid?>";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
        
if($action=="addassets")
{
    $query = "UPDATE `features` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
            ?>
            <script>window.location.href="webassets/features.php?fid=<?php echo $fid?>";</script>
            <?php
            
        }
        if($status=="Active")
        {
            ?>
            <script>window.location.href="webassets/features.php?fid=<?php echo $fid?>";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
if($action=="assets")
{
    $query = "UPDATE `assets` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
            ?>
            <script>window.location.href="webassets/assets.php";</script>
            <?php
           
        }
        if($status=="Active")
        {
           ?>
            <script>window.location.href="webassets/assets.php";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
if($action=="addabout")
{
    $query = "UPDATE `about_us` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
            ?>
            <script>window.location.href="home/about_us.php";</script>
            <?php
           
        }
        if($status=="Active")
        {
            ?>
            <script>window.location.href="home/about_us.php";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}   
   

if($action=="aboutlist")
{
    $query = "UPDATE `about_us_list` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
            ?>
            <script>window.location.href="home/about_us_list.php?id=<?php echo $fid?>";</script>
            <?php
        }
        if($status=="Active")
        {
             ?>
            <script>window.location.href="home/about_us_list.php?id=<?php echo $fid?>";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
} 
if($action=="servicelist")
{
    $query = "UPDATE `service_detail` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
             ?>
            <script>window.location.href="home/service_list.php?id=<?php echo $fid?>";</script>
            <?php
        }
        if($status=="Active")
        {
             ?>
            <script>window.location.href="home/service_list.php?id=<?php echo $fid?>";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
} 

if($action=="service")
{
    $query = "UPDATE `service` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
             ?>
            <script>window.location.href="home/service.php";</script>
            <?php
        }
        if($status=="Active")
        {
             ?>
            <script>window.location.href="home/service.php";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}   

if($action=="key")
{
    $query = "UPDATE `key_clinetele` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
             ?>
            <script>window.location.href="home/key.php";</script>
            <?php
        }
        if($status=="Active")
        {
           ?>
            <script>window.location.href="home/key.php";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
if($action=="testimonial")
{
    $query = "UPDATE `testimonial` SET `status`='$status' WHERE id=$oId";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if($status=="Pending")
        {
           ?>
            <script>window.location.href="home/testimonial.php";</script>
            <?php
        }
        if($status=="Active")
        {
           ?>
            <script>window.location.href="home/testimonial.php";</script>
            <?php
        }
      
    } else {
        echo '<script> alert("Your Order Not Confirmed"); </script>'; 
    }
}
?>
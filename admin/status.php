<?php
    include("connection.php");


    $oId = $_GET['id'];
    $status = $_GET['status'];
         $query = "UPDATE `customerdetail` SET `status`='$status' WHERE id=$oId";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            if($status=="Confirmed")
            {
                header('location:order_panding.php');
            }
            if($status=="Process")
            {
                header('location:confirmed_order.php');
            }
           
            if($status=="Delivery")
            {
                header('location:order_processing.php');
            }
            if($status=="Delivered")
            {
                header('location:order_out_for_delivery.php');
            }
            if($status=="Cancel")
            {
                header('location:all_order.php');
            }
            if($status=="uCancel")
            {
                header('location:../user_dashboard.php');
            }
            if($status=="uConfirmed")
            {
                header('location:pending_cancel_order.php');
            }
            if($status=="uActive")
            {
                header('location:confirmed_cancel_order.php');
            }
            if($status=="uSuccessfully")
            {
                header('location:active_cancel_order.php');
            }
        } else {
            echo '<script> alert("Your Order Not Confirmed"); </script>';
        }


    
   
?>
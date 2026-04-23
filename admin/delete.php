<?php

include("connection.php");
$oId = $_GET['id'];
$page = $_GET['status'];

if($page=="enquiry")
{
$query = "DELETE FROM enquiry WHERE id=$oId" ;
$query_run = mysqli_query($conn, $query);
if ($query_run)
    {
        header('location:enquiry_list.php');
    }
    else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
if($page=="subcategory")
{
$query = "DELETE FROM systemtable WHERE id=$oId" ;
$query_run = mysqli_query($conn, $query);
if ($query_run)
    {
        header('location:sub_category.php');
    }
    else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}

if($page=="productList")
{
$query = "DELETE FROM tour WHERE id=$oId" ;
$query_run = mysqli_query($conn, $query);
if ($query_run)
    {
        //header('location:product_list.php');
        ?>
        <script>window.location.href="product_list.php";</script>
        <?php
    }
    else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}


if($page=="banner")
{
$query = "DELETE FROM banner WHERE id=$oId" ;
$query_run = mysqli_query($conn, $query);
if ($query_run)
    {
        header('location:banner.php');
    }
    else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}

if($page=="blogList")
{
$query = "DELETE FROM addblog WHERE id=$oId" ;
$query_run = mysqli_query($conn, $query);
if ($query_run)
    {
       // header('location:product_list.php');
       ?>
        <script>window.location.href="product_list.php";</script>
        <?php
    }
    else {
        echo '<script> alert("Your Order Not Confirmed"); </script>';
    }
}
    ?>

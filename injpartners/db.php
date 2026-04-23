<?php
    /* Created by Aditya Kumawat */
    $servername = "localhost";
    $username = "u902173167_injpartners";       
    $password = "@Nkit1180@@";           
    $dbname = "u902173167_injpartners";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>

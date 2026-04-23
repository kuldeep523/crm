<?php
	session_start();
	unset($_SESSION['e_aid']);
	header("location:login.php");
	exit();
?>
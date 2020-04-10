<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['user']==""){
		header("location:login.php");
		exit();
	}
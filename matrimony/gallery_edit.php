<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	include "../connect.php";
	session_start();
	$email=$_SESSION['myusername'];
	$id=$_GET['id'];
	$show_g=mysqli_query($conn,"DELETE FROM `matrimonial_gallery` WHERE id=$id");
	header('Location: http://localhost/malimatrimony.org/matrimony/gallery.php');
?>
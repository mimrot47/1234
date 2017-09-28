
<?php 
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	include "../connect.php";
	session_start();
	$email=$_SESSION['myusername'];
	$id=$_GET['id'];
	$show_g=mysql_query("DELETE FROM `matrimonial_gallery` WHERE id=$id");
	header('Location: http://bhavsarmarriage.com/matrimony/gallery.php');


?>
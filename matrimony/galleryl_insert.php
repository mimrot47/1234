<?php
session_start();
include "../connect.php";
$email=$_SESSION['myusername'];
$show_g=mysqli_query($conn,"select * from matrimonialall where is_del='no' and email='$email'  ") or die(mysqli_error($conn));
while($row_g=mysqli_fetch_array($show_g))
{
	$unique_id=$row_g['unique_id'];
}

$file = $_FILES['img1']['tmp_name'];
$file=file_get_contents($file);
$file=mysqli_real_escape_string($conn,$file);


$file_size=$_FILES["img1"]["size"];
$file_type=$_FILES["img1"]["type"];

$tt1= $_FILES["img1"]["name"];
$filename=date("d-m-Y")."_".rand().str_replace(" ","_",$tt1);
move_uploaded_file($_FILES["img1"]["tmp_name"],"gallery_img/".$filename);         	

$query=mysqli_query($conn,"INSERT INTO `matrimonial_gallery` (id,unique_id,email,img,is_del) VALUES('','$unique_id','$email','$filename','no')");
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "add_gallery.php";';
		echo '</script>';

		
?>



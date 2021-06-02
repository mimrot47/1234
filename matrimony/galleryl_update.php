<?php include "../connect.php"; 
session_start();

  //$email=$_SESSION['myusername'];
$id=$_POST['id'];
$file = $_FILES['img']['tmp_name'];
$file = $_FILES['img']['tmp_name'];
$file=file_get_contents($file);
$file=mysqli_real_escape_string($conn,$file);


	$query=mysqli_query($conn,"UPDATE  matrimonial_gallery SET img='$file' WHERE id='$id'") or die(mysqli_error($conn));
    echo '<script type="text/javascript">'; 
	echo 'alert("photo updated..");'; 
	echo 'window.location.href = "gallery.php";';
	echo '</script>';

?>
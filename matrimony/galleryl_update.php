<?php include "../connect.php"; 
session_start();

  //$email=$_SESSION['myusername'];
$id=$_POST['id'];
$file = $_FILES['img']['tmp_name'];
$file = $_FILES['img']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


	$query=mysql_query("UPDATE  matrimonial_gallery SET img='$file' WHERE id='$id'") or die(mysql_error());
    echo '<script type="text/javascript">'; 
	echo 'alert("photo updated..");'; 
	echo 'window.location.href = "gallery.php";';
	echo '</script>';

?>
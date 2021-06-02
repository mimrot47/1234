<?php include "../connect.php"; 
	session_start();

  	$email=$_SESSION['myusername'];

	$file = $_FILES['photo']['tmp_name'];
	$file=file_get_contents($file);
	$file=mysqli_real_escape_string($conn,$file);
    	
	$file1 = $_FILES['cover_photo']['tmp_name'];
	$file1=file_get_contents($file1);
	$file1=mysqli_real_escape_string($conn,$file1);
	
	if($file!='')
	{
		$tt1= $_FILES["photo"]["name"];
		$filename=date("d-m-Y")."_".rand().str_replace(" ","_",$tt1);
		move_uploaded_file($_FILES["photo"]["tmp_name"],"../profile_photos/".$filename);
		//$query=mysqli_query($conn,"UPDATE  matrimonialall SET profile_pic='$file' WHERE email='$email'") or die(mysqli_error($conn));
		$query=mysqli_query($conn,"UPDATE  matrimonialall SET profile_pic='$filename' WHERE email='$email'") or die(mysqli_error($conn));
	}
	else
	{
		$tt2= $_FILES["cover_photo"]["name"];
		$filename1=date("d-m-Y")."_".rand().str_replace(" ","_",$tt2);
		move_uploaded_file($_FILES["cover_photo"]["tmp_name"],"cover_photos/".$filename1);
		//$query=mysqli_query($conn,"UPDATE  matrimonialall SET cover_photo='$file1' WHERE email='$email'") or die(mysqli_error($conn));
		$query=mysqli_query($conn,"UPDATE  matrimonialall SET cover_photo='$filename1' WHERE email='$email'") or die(mysqli_error($conn));
	}
	
   	echo '<script type="text/javascript">'; 
	echo 'alert("photo updated..");'; 
	echo 'window.location.href = "edit_photo.php";';
	echo '</script>';

?>
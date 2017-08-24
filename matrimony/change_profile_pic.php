<?php include "../connect.php"; 
session_start();

  $email=$_SESSION['myusername'];
//echo $photo=$_POST['profile_pic'];

$file = $_FILES['photo']['tmp_name'];
$file = $_FILES['photo']['tmp_name'];
$file=file_get_contents($file);
$file=mysql_real_escape_string($file);


$file_size=$_FILES["photo"]["size"];
$file_type=$_FILES["photo"]["type"];
           	
	//if($_FILES["img"]["tmp_name"])
//	    {
//		  $tt1= $_FILES["img"]["name"];
//                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
//                         move_uploaded_file($_FILES["img"]["tmp_name"],"hall_of_fame_img/".$filename1);
//                
//         }

	$query=mysql_query("UPDATE  matrimonialall SET profile_pic='$file' WHERE email='$email'") or die(mysql_error());
    echo '<script type="text/javascript">'; 
	echo 'alert("photo updated..");'; 
	echo 'window.location.href = "home.php";';
	echo '</script>';

?>
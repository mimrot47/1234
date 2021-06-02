<?php
session_start();
include "../connect.php";


$bride_name=$_POST['bride_name'];
$groom_name=$_POST['groom_name'];

$marriage_date=$_POST['marriage_date'];
$ss_heading=$_POST['ss_heading'];
$ss_desc=$_POST['ss_desc'];
	
		
$file = $_FILES['photo']['tmp_name'];
$file = $_FILES['photo']['tmp_name'];
$file=file_get_contents($file);
$file=mysqli_real_escape_string($conn,$file);


$file_size=$_FILES["photo"]["size"];
$file_type=$_FILES["photo"]["type"];
           	
	if($_FILES["photo"]["tmp_name"])
	    {
		  $tt1= $_FILES["photo"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["photo"]["tmp_name"],"matrimony_success_img/".$filename1);
                
         }
		
		 
		 $state=$_POST['state'];
		 $city=$_POST['city'];
		 
	$keyword=$bride_name.' , '.$groom_name;

		
   $query=mysqli_query($conn,"Insert Into success_stories(id,bride_name,groom_name,marriage_date,ss_heading,photo,ss_desc,state,city,keyword,is_del)
   values('','$bride_name','$groom_name','$marriage_date','$ss_heading','$filename1','$ss_desc','$state','$city','$keyword','no')") or die(mysqli_error($conn));

		echo '<script type="text/javascript">'; 
		echo 'alert("Success Stories Inserted..");'; 
		echo 'window.location.href = "success_stories.php";';
		echo '</script>';

		
?>
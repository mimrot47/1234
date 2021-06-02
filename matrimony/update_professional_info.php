<?php
include "../connect.php";
session_start();
$email=$_SESSION['myusername'];
$faculty=$_POST['faculty'];
//$academic_level=$_POST['academic_level'];
$college_name=$_POST['college_name'];$college_address=$_POST['college_address'];
$office_contact=$_POST['office_contact'];
$job_busi_status=$_POST['job_busi_status'];$working_post=$_POST['working_post'];
$annual_income=$_POST['annual_income'];
$work_place_address=$_POST['work_place_address'];	

		
	
	
	
mysqli_query($conn, "UPDATE matrimonialall SET faculty='$faculty',college_name='$college_name',college_address='$college_address',office_contact='$office_contact',job_busi_status='$job_busi_status',working_post='$working_post',annual_income='$annual_income',work_place_address='$work_place_address' where email='$email'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert(" Updated..");'; 
	echo 'window.location.href = "edit_professional_info.php";';
	echo '</script>';
 
 
?>
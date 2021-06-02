<?php
include "../connect.php";
session_start();
 $email=$_SESSION['myusername'];
	

$father_name=$_POST['father_name'];
$occupation_father=$_POST['occupation_father'];
$mother_name=$_POST['mother_name'];
$occupation_mother=$_POST['occupation_mother'];
$no_of_brother=$_POST['no_of_brother'];
$married_brother=$_POST['married_brother'];
$unmarried_brother=$_POST['unmarried_brother'];
$no_of_sister=$_POST['no_of_sister'];
$married_sister=$_POST['married_sister'];
$unmarried_sister=$_POST['unmarried_sister'];
$permanent_residential_address=$_POST['permanent_residential_address'];
$parent_conatct_no=$_POST['parent_conatct_no'];
		
	
	
	
	mysqli_query($conn, "UPDATE matrimonialall SET father_name='$father_name',occupation_father='$occupation_father',mother_name='$mother_name',occupation_mother='$occupation_mother',no_of_brother='$no_of_brother',married_brother='$married_brother',unmarried_brother='$unmarried_brother',no_of_sister='$no_of_sister',married_sister='$married_sister',unmarried_sister='$unmarried_sister',permanent_residential_address='$permanent_residential_address',parent_conatct_no='$parent_conatct_no' where email='$email'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert(" Updated..");'; 
	echo 'window.location.href = "edit_family_info.php";';
	echo '</script>';
 
 
?>
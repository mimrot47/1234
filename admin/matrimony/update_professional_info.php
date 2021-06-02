<?php
include "../connect.php";


$candidate_id=$_POST['candidate_id'];
$unique_id=$_POST['unique_id'];	

$faculty=$_POST['faculty'];
//$academic_level=$_POST['academic_level'];
$college_name=$_POST['college_name'];
$college_address=$_POST['college_address'];
$office_contact=$_POST['office_contact'];
$job_busi_status=$_POST['job_busi_status'];
$working_post=$_POST['working_post'];
$annual_income=$_POST['annual_income'];
$work_place_address=$_POST['work_place_address'];	


	
	
	mysqli_query($conn, "UPDATE matrimonialall SET faculty='$faculty',college_name='$college_name',college_address='$college_address',office_contact='$office_contact',job_busi_status='$job_busi_status',working_post='$working_post',annual_income='$annual_income',work_place_address='$work_place_address' where unique_id='$unique_id'") or die(mysqli_error($conn));
	
	$data=mysqli_fetch_array(mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'"));
	if($data['marriageType'] == 'Never married')
	{
		if($data['gender'] == 'Bride')
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Matrimony Updated..");'; 
			echo 'window.location.href = "matrimony_show_bride.php";';
			echo '</script>';
		}
		else
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Matrimony Updated..");'; 
			echo 'window.location.href = "matrimony_show_groom.php";';
			echo '</script>';
		}
	}	
	else
	{
		if($data['marriageType'] == 'divorcee')
		{
			if($data['gender'] == 'Bride')
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Matrimony Updated..");'; 
				echo 'window.location.href = "matrimony_show_divorce_bride.php";';
				echo '</script>';
			}
			else
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Matrimony Updated..");'; 
				echo 'window.location.href = "matrimony_show_divorce_groom.php";';
				echo '</script>';
			}
		}	
		else
		{
			if($data['marriageType'] == 'widow')
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Matrimony Updated..");'; 
				echo 'window.location.href = "matrimony_show_widow_bride.php";';
				echo '</script>';
			}	
			else
			{
				if($data['marriageType'] == 'widower')
				{
					echo '<script type="text/javascript">'; 
					echo 'alert("Matrimony Updated..");'; 
					echo 'window.location.href = "matrimony_show_widow_groom.php";';
					echo '</script>';
				}	
			}
		}
	
	}
	/*echo '<script type="text/javascript">'; 
	echo 'alert(" Matrimony Professional Information is Updated..");'; 
	echo 'window.location.href = "matrimony_home.php";';
	echo '</script>';*/
 
 
?>
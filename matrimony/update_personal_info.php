<?php
include "../connect.php";
session_start();
 $email=$_SESSION['myusername'];
	
	 //$id=$_POST['id'];
	
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$states=$_POST['states'];
$city=$_POST['city'];
$address=$_POST['address'];
 $mobile_no1=$_POST['mobile_no1'];
$birth_date=$_POST['DATEOFBIRTH'];
$birth_time=$_POST['birth_time'];
$day_of_birth=$_POST['day_of_birth'];
$birth_city=$_POST['birth_city'];
$birth_district=$_POST['birth_district'];
$birth_state=$_POST['birth_state'];
 $mobile_no2=$_POST['mobile_no2'];
$age=$_POST['age'];
$fit=$_POST['fit'];
$inches=$_POST['inches'];
$body_weight=$_POST['body_weight'];
$skin_tone=$_POST['skin_tone'];
$blood_group=$_POST['blood_group'];
$spectacles=$_POST['spectacles'];
$hobbies=$_POST['hobbies'];
$any_disability=$_POST['any_disability'];
$any_disability_desc=$_POST['any_disability_desc'];
$acceptation=$_POST['acceptation'];
$describe_yourself=$_POST['describe_yourself'];
/*$faculty=$_POST['faculty'];
$academic_level=$_POST['academic_level'];$college_name=$_POST['college_name'];$college_address=$_POST['college_address'];
$office_contact=$_POST['office_contact'];
$job_busi_status=$_POST['job_busi_status'];$working_post=$_POST['working_post'];
$annual_income=$_POST['annual_income'];
$work_place_address=$_POST['work_place_address'];	


,faculty='$faculty',academic_level='$academic_level',college_name='$college_name',college_address='$college_address',office_contact='$office_contact',job_busi_status='$job_busi_status',working_post='$working_post',annual_income='$annual_income',work_place_address='$work_place_address'
*/
		
	
$keyword=$city.",".$mobile_no2.",".$mobile_no1 ;

	
	
	mysql_query( "UPDATE matrimonialall SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name',states='$states',city='$city',address='$address',mobile_no1='$mobile_no1',birth_date='$birth_date',birth_time='$birth_time',day_of_birth='$day_of_birth',birth_city='$birth_city',birth_district='$birth_district',birth_state='$birth_state',mobile_no2='$mobile_no2',age='$age',fit='$fit',inches='$inches',body_weight='$body_weight',skin_tone='$skin_tone',blood_group='$blood_group',spectacles='$spectacles',hobbies='$hobbies',any_disability='$any_disability',acceptation='$acceptation',describe_yourself='$describe_yourself',keyword='$keyword' where email='$email'") or die(mysql_error());
	
	echo '<script type="text/javascript">'; 
	echo 'alert(" Updated..");'; 
	echo 'window.location.href = "edit_personal_info.php";';
	echo '</script>';
 
 
?>
<?php
include 'connect.php';

if($_POST['button']=="Sign Up")
{

$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$states=$_POST['states'];
$city=$_POST['city'];
$address=$_POST['address'];
$mobile_no1=$_POST['mobile_no1'];
$email=$_POST['email'];
$birth_date=$_POST['DATEOFBIRTH'];
$birth_time=$_POST['birth_time'];
$day_of_birth=$_POST['day_of_birth'];
$birth_city=$_POST['birth_city'];
$birth_district=$_POST['birth_district'];
$birth_state=$_POST['birth_state'];
$mobile_no2=$_POST['mobile_no2'];
$pass=$_POST['pass'];
$cast=$_POST['cast'];
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
//$profile_photo=$_POST['profile_photo'];
$faculty=$_POST['faculty'];
$academic_level=$_POST['academic_level'];$college_name=$_POST['college_name'];$college_address=$_POST['college_address'];
$office_contact=$_POST['office_contact'];
$job_busi_status=$_POST['job_busi_status'];$working_post=$_POST['working_post'];
$annual_income=$_POST['annual_income'];
$work_place_address=$_POST['work_place_address'];
$father_name=$_POST['father_name'];
$occupation_father=$_POST['occupation_father'];
$mother_name=$_POST['mother_name'];
$occupation_mother=$_POST['occupation_mother'];
$no_of_brother=$_POST['no_of_brother'];
$marital_satus_of_brother=$_POST['marital_satus_of_brother'];
$no_of_sister=$_POST['no_of_sister'];
$marital_satus_of_sister=$_POST['marital_satus_of_sister'];
$permanent_residential_address=$_POST['permanent_residential_address'];
//$ancestral_address=$_POST['ancestral_address'];
$parent_conatct_no=$_POST['parent_conatct_no'];
$birth_name=$_POST['birth_name'];
$own_kul=$_POST['own_kul'];
$mamkul=$_POST['mamkul'];
$gotra=$_POST['gotra'];$nakshtra=$_POST['nakshtra'];$charan=$_POST['charan'];
$rashi=$_POST['rashi'];
$nadi=$_POST['nadi'];
$gan=$_POST['gan'];
$guru=$_POST['guru'];$manglik_status=$_POST['manglik_status'];
$marriageType=$_POST['marriageType'];
$previous_marriage_date_divorcee=$_POST['previous_marriage_date_divorcee'];
$date_of_divorce=$_POST['date_of_divorce'];
$child_status_divorce=$_POST['child_status_divorce'];
$child_custody_status_divorce=$_POST['child_custody_status_divorce'];
$previous_marriage_address_divorce=$_POST['previous_marriage_address_divorce'];
$previous_marriage_date_widow=$_POST['previous_marriage_date_widow'];
$date_partner_death_widow=$_POST['date_partner_death_widow'];$child_status_widow=$_POST['child_status_widow'];
$previous_marriage_address_widow=$_POST['previous_marriage_address_widow'];



$rand_no=rand();
$unique_id=$last_name ."_".$rand_no;


 $marriageType;
if ($marriageType == "divorcee")

    $query2 = mysqli_query($conn,"insert into matrimonial_divorcee (id,unique_id,previous_marriage_date_divorcee,date_of_divorce,child_status_divorce,child_custody_status_divorce,previous_marriage_address_divorce)
	values('','$unique_id','$previous_marriage_date_divorcee','$date_of_divorce','$child_status_divorce','$child_custody_status_divorce','$previous_marriage_address_divorce')");
	
else if ($marriageType == "widow")
    $query2 = mysqli_query($conn,"insert into matrimonial_widow (id,unique_id,previous_marriage_date_widow,date_partner_death_widow,child_status_widow,previous_marriage_address_widow)
	values('','$unique_id','$previous_marriage_date_widow','$date_partner_death_widow','$child_status_widow','$previous_marriage_address_widow')");

$keyword= $gender.",".$marriageType.",". $age.",".$academic_level .",". $states.",".$city;

	$query=mysqli_query($conn,"insert into matrimonialall (candidate_id,unique_id,first_name,middle_name,last_name,gender,states,city,address,mobile_no1,email,birth_date,birth_time,day_of_birth,birth_city,birth_district,birth_state,mobile_no2,pass,cast,age,fit,inches,body_weight,skin_tone,blood_group,spectacles,hobbies,any_disability,any_disability_desc,acceptation,describe_yourself,faculty,academic_level,college_name,college_address,office_contact,job_busi_status,working_post,annual_income,work_place_address,father_name,occupation_father,mother_name,occupation_mother,no_of_brother,marital_satus_of_brother,no_of_sister,marital_satus_of_sister,permanent_residential_address,parent_conatct_no,birth_name,own_kul,mamkul,gotra,nakshtra,charan,rashi,nadi,gan,guru,manglik_status,marriageType,keyword,is_del)
	 										 values('','$unique_id','$first_name','$middle_name','$last_name','$gender','$states','$city','$address','$mobile_no1','$email','$birth_date','$birth_time','$day_of_birth','$birth_city','$birth_district','$birth_state','$mobile_no2','$pass','$cast','$age','$fit','$inches','$body_weight','$skin_tone','$blood_group','$spectacles','$hobbies','$any_disability','$any_disability_desc','$acceptation','$describe_yourself','$faculty','$academic_level','$college_name','$college_address','$office_contact','$job_busi_status','$working_post','$annual_income','$work_place_address','$father_name','$occupation_father','$mother_name','$occupation_mother','$no_of_brother','$marital_satus_of_brother','$no_of_sister','$marital_satus_of_sister','$permanent_residential_address','$parent_conatct_no','$birth_name','$own_kul','$mamkul','$gotra','$nakshtra','$charan','$rashi','$nadi','$gan','$guru','$manglik_status','$marriageType','$keyword','no')") or die(mysqli_error($conn));




echo '<script type="text/javascript">'; 
echo 'alert("Your Registeration Successfully Done  ");'; 
echo 'window.location.href = "login.php";';
echo '</script>';

}
	
	?>
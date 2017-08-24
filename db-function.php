<?php
include 'connect.php';


function big_insert($first_name,$middle_name,$last_name,$gender,$states,$city,$address,$mobile_no1,$birth_date,$birth_time,$day_of_birth,$birth_city,$birth_district,$birth_state,$mobile_no2,
$age,$height,$body_weight,$skin_tone,$blood_group,$spectacles,$hobbies,$any_disability,$acceptation,$describe_yourself,
$faculty,$academic_level,$college_name,$college_address,$office_contact,$job_busi_status,$working_post,$annual_income,$work_place_address,
$father_name,$occupation_father,$mother_name,$occupation_mother,$no_of_siblings,$marital_satus_of_siblings,$permanent_residential_address,$ancestral_address,$parent_conatct_no,
$birth_name,$own_kul,$mamkul,$gotra,$nakshtra,$charan,$rashi,$nadi,$gan,$guru,$manglik_status,
$marriageType,$previous_marriage_date_divorcee,$date_of_divorce,$child_status_divorce,$child_custody_status_divorce,$previous_marriage_address,$previous_marriage_date_widow,$previous_marriage_address_divorce,$date_partner_death_widow,$child_status_widow,$previous_marriage_address_widow,
$email,$pass)
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
$birth_date=$_POST['birth_date'];
$birth_time=$_POST['birth_time'];
$day_of_birth=$_POST['day_of_birth'];
$birth_city=$_POST['birth_city'];
$birth_district=$_POST['birth_district'];
$birth_state=$_POST['birth_state'];
$mobile_no2=$_POST['mobile_no2'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$height=$_POST['height'];
$body_weight=$_POST['body_weight'];
$skin_tone=$_POST['skin_tone'];
$blood_group=$_POST['blood_group'];
$spectacles=$_POST['spectacles'];
$hobbies=$_POST['hobbies'];
$any_disability=$_POST['any_disability'];
$acceptation=$_POST['acceptation'];
$describe_yourself=$_POST['describe_yourself'];
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
$no_of_siblings=$_POST['no_of_siblings'];
$marital_satus_of_siblings=$_POST['marital_satus_of_siblings'];
$permanent_residential_address=$_POST['permanent_residential_address'];
$ancestral_address=$_POST['ancestral_address'];
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

	$query=mysql_query("insert into matrimonialall (candidate_id,unique_id,first_name,middle_name,last_name,gender,states,city,address,mobile_no1,email,birth_date,birth_time,day_of_birth,birth_city,birth_district,birth_state,mobile_no2,pass,age,height,body_weight,skin_tone,blood_group,spectacles,hobbies,any_disability,acceptation,describe_yourself,faculty,academic_level,college_name,college_address,office_contact,job_busi_status,working_post,annual_income,work_place_address,father_name,occupation_father,mother_name,occupation_mother,no_of_siblings,marital_satus_of_siblings,permanent_residential_address,ancestral_address,parent_conatct_no,birth_name,own_kul,mamkul,gotra,nakshtra,charan,rashi,nadi,gan,guru,manglik_status,marriageType)
	 values('','$unique_id','$first_name','$middle_name','$last_name','$states','$city','$gender','$address','$mobile_no1','$email','$birth_date','$birth_time','$day_of_birth','$birth_city','$birth_district','$birth_state','$mobile_no2','$pass','$age','$height','$body_weight','$skin_tone','$blood_group','$spectacles','$hobbies','$any_disability','$acceptation','$describe_yourself','$faculty','$academic_level','$college_name','$college_address','$office_contact','$job_busi_status','$working_post','$annual_income','$work_place_address','$father_name','$occupation_father','$mother_name','$occupation_mother','$no_of_siblings','$marital_satus_of_siblings','$permanent_residential_address','$ancestral_address','$parent_conatct_no','$birth_name','$own_kul','$mamkul','$gotra','$nakshtra','$charan','$rashi','$nadi','$gan','$guru','$manglik_status','new')") or die(mysql_error());
	
	
	
	/*if (isset($marriageType) && $marriageType == "divorcee")
    $query2 = mysql_query("insert into matrimonial_divorcee (id,unique_id,previous_marriage_date_divorcee,date_of_divorce,child_status_divorce,child_custody_status_divorce,previous_marriage_address_divorce)
	values('','$unique_id','$previous_marriage_date_divorcee','$date_of_divorce','$child_status_divorce','$child_custody_status_divorce','$previous_marriage_address_divorce')");
else if (isset($marriageType) && $marriageType == "widow")
    $query2 = mysql_query("insert into matrimonial_widow (id,unique_id,previous_marriage_date_widow,date_partner_death_widow,child_status_widow,previous_marriage_address_widow)
	values('','$unique_id','$previous_marriage_date_widow','$date_partner_death_widow','$child_status_widow','$previous_marriage_address_widow')");

*/
}

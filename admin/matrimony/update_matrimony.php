<?php
	include ('../connect.php');
	
	 $candidate_id=$_POST['candidate_id'];
	
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
	
	 $faculty=$_POST['faculty'];
	 
	  $academic_level=$_POST['academic_level'];
	
	 $college_name=$_POST['college_name'];
	 
	  $college_address=$_POST['college_address'];
	
	 $office_contact=$_POST['office_contact'];
	 
	  $job_busi_status=$_POST['job_busi_status'];
	
	 $working_post=$_POST['working_post'];
	 
	  $annual_income=$_POST['annual_income'];
	
	 $work_place_address=$_POST['work_place_address'];
	 
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
	 
	  $birth_name=$_POST['birth_name'];
	
	 $own_kul=$_POST['own_kul'];
	 
	  $mamkul=$_POST['mamkul'];
	
	 $gotra=$_POST['gotra'];
	 
	  $nakshtra=$_POST['nakshtra'];
	
	 $charan=$_POST['charan'];
	 
	  $rashi=$_POST['rashi'];
	
	 $nadi=$_POST['nadi'];

		 $gan=$_POST['gan'];
	
	 $guru=$_POST['guru'];
	 
	  $manglik_status=$_POST['manglik_status'];
	
	 $marriageType=$_POST['marriageType'];
		
		$keyword=$city.",".$mobile_no2.",".$mobile_no1 ;
$photo_final1;
$hidden_image_name=$_POST['hidden_image_name'];

/**************************************************************************************************************************************/


$file_size=$_FILES["profile_pic"]["size"];
$file_type=$_FILES["profile_pic"]["type"];
           
	$num=rand().date("d-m-y");
	$unique_id=md5($num);
	
	//if($file_size<'52,42,880')
	//{
	if($_FILES["profile_pic"]["tmp_name"])
	    {
		  $tt1= $_FILES["profile_pic"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["profile_pic"]["tmp_name"],"matrimony_img/".$filename1);
                
         }
		 
		 
		 

/*---------------------------------------------------------------------------------------------------------*/




if($_FILES["profile_pic"]["tmp_name"]!="")
{
	
	 $photo_final1=$filename1;
	
}
if($_FILES["profile_pic"]["tmp_name"]=="")
{
	
	  $photo_final1=$hidden_image_name;
	
	
}


/*---------------------------------------------------------------------------*/
	
	mysqli_query($conn, "UPDATE matrimonialall SET first_name=$first_name,
											middle_name=$middle_name,
											last_name=$last_name,
											gender=$gender,
											states=$states,
											city=$city,
											 address=$address,
											 mobile_no1=$mobile_no1,
											 email=$email,
											 birth_date=$birth_date,
											 birth_time=$birth_time,
											 day_of_birth=$day_of_birth,
											 birth_city=$birth_city,
											 birth_district=$birth_district,
											 birth_state=$birth_state,
	 										 mobile_no2=$mobile_no2,
											 pass=$pass,
											 cast=$cast,
											 age=$age,
											 fit=$fit,
											 inches=$inches,
											 body_weight=$body_weight,
											 skin_tone=$skin_tone,
	 										 blood_group=$blood_group,
											 spectacles=$spectacles,
											 hobbies=$hobbies,
											 any_disability=$any_disability,
											 any_disability_desc=$any_disability_desc,
											 acceptation=$acceptation,
											 describe_yourself=$describe_yourself,
											
										     faculty=$faculty,
											 academic_level=$academic_level,
											 college_name=$college_name,
											 college_address=$college_address,
	 										 office_contact=$office_contact,
											 job_busi_status=$job_busi_status,
											 working_post=$working_post,
											 annual_income=$annual_income,
	 										 work_place_address=$work_place_address,
											 father_name=$father_name,
											 occupation_father=$occupation_father,
	  										 mother_name=$mother_name,
											 occupation_mother=$occupation_mother,
											
											 no_of_brother=$no_of_brother,
											 married_brother=$married_brother,
											 
											 unmarried_brother=$unmarried_brother,
											 no_of_sister=$no_of_sister,
											 
											 married_sister=$married_sister,
											 unmarried_sister=$unmarried_sister,
											 
											 permanent_residential_address=$permanent_residential_address,
	  										 parent_conatct_no=$parent_conatct_no,
											 birth_name=$birth_name,own_kul=$own_kul,
	  										 mamkul=$mamkul,
											 gotra=$gotra,
											 nakshtra=$nakshtra,
											 charan=$charan,
											 rashi=$rashi,
											 nadi=$nadi,
											 gan=$gan,
											 guru=$guru,
											 manglik_status=$manglik_status,
											 marriageType=$marriageType,
											 profile_photo='$photo_final1',
											keyword='$keyword'	
												
											 where candidate_id='$candidate_id'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert("Matrimony Updated..");'; 
	echo 'window.location.href = "matrimony_show.php";';
	echo '</script>';
 
 
?>


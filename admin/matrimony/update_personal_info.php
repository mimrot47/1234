<?php
	include ('../connect.php');
	
	 $candidate_id=$_POST['candidate_id'];
 	$unique_id=$_POST['unique_id'];
	
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
	
	$keyword=$city.",".$mobile_no2.",".$mobile_no1 ;
		
		// $filename1=$_POST["profile_pic"];


//if($_FILES["profile_pic"]["tmp_name"] !=''){

/*$file_size=$_FILES["profile_pic"]["size"];
$file_type=$_FILES["profile_pic"]["type"];
           
	
	if($_FILES["profile_pic"]["tmp_name"])
	    {
		  $tt1= $_FILES["profile_pic"]["name"];
                        $filename1=date("d-m")."_".rand().str_replace(" ","_",$tt1);
                         move_uploaded_file($_FILES["profile_pic"]["tmp_name"],"matrimony_img/".$filename1);
                
         }
	*/
/*	
$file = $_FILES['profile_pic']['tmp_name'];
$file = $_FILES['profile_pic']['tmp_name'];
$file=file_get_contents($file);
$file=mysqli_real_escape_string($conn,$file);

$file_size=$_FILES["profile_pic"]["size"];
$file_type=$_FILES["profile_pic"]["type"];
           	*/

/*---------------------------------------------------------------------------*/
	
	
											
										   
											
												
												

	
$query=mysqli_query($conn,"UPDATE matrimonialall SET  first_name='$first_name',
							middle_name='$middle_name',
							last_name='$last_name',
							gender='$gender',
							states='$states',
							city='$city',
							 address='$address',
							 mobile_no1='$mobile_no1',
							 email='$email',
							 birth_date='$birth_date',
							 birth_time='$birth_time',
							 day_of_birth='$day_of_birth',
							 birth_city='$birth_city',
							 birth_district='$birth_district',
							 birth_state='$birth_state',
							 mobile_no2='$mobile_no2',
							 pass='$pass',
							 cast='$cast',
							 age='$age',
							 fit='$fit',
							 inches='$inches',
							 body_weight='$body_weight',
							 skin_tone='$skin_tone',
							 blood_group='$blood_group',
							 spectacles='$spectacles',
							 hobbies='$hobbies',
							 any_disability='$any_disability',
							 any_disability_desc='$any_disability_desc',
							 acceptation='$acceptation',
							 describe_yourself='$describe_yourself',
							 keyword='$keyword'
							 
							  WHERE unique_id='$unique_id'") or die(mysqli_error($conn));
											  
	
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
	
	
	//echo '<script type="text/javascript">'; 
	//echo 'alert("Matrimony Updated..");'; 
	//echo 'window.location.href = "matrimony_home.php";';
	//echo '</script>';
 
 
?>


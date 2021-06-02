<?php
	include ('../connect.php');
	
	 $candidate_id=$_POST['candidate_id'];
$unique_id=$_POST['unique_id'];
	
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
	



/*---------------------------------------------------------------------------*/
	
	mysqli_query($conn, "UPDATE matrimonialall SET 
											 father_name='$father_name',
											 occupation_father='$occupation_father',
	  										 mother_name='$mother_name',
											 occupation_mother='$occupation_mother',
											
											 no_of_brother='$no_of_brother',
											 married_brother='$married_brother',
											 
											 unmarried_brother='$unmarried_brother',
											 no_of_sister='$no_of_sister',
											 
											 married_sister='$married_sister',
											 unmarried_sister='$unmarried_sister',
											 
											 permanent_residential_address='$permanent_residential_address',
	  										 parent_conatct_no='$parent_conatct_no'
												
											 where unique_id='$unique_id'") or die(mysqli_error($conn));
	
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
	echo 'alert("Matrimony Family Information Updated..");'; 
	echo 'window.location.href = "matrimony_home.php";';
	echo '</script>';*/
 
 
?>


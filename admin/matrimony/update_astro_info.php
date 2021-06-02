<?php
	include ('../connect.php');
	
	 $candidate_id=$_POST['candidate_id'];
	 $unique_id=$_POST['unique_id'];
	
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



/*---------------------------------------------------------------------------*/
	
	mysqli_query($conn, "UPDATE matrimonialall SET 
											birth_name='$birth_name',own_kul='$own_kul',
	  										 mamkul='$mamkul',
											 gotra='$gotra',
											 nakshtra='$nakshtra',
											 charan='$charan',
											 rashi='$rashi',
											 nadi='$nadi',
											 gan='$gan',
											 guru='$guru',
											 manglik_status='$manglik_status',
											 marriageType='$marriageType'
												
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
	echo 'alert("Matrimony Astrology Updated..");'; 
	echo 'window.location.href = "matrimony_home.php";';
	echo '</script>';*/
 
 
?>


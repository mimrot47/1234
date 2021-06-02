<?php
	include ('../connect.php');
	
	 $unique_id=$_POST['unique_id'];
	
	 $previous_marriage_date_widow=$_POST['previous_marriage_date_widow'];
	
	 $date_partner_death_widow=$_POST['date_partner_death_widow'];
	 
	  $child_status_widow=$_POST['child_status_widow'];
	
	 $previous_marriage_address_widow=$_POST['previous_marriage_address_widow'];
	 
	
	mysqli_query($conn, "UPDATE matrimonial_widow SET previous_marriage_date_widow='$previous_marriage_date_widow',
											date_partner_death_widow='$date_partner_death_widow',
											child_status_widow='$child_status_widow',
											previous_marriage_address_widow='$previous_marriage_address_widow'
										
											where unique_id='$unique_id'") or die(mysqli_error($conn));
											
	$data=mysqli_fetch_array(mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'"));
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
	
	/*echo '<script type="text/javascript">'; 
	echo 'alert("Matrimoney Widow Updated..");'; 
	echo 'window.location.href = "matrimony_home.php";';
	echo '</script>';*/
 
 
?>


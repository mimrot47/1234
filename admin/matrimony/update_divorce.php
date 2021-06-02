<?php
	include ('../connect.php');
	
	 $unique_id=$_POST['unique_id'];
	
	 $previous_marriage_date_divorcee=$_POST['previous_marriage_date_divorcee'];
	
	 $date_of_divorce=$_POST['date_of_divorce'];
	 
	  $child_status_divorce=$_POST['child_status_divorce'];
	
	 $child_custody_status_divorce=$_POST['child_custody_status_divorce'];
	 
	 $previous_marriage_address_divorce=$_POST['previous_marriage_address_divorce'];
	
	
	mysqli_query($conn, "UPDATE matrimonial_divorcee SET previous_marriage_date_divorcee='$previous_marriage_date_divorcee',
											date_of_divorce='$date_of_divorce',
											child_status_divorce='$child_status_divorce',
											child_custody_status_divorce='$child_custody_status_divorce',
											previous_marriage_address_divorce='$previous_marriage_address_divorce'
											where unique_id='$unique_id'") or die(mysqli_error($conn));
											
	
	$data=mysqli_fetch_array(mysqli_query($conn,"select * from matrimonialall where unique_id='$unique_id'"));
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
		
	/*echo '<script type="text/javascript">'; 
	echo 'alert("Matrimoney Divorce Updated..");'; 
	echo 'window.location.href = "matrimony_show_bride.php";';
	echo '</script>';*/
 
 
?>


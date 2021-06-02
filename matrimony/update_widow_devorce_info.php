<?php
include "../connect.php";

$type=$_POST['type'];
$unique_id=$_POST['unique_id'];
$gender=$_POST['gender'];
if($type=="divorcee")
{
$previous_marriage_date_divorcee=$_POST['previous_marriage_date_divorcee'];
$date_of_divorce=$_POST['date_of_divorce'];
$child_status_divorce=$_POST['child_status_divorce'];
$child_custody_status_divorce=$_POST['child_custody_status_divorce'];
$previous_marriage_address_divorce=$_POST['previous_marriage_address_divorce'];

mysqli_query($conn, "UPDATE matrimonial_divorcee SET previous_marriage_date_divorcee='$previous_marriage_date_divorcee',date_of_divorce='$date_of_divorce',
child_status_divorce='$child_status_divorce',child_custody_status_divorce='$child_custody_status_divorce',
previous_marriage_address_divorce='$previous_marriage_address_divorce' where unique_id='$unique_id'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert(" Updated..");'; 
	echo 'window.location.href = "edit_widow_divorce_info.php?type='.$type.'&id='.$unique_id.'&gender='.$gender.'"';
	echo '</script>';
}
else
{

$previous_marriage_date_widow=$_POST['previous_marriage_date_widow'];
$date_partner_death_widow=$_POST['date_partner_death_widow'];
$child_status_widow=$_POST['child_status_widow'];
$previous_marriage_address_widow=$_POST['previous_marriage_address_widow'];

mysqli_query($conn, "UPDATE matrimonial_widow SET previous_marriage_date_widow='$previous_marriage_date_widow',date_partner_death_widow='$date_partner_death_widow',
child_status_widow='$child_status_widow',
previous_marriage_address_widow='$previous_marriage_address_widow' where unique_id='$unique_id'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert(" Updated..");'; 
	echo 'window.location.href = "edit_widow_divorce_info.php?type='.$type.'&id='.$unique_id.'&gender='.$gender.'"';
	echo '</script>';
}

									
?>
<?php
	include ('../connect.php');
	
	$id=$_POST['id'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	
	$unique_id1=str_replace(' ', '_',$city);
	$unique_id=$unique_id1."_".rand();
	
	mysqli_query($conn, "UPDATE city SET state='$state',city_unique_id='$unique_id',city='$city' where id='$id'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert("State/City Updated..");'; 
	echo 'window.location.href = "show_state_citys.php";';
	echo '</script>';
 
 
?>
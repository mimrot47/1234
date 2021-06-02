<?php
//session_start();
include "../connect.php";
	
		$state=$_POST['state'];
	$unique_id1=str_replace(' ', '_',$state);
	$unique_id=$unique_id1."_".rand();
		
   $query=mysqli_query($conn,"Insert Into state(id,state_unique_id,state,is_del)
   values('','$unique_id','$state','approved')") or die(mysqli_error($conn));

		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "show_states.php";';
		echo '</script>';

		
?>
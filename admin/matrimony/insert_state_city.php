<?php
session_start();
include "../connect.php";
	
	$state=$_POST['state'];
		$city=$_POST['city'];
	/*********************************/
	$show=mysqli_query($conn,"select * from state where state='$state' and is_del='approved' ");
									
		while($rw=mysqli_fetch_array($show))
		{
			$state_unique_id=$rw['state_unique_id'];
		}
	/***********************************/
	
	
	
	$unique_id1=str_replace(' ', '_',$city);
	$unique_id=$unique_id1."_".rand();
	
	
		
		
   $query=mysqli_query($conn,"Insert Into city(id,state_unique_id,state,city_unique_id,city,is_del)
   values('','$state_unique_id','$state','$unique_id','$city','approved')") or die(mysqli_error($conn));

		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "show_state_citys.php";';
		echo '</script>';

		
?>
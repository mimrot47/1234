<?php
	include ('../connect.php');
	
	$id=$_POST['id'];
	$state=$_POST['state'];
	
	mysqli_query($conn, "UPDATE state SET state='$state' where id='$id'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert("State Updated..");'; 
	echo 'window.location.href = "show_states.php";';
	echo '</script>';
 
 
?>
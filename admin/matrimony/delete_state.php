<?php
	include('../connect.php');
	$id=$_GET['id'];
	$state_unique_id = mysqli_fetch_array(mysqli_query($conn,"select state_unique_id from state where is_del='approved' and id='$id'"));
	
	
	mysqli_query($conn,"DELETE FROM city WHERE state_unique_id='$state_unique_id[0]'") or die(mysqli_error($conn));
	mysqli_query($conn,"UPDATE state set is_del='deleted' where id='$id'") or die(mysqli_error($conn));
	echo '<script type="text/javascript">'; 
	echo 'alert("Record Deleted..");'; 
	echo 'window.location.href = "show_states.php";';
	echo '</script>';

?>

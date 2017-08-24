<?php
include '../connect.php';


 $email2=$_POST['email'];
$msg=$_POST['msg'];

	
	    $query2 = mysql_query("insert into contact_us (id,email,msg)
	values('','$email2','$msg')");
	
	echo '<script type="text/javascript">'; 
	echo 'alert("Successfully Insert ");'; 
	echo 'window.location.href = "../index.php";';
	echo '</script>';
	   
	
   
?>

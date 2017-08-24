<?php
session_start();
$email=$_SESSION['myusername'];

  include '../connect.php';
  
  $description=$_POST["description"];
 
 
$query=mysql_query("insert into testimonial (id,email,description,status,is_del)
	 										 values('','$email','$description','unread','no')") or die(mysql_error());




echo '<script type="text/javascript">'; 
echo 'alert("Successfully  ");'; 
echo 'window.location.href = "testimonial.php";';
echo '</script>';




?>
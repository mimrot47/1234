<?php 
include "../connect.php";
 $id=$_GET['id'];

$quer=mysql_query("update testimonial SET is_Del='yes'  where id='$id' ");

echo '<script type="text/javascript">'; 
	echo 'alert(" Deleted..");'; 
	echo 'window.location.href = "testimonial.php";';
	echo '</script>';
?>
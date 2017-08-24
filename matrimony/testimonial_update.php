<?php 
include "../connect.php";
 $id=$_POST['id'];
$des=$_POST['description'];

$quer=mysql_query("update testimonial SET description='$des'  where id='$id' ");

echo '<script type="text/javascript">'; 
	echo 'alert(" Updated..");'; 
	echo 'window.location.href = "testimonial.php";';
	echo '</script>';
?>
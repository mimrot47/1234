<?php 
include "../connect.php";
 $id=$_GET['id'];

$quer=mysqli_query($conn,"update testimonial SET is_Del='yes'  where id='$id' ");

echo '<script type="text/javascript">'; 
	echo 'alert(" Deleted..");'; 
	echo 'window.location.href = "testimonial.php";';
	echo '</script>';
?>
<?php
session_start();
$email=$_SESSION['myusername'];
include '../connect.php';
$id=$_POST['id'];
$description=$_POST["description"];
$description = str_replace("'", '', $description);

if($id!="")
{
$quer=mysqli_query($conn,"update testimonial SET description='$description'  where id='$id' ");
}
else
{
$query=mysqli_query($conn,"insert into testimonial (id,email,description,status,is_del) values('','$email','$description','unread','no')") or die(mysqli_error($conn));
}



echo '<script type="text/javascript">'; 
echo 'alert("Successfully  ");'; 
echo 'window.location.href = "testimonial.php";';
echo '</script>';




?>
<?php
include'../connect.php';
$pass=$_POST["pass"];
 
$query=mysqli_query($conn,"update admin set pass='$pass'") or die(mysqli_error($conn));

echo '<script type="text/javascript">'; 
echo 'alert("Password Successfully Updated");'; 
echo 'window.location.href = "matrimony_home.php";';
echo '</script>';

?>
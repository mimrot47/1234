<?php
include'../connect.php';
$username=$_POST["username"];
 
$query=mysqli_query($conn,"update admin set username='$username'") or die(mysqli_error($conn));

echo '<script type="text/javascript">'; 
echo 'alert("Username Successfully Updated");'; 
echo 'window.location.href = "change_username.php";';
echo '</script>';

?>
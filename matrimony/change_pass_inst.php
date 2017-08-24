<?php
session_start();
$email=$_SESSION['myusername'];

  include '../connect.php';
  
  $pass=$_POST["pass"];
 
 
$query=mysql_query("update matrimonialall set pass='$pass' where email='$email'") or die(mysql_error());

echo '<script type="text/javascript">'; 
echo 'alert("Successfully  ");'; 
echo 'window.location.href = "change_pass.php";';
echo '</script>';




?>
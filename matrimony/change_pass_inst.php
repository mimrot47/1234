<?php
session_start();
$email=$_SESSION['myusername'];
include '../connect.php';
$pass=$_POST["pass"];
 
 
$query=mysqli_query($conn,"update matrimonialall set pass='$pass' where email='$email'") or die(mysqli_error($conn));

$message11=" Your New Password for malimatrimony.org Matrimony : Email : ".$email." Password : ".$pass;
$to= $email;
$from="info@bhavsar.org";
$subject = " Updated Password ";
$mail_body = '
Message: '.$message11.'
From: ' . $from . '
Subject: ' . $subject . '
';
$headers  = "From: info@bhavsar.org";
//$headers .= "Content-type: text/htmlrn";
mail($to, $subject, $mail_body, $headers);

echo '<script type="text/javascript">'; 
echo 'alert("Your updated password send to you email id");'; 
echo 'window.location.href = "change_pass.php";';
echo '</script>';




?>
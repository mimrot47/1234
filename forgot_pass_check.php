<?php
include "connect.php";
$pass='';
$email1=$_POST['email'];
$count="";
$sql="SELECT * FROM matrimonialall WHERE email='$email1' ";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

while($row=mysqli_fetch_array($result))
{
	$email=$row['email'];
	$pass=$row['pass'];
	$count=1;
}

if($count==1)
{

$message11=" Your Registration Email(Username) and Password for malimatrimony.org Matrimony : Email : ".$email." Password : ".$pass;
$to= $email;
$from="info@bhavsar.org";
$subject = " Request for password ";
$mail_body = '
Message: '.$message11.'
From: ' . $from . '
Subject: ' . $subject . '
';
$headers  = "From: info@bhavsar.org";
//$headers .= "Content-type: text/htmlrn";
mail($to, $subject, $mail_body, $headers);
  
 
echo '<script type="text/javascript">'; 
echo 'alert("Your Password Is Sent On Your Mail");'; 
echo 'window.location.href = "index.php";';
echo '</script>';



}
else
{
		echo '<script type="text/javascript">'; 
		echo 'alert("Enter Correct Mail");'; 
		echo 'window.location.href = "forgot_password.php";';
		echo '</script>';
}


?>
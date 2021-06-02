<?php
session_start();
$email=$_SESSION['myusername'];
include '../connect.php';
$username=$_POST["username"];
$pass=$_POST["pass"];

if($email==$username)
{
	$data = mysqli_fetch_array(mysqli_query($conn,"select * from matrimonialall where email='$username'"));
	if($data['pass'] == $pass)
	{
		$query=mysqli_query($conn,"update matrimonialall set acc_type='Deactive' where email='$email'") or die(mysqli_error($conn));
		session_destroy();
		echo '<script type="text/javascript">'; 
		echo 'alert("Your Account successfully deactive");'; 
		echo 'window.location.href = "../index.php";';
		echo '</script>';
	}
	else
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Your password is wrong.");'; 
		echo 'window.location.href = "deactive_account.php";';
		echo '</script>';	
	}
}
else
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Username Invalid");'; 
	echo 'window.location.href = "deactive_account.php";';
	echo '</script>';	
}

 
/*$query=mysqli_query($conn,"update matrimonialall set pass='$pass' where email='$email'") or die(mysqli_error($conn));

$message11=" Your New Password for bhavsar.org Matrimony : Email : ".$email." Password : ".$pass;
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
*/



?>
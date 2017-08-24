
<?php
include "connect.php";
$pass='';
  $email1=$_POST['email'];
$count="";
$sql="SELECT * FROM matrimonialall WHERE email='$email1' ";
$result=mysql_query($sql) or die(mysql_error());

while($row=mysql_fetch_array($result))
{
	$email=$row['email'];
	$pass=$row['pass'];
	$count=1;
}


if($count==1)
{
	
$message11=' Your Registration Email and Password for bhavsar.org:
					Email : '.$email.'
					Password : '.$pass.'
				';
	$to= $email;
//$from="info@bhavsar.org";
$subject1 = " request for password ";
$mail_body = '
Message: '.$message11.'
From: ' . $from . '
Subject: ' . $subject1 . '
';
$headers  = "From: info@bhavsar.org";
//$headers .= "Content-type: text/htmlrn";
mail($to, $subject1, $mail_body, $headers);
 
 

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
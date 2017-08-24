<?php
session_start();
include"connect.php";
error_reporting(0);

$myusername=$_POST['email'];
$mypassword=$_POST['pass'];
$id=$_POST['id'];
$count=0;

$sql="SELECT * FROM matrimonialall WHERE email='$myusername' and pass='$mypassword'";
$result=mysql_query($sql) or die(mysql_error());

while($row=mysql_fetch_array($result))
{
	$email=$row['email'];
	$pass=$row['pass'];
	$count=1;
}

if($count==1)
{
	if($id!='')
{
	 $_SESSION['myusername']=$email;
		echo '<script type=text/javascript>';
		echo 'window.location.href="matrimony/search_view.php?id='.$id.'";';
		echo '</script>';
}

		 $_SESSION['myusername']=$email;
		echo '<script type=text/javascript>';
		echo 'window.location.href="matrimony/home.php";';
		echo '</script>';
}
else
	{
		echo '<script type=text/javascript>';
		echo 'alert("Please Re-enter Your Email And Password ");';
		echo 'window.location.href="login.php";';
		echo '</script>';
	}

?>





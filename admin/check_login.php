<?php
session_start();
include'../connect.php';

$count=0;
$myusername=$_POST['username'];
$mypassword=$_POST['pass'];


$show=mysqli_query($conn,"select * from admin where username='$myusername' and pass='$mypassword'") or die(mysqli_error($conn));

while($row=mysqli_fetch_array($show))
{
	$count=1;
}
	if($count==1)
	{
		$_SESSION['myusername']=$username;
		echo '<script type=text/javascript>';
		echo 'window.location.href="matrimony/matrimony_home.php";';
		echo '</script>';
	}
	else
	{
		echo '<script type=text/javascript>';
		echo 'alert("Wrong Password...!!");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
?>


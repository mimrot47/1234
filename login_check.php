<?php
session_start();
include"connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$myusername=$_POST['email'];
$mypassword=$_POST['pass'];
$id=$_POST['id'];
$count=0; 
$payment='No';
$candidate_id=0;

$sql="SELECT * FROM matrimonialall WHERE email='$myusername' and pass='$mypassword' and is_del='no' and acc_type!='Deactive'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

while($row=mysqli_fetch_array($result))
{
	$email=$row['email'];
	$pass=$row['pass'];
	$payment=$row['payment'];
	$candidate_id=$row['candidate_id'];
	$count=1;
}

if($count==1)
{
	if($payment=='Yes'){
		if($id!=''){
		 	$_SESSION['myusername']=$email;
			echo '<script type=text/javascript>';
			echo 'window.location.href="matrimony/search_view.php?id='.$id.'";';
			echo '</script>';
		}
		else
		{
			$_SESSION['myusername']=$email;
			header('location:http://localhost/malimatrimony.org/matrimony/my_account.php');
		}
	}
	else {		
		if($candidate_id!=''){		
		echo '<script type=text/javascript>';
		$ur = "ccavRequestHandler.php?tid=".rand(1111111111,9999999999)."&merchant_id=152580&order_id=".$candidate_id."&currency=INR&amount=500.00&redirect_url=http://localhost/malimatrimony.org/payment_successfull.php&cancel_url=http://localhost/malimatrimony.org/payment_cancel.php&language=EN";
		echo 'window.location.href = "'.$ur.'";';
		echo '</script>';
		}
	}
	
}
else
	{
		echo '<script type=text/javascript>';
		echo 'alert("Please Enter Valid Username Or Password ");';
		echo 'window.location.href="login.php";';
		echo '</script>';
	}

?>





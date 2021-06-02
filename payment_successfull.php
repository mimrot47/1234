<?php include('Crypto.php')?>
<?php
include 'connect.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
	
	$workingKey='AD181C04C45A3A8D84A104CA25DF0214';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{		
		for($i = 0; $i < $dataSize; $i++) 
		{
			$information=explode('=',$decryptValues[$i]);
			if($information[0]=="order_id"){				
				$order_id = $information[1];
				$sql = "UPDATE `matrimonialall` SET `payment`='Yes' WHERE `candidate_id`='$order_id'";		
				mysqli_query($conn,$sql) or die(mysqli_error($conn));
				$ur = "http://bhavsarmarriage.com/login.php?success=1";
				echo "<script>";					
				echo 'window.location.href = "'.$ur.'";';
				echo "</script>";
			}
		}
	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}


?>
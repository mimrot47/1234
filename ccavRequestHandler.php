<html>
<head>
<title> Non-Seamless-kit</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='152580';
	$working_key='AD181C04C45A3A8D84A104CA25DF0214';//Shared by CCAVENUES
	$access_code='AVOO73EJ89CA71OOAC';//Shared by CCAVENUES
	
	foreach ($_GET as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
	echo $merchant_data;
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>


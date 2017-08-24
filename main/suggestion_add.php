<?php
include '../connect.php';


 $email2=$_POST['email'];
$msg=$_POST['msg'];

		$query = "SELECT email FROM matrimonialall WHERE email='".$email2."'";
mysql_select_db('bhavsar');

    $result=mysql_query($query);

   if (mysql_num_rows($result) != 0)
   {
	   
	    $query2 = mysql_query("insert into suggestions (id,email,msg)
	values('','$email2','$msg')");
	
	echo '<script type="text/javascript">'; 
	echo 'alert("Successfully Insert ");'; 
	echo 'window.location.href = "../index.php";';
	echo '</script>';
	   
	
    }

    else
    {
		 echo '<script type="text/javascript">'; 
		echo 'alert("your are not reg menber.. plz reg");'; 
		echo 'window.location.href = "../registration.php";';
		echo '</script>';
     
    }
?>

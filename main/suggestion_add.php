<?php
include '../connect.php';


 $email2=trim($_POST['email']);
$msg=$_POST['msg'];

		$query = "SELECT email FROM matrimonialall WHERE email='".$email2."'";


    $result=mysqli_query($conn,$query);

   if (mysqli_num_rows($result) != 0)
   {
	   
	    $query2 = mysqli_query($conn,"insert into suggestions (id,email,msg)
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

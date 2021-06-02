<?php
include "../connect.php";
session_start();
 $email=$_SESSION['myusername'];
	

$birth_name=$_POST['birth_name'];
$own_kul=$_POST['own_kul'];
$mamkul=$_POST['mamkul'];
$gotra=$_POST['gotra'];$nakshtra=$_POST['nakshtra'];$charan=$_POST['charan'];
$rashi=$_POST['rashi'];
$nadi=$_POST['nadi'];
$gan=$_POST['gan'];
$guru=$_POST['guru'];$manglik_status=$_POST['manglik_status'];	
	
	
	mysqli_query($conn, "UPDATE matrimonialall SET birth_name='$birth_name',own_kul='$own_kul',mamkul='$mamkul',gotra='$gotra',nakshtra='$nakshtra',charan='$charan',rashi='$rashi',nadi='$nadi',gan='$gan',guru='$guru',manglik_status='$manglik_status' where email='$email'") or die(mysqli_error($conn));
	
	echo '<script type="text/javascript">'; 
	echo 'alert(" Updated..");'; 
	echo 'window.location.href = "edit_astrology_info.php";';
	echo '</script>';
 
 
?>
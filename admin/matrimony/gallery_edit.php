<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include'../connect.php';
error_reporting(0);
include'common_function_matrimony.php';
$id=$_GET['id'];
$show_g=mysqli_query($conn,"delete from matrimonial_gallery where id='$id'  ") or die(mysqli_error($conn));
header('Location: http://bhavsar.org/admin/pages/matrimony/show_gallary.php?unique_id='.$_GET['unique_id']);
exit;
?>
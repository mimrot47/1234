<?php

$DB_host = "localhost";
$DB_user = "techiub1_raahul";
$DB_pass = "^BZZO*m+9},^";
$DB_name = "techiub1_mali_matrimony";


try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	$e->getMessage();
}
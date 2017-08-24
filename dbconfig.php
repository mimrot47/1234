<?php

/*$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "bhavsar";*/

$DB_host = "localhost";
$DB_user = "backtel1_bhadmin";
$DB_pass = "Nb!do3BT4Ix]";
$DB_name = "backtel1_bhavsar";

/*$host="localhost"; // Host name
$username="backtel1_bhadmin"; // Mysql username
$password="Nb!do3BT4Ix]"; // Mysql password
$db_name="backtel1_bhavsar"; // Database name
*/
try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	$e->getMessage();
}
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="bramhin_matrimony"; // Database name

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$conn)
{
	die("cannot connect");
}


?>
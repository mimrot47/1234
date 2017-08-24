<?php
$host="localhost"; // Host name
$username="backtel1_bhadmin"; // Mysql username
$password="Nb!do3BT4Ix]"; // Mysql password
$db_name="backtel1_bhavsar"; // Database name

	
// Connect to server and select databse.
$connect = mysql_connect("$host", "$username", "$password");
if(!$connect)
{
	die("cannot connect");
}
mysql_select_db("$db_name")or die("cannot select DB");
?>
<?php */?>
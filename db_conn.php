<?php
$db_host = "localhost";
$db_user = "root";			//username phpmyadmin
$db_pwd = "usbw";			//password phpmyadmin
$db_name = "phonebud";		//nama pangkalan data

//Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);

//Check connection
if (!$conn) {
	die(mysqli_connect_error());
}
//echo "Sambungan ke DB berjaya";
?>
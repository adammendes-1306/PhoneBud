<?php

//Mulakan SESSION
session_start();

//sambungan ke DB
include ('db_conn.php');

$pwd = md5($_POST['klaluan']); //jadikan sebagai Variable

//Tukar password
$mysql = "UPDATE pembeli
		SET katalaluan = '$pwd'
		WHERE id_pembeli = '{$_SESSION['id']}'";

	if (mysqli_query($conn, $mysql)) {
		//papar js popup mesej jika pembeli berjaya reset kata laluan
		echo '<script>
				alert("Berjaya tetap semula Kata Laluan bagi Login ID: '.$_SESSION['id'].' !");
				window.location.href="borang_login.php";</script>';
	} else {
		echo "Error ; " . mysqli_error($conn);
	}

//Hentikan SESSION
session_destroy();

//close connection
mysqli_close($conn);
?>
<?php
//session
include('session.php');

//dapatkan kod_jenama
$jenama = $_GET['jn'];

//padam jenama dari jadual
$mysql = "DELETE FROM jenama WHERE kod_jenama = '$jenama'";

if (mysqli_query($conn, $mysql))
{
	//papar js popup mesej jika produk berjaya dipadam
	echo '<script>alert("Jenama telefon pintar '.$jenama.' berjaya DIPADAM!");
			      window.location.href="jenama.php";
		  </script>';
}
	else { echo "Error ; " . mysqli_error($conn); }
?>
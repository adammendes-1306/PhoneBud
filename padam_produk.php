<?php
//session
include('session.php');

//dapatkan no_siri
$nosiri = $_GET['no'];

//padam produk dari jadual
$mysql = "DELETE FROM telefon_pintar WHERE no_siri = '$nosiri'";

if (mysqli_query($conn, $mysql))
{
	//papar js popup mesej jika produk berjaya dipadam
	echo '<script>alert("Telefon pintar '.$nosiri.' berjaya DIPADAM!");
			      window.location.href="senarai_produkA.php";
		  </script>';
}
	else { echo "Error ; " . mysqli_error($conn); }
?>
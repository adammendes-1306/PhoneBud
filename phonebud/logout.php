<?php
session_start();
//destroying all the session
if(session_destroy()) {
	echo '<script>alert("Anda telah log keluar!");
	window.location.href="index.php";</script>';
	
	//header("Location: index.php");
	//kembali ke halaman utama
}
?>
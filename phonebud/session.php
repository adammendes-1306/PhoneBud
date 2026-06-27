<?php
//start session
session_start();
/* Bacaan lanjut tentang session di
goo.gl/VOEjN dan goo.gl/zoVEwf		*/

//Sambungan ke DB
include ('db_conn.php');

//pegang data session berdasarkan kunci primer dalam jadual
$id = $_SESSION['id']; //id_admin dan id_pembeli

//dapatkan kategori semasa pengguna Login
$kat = $_SESSION['kategori'];

/*	jika Admin, semak data Login dari jadual ADMIN,
	jika Pembeli, semak data Login dari jadual PEMBELI	*/
if($kat == "A") {
		$jadual = "admin";
} else {
		$jadual = "pembeli";
}

//dapatkan data pengguna berdasarkan session kunci primer
if($kat == "A") {
	$mysql = "SELECT * FROM $jadual WHERE id_admin ='$id'";
} else {
	$mysql = "SELECT * FROM $jadual WHERE id_pembeli ='$id'";
}

$result = mysqli_query($conn, $mysql);
$row = mysqli_fetch_array($result);

if ($kat == "A") {
	$nama = $row['nama_admin'];
	$id = $row['id_admin'];
} else {
	$nama = $row['nama_pembeli'];
	$id = $row['id_pembeli'];
}
//jika data session tidak dijumpai dalam jadual
if(!isset($id))			//maksudnya, kalau id = null, dia akan kembali ke index.php
{
header("Location: index.php");
//kembali ke paparan utama
}
?>
<?php
//start session
session_start();

//Sambung ke DB
include ('db_conn.php');

//Dapatkan data dari borang login
$login = $_POST['logid'];
$pwd = md5($_POST['klaluan']); //encrypt katalaluan
$kat = $_POST['kat'];

/* bila pengguna klik button log masuk,
   dapatkan kategori pengguna,
   jika Admin, semak data login dari jadual ADMIN
   jika Pembeli, semak dari jadual PEMBELI */
   
if($kat == "A")
{
	$jadual = "admin";
	$link = "senarai_produkA.php";
}
else {
	$jadual = "pembeli";
	$link = "senarai_produkP.php?kat=1";
}
	
//semak login_id dan katalaluan dalam jadual
if ($kat == "A")
{
$mysql = "SELECT * FROM $jadual
          WHERE id_admin = '$login' AND katalaluan ='$pwd'";
    } else {
$mysql = "SELECT * FROM $jadual
          WHERE id_pembeli = '$login' AND katalaluan ='$pwd'";
    }
$result = mysqli_query($conn, $mysql);
$row = mysqli_fetch_array($result);

//jika WUJUD id_admin/id_pembeli dan katalaluan yang sama
if(mysqli_num_rows($result) > 0)
{
	//dapatkan nama dan kunci primer(id_admin/id_pembeli) pengguna
	if ($kat == "A")
	{
		$_SESSION['id'] = $row['id_admin'];		//simpan data session
    	$nama = $row['nama_admin'];
    	$_SESSION['kategori'] = $kat;
	} else {
		$_SESSION['id'] = $row['id_pembeli'];	//simpan data session
    	$nama = $row['nama_pembeli'];
    	$_SESSION['kategori'] = $kat;
    }
   //papar popup mesej jika berjaya
	echo '<script>alert("Selamat datang, '.$nama.'!");
	       window.location.href="'.$link.'"</script>';
}
else //jika TIDAK WUJUD data id dan katalaluan yang sama
{
	echo'<script>alert("Login ID atau Kata laluan SALAH!");
	      window.location.href="borang_login.php";</script>';
		  //kembali semula ke borang login
}

//Close db connection
mysqli_close($conn);
?>
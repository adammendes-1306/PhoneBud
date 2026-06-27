<?php
//Sambungan ke DB
include ('db_conn.php');

/* Dapatkan data dari semua medan/textfield
   pada borang_daftar.php */
$login = $_POST['logid'];
$pwd = md5($_POST['klaluan']); //md5 untuk encrypt pwd
$nama = $_POST['nama'];

//semak jika id_pembeli telah wujud dalam DB
$semak = "SELECT id_pembeli FROM pembeli
 	 	    WHERE id_pembeli = '$login'";
$result = mysqli_query($conn, $semak) or die(mysql_error());

//jika id_pembeli sudah wujud, papar javascript popup mesej
if (mysqli_num_rows($result) > 0)
{
 	echo '<script>
 			  alert("Login ID anda telah didaftarkan.");
 			  window.location.href="borang_daftar.php";</script>';
 }	else {
 	//jika id_pembeli belum wujud, simpan data pembeli dalam DB
 	$mysql = "INSERT INTO pembeli
 			   (id_pembeli, katalaluan, nama_pembeli)
 			   VALUES ('$login', '$pwd', '$nama')";

 	if(mysqli_query($conn, $mysql)) {
 	//papar js popup mesej jika pembeli baharu berjaya daftar
 	echo '<script>
 		   alert("Pembeli baharu berjaya DIDAFTAR!");
 		   window.location.href="borang_login.php";</script>';
 		  //selepas berjaya daftar, kembali ke Login page
 	} else {
 		echo "Error ; " . mysqli_error($conn);	}
}

//Close connection
mysqli_close($conn);
?>
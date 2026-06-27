<?php

//Mulakan session
session_start();

//Sambungan ke DB
include ('db_conn.php');

//dapatkan data daripada borang_lupaklaluan.php
$_SESSION['id'] = $_POST['logid']; //jadikan 'id' global, dapatkan 'logid' drpd input pembeli

//semak jika id_pembeli telah wujud dalam DB
$semak = "SELECT id_pembeli FROM pembeli
 	 	    WHERE id_pembeli = '{$_SESSION['id']}'";
$result = mysqli_query($conn, $semak) or die(mysql_error());

if (mysqli_num_rows($result) > 0)
{
 	echo '<script>
 			  alert("Login ID anda telah ditemukan. Sila tetapkan semula kata laluan.");</script>';
 	} else {
 		//login id tidak wujud
 		echo '<script>
 				alert("Login ID tidak wujud. Sila semak kembali.");
 				window.location.href="borang_lupaklaluan.php";</script>';
 	}
 
//Close connection
?>

<?php
include ("header.php");
include ("topnav.php");
?>

<html>
<head>
<style>
#mainbody {
	background-color: white;
	padding: 20px;
}
#tajuk {
	font-size: 30px;
	font-family: Calibri;
	font-weight: bold;
	text-align: center;
}
table {
	border: 2px solid black;
	border-collapse: initial;
	margin: auto;
	background-color: #E6E6FA;	/* warna borang */
	border-radius: 10px;
}
td:nth-child(2) {
	text-align: right;
}
tr {
	height: 20px;
}
input[type=text] {
	background-color: white;
	border: 1px solid;
	border-radius: 8px;
	height: 25px;
}
input[type=password] {
	background-color: white;
	border: 1px solid;
	border-radius: 8px;
	height: 25px;
}
</style>
</head>
<body>

<div id="mainbody">

<form action="proses_resetklaluan.php?" method="POST">
<div id="tajuk">Tetap Semula Kata Laluan</div><p>

<table cellpadding='5px'>
<tr>
	<td style="width: 20px"></td>
	<td></td>
	<td></td>
	<td style="width: 20px"></td>
</tr>
<tr>
	<td></td>
	<td>Login ID:</td>
	<td><input type="text" name="logid"
                value="<?php echo $_SESSION['id']; ?>" readonly> 
    </td>
    <td></td>
</tr>
<tr>
	<td></td>
	<td>Kata Laluan :</td>
	<td><input type="password" name="klaluan" required
			   placeholder=" 5-8 aksara sahaja"
			   pattern=".{5,8}" title="5-8 aksara sahaja">
		<!-- pattern ini untuk setkan had atas
			 dan had bawah --></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td style="text-align: right;">
		<input type="submit" name="Reset" value="Reset">
	</td>
	<td></td>
</tr>
</table>

</form>
</div>
<?php include ("footer.php") ?>
</body>
</html>
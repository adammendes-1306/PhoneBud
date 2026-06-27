<?php
//header dan menu atas
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
input[type=submit] {
	background-color: white;
	border: 1px solid;
	border-radius: 5px;
}
</style>
</head>
<body>

<div id="mainbody">
<!-- form action akan membawa pengguna untuk proses seterusnya selepas pengguna klik butang Log Masuk -->
<form action="proses_login.php" method="POST">
<div id="tajuk">Log Masuk</div><p>

<table cellpadding='5px'>
<tr>
	<td style="width: 20px"></td>
	<td></td>
	<td></td>
	<td style="width: 20px"></td>
</tr>
<tr>
	<td></td>
	<td>Login ID :</td>
	<td><input type="text" name="logid" required
			   style="background-color: white; border: 1px solid;
				   border-radius: 8px; height: 25px;"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Kata Laluan :</td>
	<td><input type="password" name="klaluan" required
			   style="background-color: white; border: 1px solid;
					border-radius: 8px; height: 25px;"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Kategori :</td>
	<td>
		<input type="radio" name="kat" value="A" required>Admin
		<input type="radio" name="kat" value="P">Pembeli
	</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td style="text-align: right;">
		<input type="submit" name="btnLog" value="Log Masuk">
		</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td colspan="2">
		<a href="borang_daftar.php">Daftar Pembeli Baharu
		<img src="gambar/n_user.gif" width="20" height="20">
		</a></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td colspan="2">
		<a href="borang_lupaklaluan.php">Lupa Kata Laluan
		<img src="gambar/forgotpwd.png" width="20" height="20">
	</a></td>
	<td></td>
</tr>
</table>

</form>
</div>
<?php include ("footer.php"); ?>
</body>
</html>
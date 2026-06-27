<?php
include ("header.php");
include ("topnav.php");
?>
<html>
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
	background-color: #F9F3CC; /* warna borang */
	border-radius: 10px;
}
table, td {
	text-align: right;
}
tr {
	height: 25px;
}
input[type=submit] {
	background-color: white;
	border: 1px solid;
	border-radius: 5px;
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
<body>

<div id="mainbody">
<form action="proses_daftar.php" method="POST">
<div id="tajuk">Daftar Pembeli Baharu</div><p>

<table cellpadding=5px>
<tr>
	<td style="width: 20px"></td>
	<td></td>
	<td></td>
	<td style="width: 20px"></td>
</tr>
<tr>
	<td></td>
	<td>Login ID :</td>
	<td><input type="text" name="logid" required></td>
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
	<td>Nama:</td>
	<td><input type="text" name="nama" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="btnDaf" value="Daftar"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>

</form>
</div>

<?php include ("footer.php"); ?>
</body>
</html>
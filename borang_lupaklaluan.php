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
input[type=submit] {
	background-color: white;
	border: 1px solid;
	border-radius: 5px;
}
</style>
</head>
<body>

<div id="mainbody">

<form action="proses_lupaklaluan.php" method="POST">
<div id="tajuk">Lupa Kata Laluan</div><p>

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
	<td></td>
	<td style="text-align: right;">
		<input type="submit" name="btnReset" value="Reset">
	</td>
	<td></td>
</tr>
</table>

</form>
</div>
<?php include ("footer.php") ?>
</body>
</html>
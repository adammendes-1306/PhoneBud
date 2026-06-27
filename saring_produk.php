<?php
include ("db_conn.php");
include ("header.php");

// kat == 0 (pembeli tidak Login)
// kat == 1 (pembeli Login)
if($_GET['kat'] == 0) {
	$navmenu = "topnav.php";
	$link = "kat=0";

} else {
	$navmenu = "nav.php";
	$link = "kat=1";
}
include ($navmenu);
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
	margin-left: auto;
	margin-right: auto;
	border-collapse: initial;
	margin: auto;
	text-align: left;
	background-color: #add8e6;
	border-radius: 10px;
}
td {
	text-align: right;
}
tr {
	height: 10px;
}
select {
	width: 200px; /* saiz untuk input select */
	border: 1px solid black;
	border-radius: 5px;
}
input {
	width: 94px; /* saiz untuk kotak input */
	border: 1px solid black;
	border-radius: 5px;
}
#atau {
	font-size: 17px;
	font-family: Tw Cen MT Condensed;
	font-style: italic;
	text-align: center;
}
</style>
</head>
<body>

<div id="mainbody">
	<div id="tajuk">
	<p>Saring Telefon Pintar</p></div>

<form action="senarai_produkP.php?<?php echo $link; ?>" method="post">

<table cellpadding='5px'>
<tr>
	<td style="width: 30px"></td>
	<td></td>
	<td></td>
	<td style="width: 10px"></td>
	<td></td>
	<td style="width: 30px"></td>
</tr>
<tr>
	<td></td>
	<td>Jenama: </td>
	<td><select name="jn">
		<option>- Pilih -</option>
		<?php
			$sql = "SELECT * FROM jenama";
			$res = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($res))
			{
		?>
		<option value="<?php echo $row['kod_jenama']; ?>">
					   <?php echo $row['nama_jenama']; ?>
        </option>
		<?php } ?>
		</select></td>
	<td></td>
	<td><input type="submit" name="btn_jn" value="Saring"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td id="atau">ATAU</td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Harga: </td>
	<td><input type="number" name="hg1" step="any" placeholder=" min"> -
		<input type="number" name="hg2" step="any" placeholder=" max"></td>
	<td></td>
	<td><input type="submit" name="btn_hg" value="Saring"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>

</form>

</div>
<?php
include ("footer.php");
?>
</body>
</html>
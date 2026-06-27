<?php
include ("header.php");
include ("nav.php");
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
	border-collapse: inherit;
	margin: auto;
	font-weight: bold;
	background-color: #fff0f5;
	border-radius: 10px;
}
td {
	vertical-align: top;
}
td:nth-child(2) {
	text-align: right;
}
tr:nth-child(7) {
	text-align: right;
}
tr {
	height: 20px;
}
input, select {
	width: 300px; /* saiz untuk kotak input */
	border-style: transparent;
	border-width: 1px;
	border-radius: 5px;
}
input[type=submit] {
	width: 100px; /* saiz untuk butang simpan */
	border-radius: 5px;
}
textarea {
	width: 300px; /* saiz untuk input textarea */
	height: 80px;
	border-radius: 5px;
}
select {
	border: 1px solid black;
}
</style>
</head>
<body>

<div id="mainbody">
<form action="proses_produk.php" method="POST" enctype="multipart/form-data">
<div id="tajuk">Tambah Telefon Pintar</div>
<p>
<table cellpadding='5px'>
<tr>
	<td style="width: 30px"></td>
	<td></td>
	<td></td>
	<td style="width: 40px"></td>
</tr>
<tr>
	<td></td>
	<td>No Siri :</td>
	<td><input type="text" name="ns" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Jenama :</td>
	<td><select name="jn" required>
		<option value="">--Sila Pilih --</option>
		<?php
		 /*dapatkan jenama dari jadual Database untuk dipaparkan 
		 dalam dropdown*/
		 $sql = mysqli_query($conn, "SELECT * FROM jenama");
		 while ($row = mysqli_fetch_array($sql))
		 {
		?>
		<option value="<?php echo $row['kod_jenama']; ?>">
					   <?php echo $row['nama_jenama']; ?>
		</option>
		<?php } ?>
	</select></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Harga :</td>
	<td><input type="number" name="hg" step="any" required>
		</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Kuantiti :</td>
	<td><input type="number" name="kt" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Penerangan :</td>
	<td><textarea name="pn" required></textarea></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Gambar :</td>
	<td><input type="file" name="gmbr" accept="images/*" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="simpan" value="SIMPAN"></td>
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
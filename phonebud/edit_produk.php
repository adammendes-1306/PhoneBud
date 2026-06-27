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
	font-family: Tw Cen MT Condensed;
	font-weight: bold;
	text-align: center;
}
table {
	border: 2px solid black;
	border-collapse: collapse;
	margin: auto;
	font-weight: bold;
	background-color: #fff0f5;
}
input, select {
	width: 300px; /* saiz untuk kotak input */
	border-style: transparent;
	border-width: 1px;
	border-radius: 5px;
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
input[type=button] {
	width: 100px; /* saiz untuk butang kembali */
	border-radius: 5px;
}
input[type=submit] {
	width: 100px; /* saiz untuk butang kemas kini */
	border-radius: 5px;
}
textarea {
	width: 300px; /* saiz untuk input textarea */
	height: 80px;
	border-radius: 5px;
}
</style>
</head>
<body>
<?php
//dapatkan no_siri
$nosiri = $_GET['no'];

###### jika user klik butang KEMAS KINI, ######
###### update record dalam jadual ############
if(isset($_POST['edit']))
{
$sql = "UPDATE telefon_pintar
		SET kod_jenama = '".$_POST["jn"]."',
			harga = '".$_POST["hg"]."',
			kuantiti = '".$_POST["kt"]."',
			penerangan = '".$_POST["pn"]."'
		WHERE no_siri = '$nosiri'";

	if (mysqli_query($conn, $sql)) {
		echo '<script>alert("Telefon Pintar berjaya DIKEMAS KINI!");
			  window.location.href="senarai_produkA.php";
			  </script>';
	} else {
	  echo "Error ; " . mysqli_error($conn);	}
}
############ PROSES UPDATE TAMAT ############

//dapatkan data produk
$sql2 = "SELECT * FROM telefon_pintar
		 INNER JOIN jenama USING (kod_jenama)
		 WHERE no_siri = '$nosiri'";
$result2 = mysqli_query($conn, $sql2) or die(mysqli_error());
$row2 = mysqli_fetch_array($result2);

$gmbr = "gambar/".$row2['gambar'];
?>

<div id="mainbody">
<form action="edit_produk.php?no=<?php echo $nosiri; ?>" method="POST">
<div id="tajuk">
	Kemas kini Maklumat Telefon Pintar</div>
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
	<td></td>
	<td><img src="<?php echo $gmbr;?>" width="264px" height="200px"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>No Siri :</td>
	<td><?php echo $row2['no_siri']; ?></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Jenama :</td>
	<td><select name="jn">
		<option value="<?php echo $row2['kod_jenama']; ?>">
					   <?php echo $row2['nama_jenama'];?>
		</option>
		<?php
		 	$mysql = "SELECT * FROM jenama";
		 	$result = mysqli_query($conn, $mysql);
		 	while ($row = mysqli_fetch_array($result))
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
	<td><input type="number" name="hg" step="any" value="<?php echo $row2['harga'];?>" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Kuantiti :</td>
	<td><input type="number" name="kt" value="<?php echo $row2['kuantiti'];?>" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>Penerangan: </td>
	<td><textarea name="pn" required><?php echo $row2['penerangan'];?></textarea></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="button" name="back" value="KEMBALI" onClick="javascript:history.go(-1)">
	<td><input type="submit" name="edit" value="KEMAS KINI"></td>
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
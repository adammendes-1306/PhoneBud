<?php
include ("header.php");
include ("db_conn.php");

/*jika pembeli tidak login (kat=0),
  gunakan menu topnav dan papar butang saring */
if($_GET['kat'] == 0) {
	$navmenu = "topnav.php";
	$butang = '<a href="saring_produk.php?kat=0" class="butang" style="text-decoration: none;">
							Saring Telefon Pintar</a>';
} else {
	$navmenu = "nav.php";
	$butang = '';
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
	margin-left: auto;
	margin-right: auto;
	border-collapse: collapse;
	margin: auto;
}
td {
	text-align: center;
	height: 30px;
	width: 250px;
	padding: 20px;
	vertical-align: top;
}
/*CSS untuk butang */
.butang {
  font-family: 'trebuchet ms';
  font-weight: bold;
  color: #FFFFFF !important;
  font-size: 14px;
  text-shadow: 1px 1px 0px #7CACDE;
  box-shadow: 1px 1px 1px #BEE2F9;
  padding: 10px 25px;
  border-radius: 10px;
  border: 2px solid #32aaeb;
  background: #52b7ee;
}
.butang:hover {
  color: #FFFFFF !important;
  background: #32aaeb;
}
button {
	border: 1px solid black;
	font-size: 14px;
	padding: 3px 12px;
	border-radius: 5px;
}
</style>
</head>
<body>

<div id="mainbody">
<?php echo $butang; ?>
<br><div id="tajuk">
	<p>Senarai Telefon Pintar</p></div>
<!-- QUERY UNTUK SARING -->
<?php
//jika user saring mengikut jenama
if (isset($_POST['btn_jn']))
{
  $query = "SELECT *
            FROM telefon_pintar
 	   	      INNER JOIN jenama USING (kod_jenama)
			      WHERE kod_jenama = '$_POST[jn]'
		        ORDER BY kod_jenama";
}
//jika user saring mengikut harga
else if (isset($_POST['btn_hg']))
{
	$query = "SELECT *
			  		FROM telefon_pintar
			  		INNER JOIN jenama USING (kod_jenama)
			  		WHERE harga BETWEEN '$_POST[hg1]' AND '$_POST[hg2]'
			  		ORDER BY kod_jenama";
}
//jika pengguna tak saring produk, papar semua produk
else
{
	$query = "SELECT *
			  		FROM telefon_pintar
			  		INNER JOIN jenama USING (kod_jenama)
			  		ORDER BY kod_jenama";
}
	$result = mysqli_query($conn, $query) or die(mysqli_error());

	//dapatkan jumlah rekod dalam jadual DB
	$jumlah = mysqli_num_rows($result);

	if ($jumlah > 0)
	{
	 echo "<table cellpadding='5px' border=0><tr>";

	 foreach($result as $i => $row)
	 {
	  //dapatkan gambar dari folder
	  $gmbr = "gambar/".$row['gambar'];

	  //papar maklumat produk
	  echo "<td><img src=".$gmbr." width='95px'
		  height='98px'><p>".$row['nama_jenama']."
		  ".$row['no_siri']."<p>RM ".$row['harga']
		  ."<p>".$row['penerangan']."<hr></td>";

		  //hadkan jumlah data yang dipaparkan,3 rekod dalam 1 baris
		  $i++;
		  $lajur = 3;
		  if($i != $jumlah && $i >= $lajur && $i % $lajur == 0)
		  	echo "</tr><tr>";
		 }
		 echo "</tr></table>";
		}
		else { echo "<center>Tiada rekod</center>"; }
?>
<center><p><button class="cetak" onclick="window.print()">Cetak</button></p></center>
</div>
<?php
include ("footer.php");
?>
</body>
</html>
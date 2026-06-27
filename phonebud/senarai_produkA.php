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
	margin-left: auto;
	margin-right: auto;
	border-collapse: collapse;
	margin: auto;
}
th {	/* table header */
	height: 30px;
	text-align: center;
	font-weight: bold;
	color: white;
	background-color: #da70d6;
}
td {
	text-align: center;
	height: 30px;
}
tr:nth-child(even) {
	background-color: #eeb2ee;
}
tr:nth-child(odd) {
	background-color: #fffafa;
}
tr:first-child th:first-child {
  border-top-left-radius: 10px;
}
tr:first-child th:last-child {
  border-top-right-radius: 10px;
}
tr:last-child td:first-child {
  border-bottom-left-radius: 10px;
}
tr:last-child td:last-child {
  border-bottom-right-radius: 10px;
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
<div id="tajuk">
 <p>Senarai Telefon Pintar</p>
</div>

<!-- Senarai produk -->
<?php
$query = "SELECT * 
					FROM telefon_pintar 
					INNER JOIN jenama USING (kod_jenama)
					ORDER BY nama_jenama";
$result = mysqli_query($conn, $query) or die(mysqli_error());

$bil = 0;

if(mysqli_num_rows($result) > 0)
{
  //table untuk paparan data 
  echo "<table>";
  echo "<col width='10'>";		//saiz column 1
  echo "<col width='50'>";		//saiz column 2
  echo "<col width='100'>";		//saiz column 3
  echo "<col width='150'>";		//saiz column 4
  echo "<col width='100'>";		//saiz column 5
  echo "<col width='100'>";		//saiz column 6
  echo "<col width='80'>";		//saiz column 7
  echo "<col width='80'>";		//saiz column 8
  echo "<tr>";
  echo "<th></th>";									//column 1
  echo "<th>Bil</th>";							//column 2
  echo "<th>No Siri</th>";					//column 3
  echo "<th>Jenama</th>";						//column 4
  echo "<th>Harga (RM)</th>";				//column 5
  echo "<th>Kuantiti (Unit)</th>";	//column 6
  echo "<th>Edit</th>";							//column 7
  echo "<th>Padam</th>";						//column 8
  echo "</tr>";

  //papar semua data daripada jadual di Database
  while($row = mysqli_fetch_assoc($result))
  {
  	$bil++;

  	echo "<tr height='10'>";
  	echo "<td></td>";
  	echo "<td>".$bil.".</td>";
  	echo "<td>".$row['no_siri']."</td>";
  	echo "<td>".$row['nama_jenama']."</td>";
  	echo "<td>".$row['harga']."</td>";
  	echo "<td>".$row['kuantiti']."</td>";
  	echo "<td><a href='edit_produk.php?no=".$row['no_siri']."'>
  		    <img src='gambar/b_edit.png' width='15' height ='15'>
  		    </a></td>";
  	echo "<td><a href='padam_produk.php?no=".$row['no_siri']."'>
  		    <img src='gambar/b_delete.png' width='15' height ='15'>
  		    </a></td>";
  	echo "</tr>";
  }
    echo "</table>";

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
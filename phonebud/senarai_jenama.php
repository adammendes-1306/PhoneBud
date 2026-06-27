<html>
<head>
<style>
.table {
	margin-left: auto;
	margin-right: auto;
	border-collapse: collapse;
	margin: auto;
	background-color: #e6e6fa;
	border-radius: 10px;
}
.table td {
	text-align: left;
	height: 30px;
}
.table tr td {
	text-align: center;
}
.table th {
	height: 30px;
	text-align: center;
	font-weight: bold;
	color: white;
	background-color: #d0a0dd;
}
button {
	border: 1px solid black;
	font-size: 14px;
	padding: 3px 12px;
	border-radius: 5px;
}
tr:first-child th:first-child {
  border-top-left-radius: 10px;
}
tr:first-child th:last-child {
  border-top-right-radius: 10px;
}
tr:last-child th:first-child {
  border-top-left-radius: 10px;
}
tr:last-child th:last-child {
  border-top-right-radius: 10px;
</style>
</head>
<body>

<div id="mainbody"><div id="tajuk">Jenama<p></div>
<?php

//dapatkan maklumat jenama daripada jadual di dalam Database
$sql = "SELECT * FROM jenama ORDER BY kod_jenama";
$result = mysqli_query($conn, $sql) or die(mysqli_error());

$bil = 0;

if (mysqli_num_rows($result) > 0)
{
	//table untuk paparan data
	echo "<table class='table'>";
	echo "<col width='80'>";		//saiz column 1
	echo "<col width='100'>";		//saiz column 2
	echo "<col width='200'>";		//saiz column 3
	echo "<col width='80'>";		//saiz column 4
	echo "<tr>";
	echo "<th>Bil</th>";					//column 1
	echo "<th>Kod Jenama</th>";		//column 2
	echo "<th>Jenama</th>";				//column 3
	echo "<th>Padam</th>";				//column 4
	echo "</tr>";

	//papar semua data daripada jadual di Database
	while($row = mysqli_fetch_assoc($result))
	{
		$bil++;
		echo "<tr height='10'>";
		echo "<td>".$bil.".</td>";
		echo "<td>".$row['kod_jenama']."</td>";
		echo "<td>".$row['nama_jenama']."</td>";
		echo "<td><a href='padam_jenama.php?jn=".$row['kod_jenama']."'>
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

</body>
</html>
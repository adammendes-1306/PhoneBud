<html>
<head>
<style>
#main {
	background-color: white;
	padding: 15px;
}
/* warna table mesti sama dengan warna latar poster */
table {
	background-color: #89c4ff; /* warna latar */
}
td {
	width: 30%;
}
tr {
	height: 50px;
}
tr:nth-child(3) {
	text-align: center; /* kedudukan butang */
}
/* CSS untuk butang */
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
</style>
</head>
<body>

<div id="main">
<table>
	<tr>
		<td rowspan="3"></td>
		<td rowspan="3"><img src="gambar/poster.gif" width="600" height="350"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td><a href="senarai_produkP.php?kat=0" class="butang" style="text-decoration: none;">Lihat Telefon Pintar</a></td>
	</tr>
</table>
</div>

</body>
</html>
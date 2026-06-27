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
input[type=submit] {
	border-style: solid;
	border-width: 1px;
	border-radius: 5px;
}
</style>
</head>
<body>

<?php include ("senarai_jenama.php"); ?>

<div id="mainbody">
 <div id="tajuk">
  <h5>Muat Naik Jenama Telefon Pintar</h5>
 </div>

<!-- borang untuk muat naik jenama -->
<form action="upload_jenama.php" method="POST"
	  enctype="multipart/form-data">
<center>
Pilih fail untuk dimuat naik (Fail excel .csv sahaja) :
<input type="file" name="file_csv" required>
<p>
<input type="submit" name="upload" value="Muat Naik">
</p></center>
</form>

</div>
<?php include ("footer.php"); ?>
</body>
</html>
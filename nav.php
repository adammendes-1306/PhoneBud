<?php
//session
include('session.php');
?>
<html>
<head>
<style>
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #f6f6f6;
}
li {
	float: left;
}
li a, .dropbtn {
	display: inline-block;
	font-family: Trebuchet MS;
	color: white;
	text-align: center;
	padding: 10px 16px;
	text-decoration: none;
	font-weight: bold;
	background-color: #95BDFF;
	border-radius: 5px;
}
li a:hover, .dropdown:hover .dropbtn {
	background-color: #D2E0FB;
	color: White;
}
li.dropdown {
	display: inline-block;
	float: right;
}
.dropdown-content {
	display: none;
	position: absolute;
	right: 18; /* boleh adjust saiz */
	background-color: #D2E0FB;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,2);
	z-index: 1;
	border-radius: 5px;
}
.dropdown-content a {
	color: white;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: right;
	border-radius: 5px;
}
.dropdown-content a:hover {
	background-color: #f0f8ff;
	color: black;
}
.dropdown:hover .dropdown-content {
	display: block;
}
</style>
</head>
<body>

<?php
if ($kat == "A") //Menu admin
{
	$utama='<a href="senarai_produkA.php">';
	$menu1='<a href="senarai_produkA.php">Senarai Telefon Pintar</a>';
	$menu2='<a href="borang_produk.php">Tambah Telefon Pintar</a>';
	$menu3='<a href="jenama.php">Jenama Telefon Pintar</a>';
}
else 	//Menu Pembeli	kat=1 (untuk pembeli yang login)
{
	$utama='<a href="senarai_produkP.php?kat=1">';
	$menu1='<a href="senarai_produkP.php?kat=1">Senarai Telefon Pintar</a>';
	$menu2='<a href="saring_produk.php?kat=1">Saring Telefon Pintar</a>';
	$menu3='';
}
?>

<ul>
	<li><?php echo $utama; ?>Utama</a></li>
	<li class="dropdown">
	<a href="#" class="dropbtn">Hai, <?php echo $nama; ?></a>
		<div class="dropdown-content">
		<!-- menu untuk pengguna yang berlainan -->
			<?php
				echo $menu1;
				echo $menu2;
				echo $menu3;
			?>
			<a href="logout.php">Log Keluar</a>
		</div>
	</li>
</ul>

</body>
</html>
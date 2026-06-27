<html>
<style>
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #f6f6f6; /* warna bar navigasi */
}
li {
	float: left;
}
li a {	/* adjust display kotak nav */
	display: inline-block;
	font-family: Trebuchet MS;
	color: white; /* warna font */
	text-align: center;
	padding: 10px 16px;
	text-decoration: none;
	font-weight: bold;
	border-radius: 5px;
	background-color: #95BDFF;
}
li a:hover {
	background-color: #D2E0FB;
	color: white;
}
/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
	.topnav a {
		float: none;
		width: 100%;
	}
}
</style>
<body>

<ul>
	<li><a href="index.php">Utama</a></li>
	<li style="float:right">
		<a href="borang_login.php">Log Masuk</a></li>
</ul>

</body>
</html>

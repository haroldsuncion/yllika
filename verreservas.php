<html>
<head>
<title>Panel ADM</title>
</head>
<body>
<h1>Casa Yllika ADM<h1>
<!--<form method="post" action="ver.php">-->
<form method="post">
Room:
<select name="room">
<option value="100">1</option><option value="101">2</option><option value="102">3</option><option value="103">4</option><option>all</option>
</select>
Status:
<select name="status">
<option>no</option><option>yes</option>
</select>
<input type="submit" name="reservas" value="Ver reservas">
</form>
<form>
<?php
$room=$_POST['room'];
if( isset($_POST["reservas"]))	{
	include("ver.php");
	}
?>
</form>
</body>
</html>
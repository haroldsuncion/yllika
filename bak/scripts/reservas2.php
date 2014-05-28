<html> 
<head> 
<title></title> 
</head> 
<body> 
<?php
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$house = $_POST["house"];
$room = $_POST["room"];
$host="localhost";
$user="root";
$passwd="wq:mak";

$conexion = mysql_connect($host,$user,$passwd);
$DB="yllika";
mysql_select_db($DB,$conexion);
$query = "INSERT INTO reservas (name, lastname,house, room) VALUES ('$name','$lastname',$house,$room)";
mysql_query($query);
#print ("Sus datos fueron ingresados correctamente");
?> 
<script language="javascript" type="text/javascript">
alert("Sus datos se ingresaron correctamente")
window.location="http://192.168.10.51/yllika/index.html";
</script>
</body> 
</html>

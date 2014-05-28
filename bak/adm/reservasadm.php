<html> 
<head> 
<title></title> 
</head> 
<body> 
<?php
$house=$_POST["house"];
$host="localhost";
$user="root";
$passwd="wq:mak";
$conexion = mysql_connect($host,$user,$passwd);
$DB="yllika";
$database=mysql_select_db($DB,$conexion);
if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}
$query = "SELECT name, lastname, house,room FROM reservas WHERE house='$house'";
$result=mysql_query($query);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();}
else{
print("<table border='1'>");
print("<tr><td>Nombre</td><td>Apellido</td><td>Casa</td><td>Habitacion</td></tr><tr>");
while($row=mysql_fetch_array($result)){
print("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td>");
}
print("</tr></table><br>");
}
?> 
<script language="javascript" type="text/javascript">
</script>
</body> 
</html>

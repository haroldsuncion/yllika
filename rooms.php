<html>
<head>
<script language="javascript" type="text/javascript">
function downloadPDF(id){
var idroom=id
window.location="http://192.168.2.114/yllika/formulario.php?idroom="+idroom;
}
</script>
</head>
<body>
<?php
require 'conexion.php';

$house=$_POST["house"];

$table="reservas";
$query = "SELECT room_number, room_status,idrooms FROM rooms where houses_idhouses=$house AND room_status='free'";
$result=mysql_query($query);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();}
else{
print("<form action=\"download.php\" method=\"post\">");
print("<table border='1'>");
print("<tr><td>Room Number</td><td>Status</td><td>Reservar</td></tr>");
while($row=mysql_fetch_array($result)){

print("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td><input type=button name=\"pdf\" id=\"pdf\" onclick=\"downloadPDF(".$row[2].")\" value=Reservar></td>");
}
print("</tr></table><br>");
}
?>
</body>
<html>
<html>
<head>
<script language="javascript" type="text/javascript">

function downloadPDF(id){
var idreservas=id
window.location="http://192.168.2.114/yllika/downloadpdf.php?id="+idreservas;
}

function aprobar(idreservas,idrooms){
var idroom=idrooms
var idreserva=idreservas

alert(idreserva+" "+idroom)
window.location="http://192.168.2.114/yllika/aprobar.php?idroom="+idroom+"&idreserva="+idreserva
/*window.location="http://192.168.2.114/yllika/aprobar.php?idroom="+idreservas;*/

}

</script>
</head>
<body>
<?php
require 'conexion.php';

$room=$_POST["room"];
$status=$_POST["status"];

$table="reservas";
$query = "SELECT reserva_name, reserva_lastname, reserva_start,reserva_end,reserva_status,reserva_passport_number,reserva_nationality,reserva_university,rooms_idrooms,idreservas FROM reservas WHERE rooms_idrooms='$room' and reserva_status='$status'";
$result=mysql_query($query);
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();}
else{
print("<form action=\"download.php\" method=\"post\">");
print("<table border='1'>");
print("<tr><td>Name</td><td>Lastname</td><td>Start</td><td>End</td><td>Status</td><td>Passport</td><td>Nationality</td><td>University</td><td>Room</td><td>PDF Passport</td><td>Aprobar</td></tr><tr>");
while($row=mysql_fetch_array($result)){

print("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6])."</td><td>".$row[7]."</td><td>".$row[8]."</td><td><input type=button name=\"pdf\" id=\"pdf\" onclick=\"downloadPDF(".$row[9].")\" value=Download></td>"."<td><input type=button name=\"pdf\" id=\"pdf\" onclick=\"aprobar(".$row[9].",".$row[8].")\" value=Download></td>";
}
print("</tr></table><br>");
}
?>
</body>
<html>

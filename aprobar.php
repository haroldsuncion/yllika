<?php
require 'conexion.php';

#$idreserva=$_GET["idreserva"];
$idreserva=$_GET["idreserva"];
$idroom=$_GET["idroom"];
print $idreserva;
print $idroom;

if ($idreserva> 0){
    $consulta = "UPDATE rooms SET reservas_idreservas=$idreserva,room_status='bussy'  where idrooms=101";
    $resultado= @mysql_query($consulta) or die(mysql_error());
	
	if($resultado){
				
				echo"Ye";
			}
}
?>
<?php
require 'conexion.php';

$id=$_GET["id"];
print $id;

if ($id > 0){
    $consulta = "select reserva_file,reserva_file_type from reservas where idreservas=$id";
    $resultado= @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['reserva_file'];
    $tipo = $datos['reserva_file_type'];
     
    header("Content-type: $tipo");
    
    print $imagen;
}

?>

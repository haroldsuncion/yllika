<?php
$servidor = "127.0.0.1";
$usuario = "root";
$clave = "wq:mak";
$base_de_datos = "yllika";

mysql_connect($servidor, $usuario, $clave) or die(mysql_error()) ;
mysql_select_db($base_de_datos) or die(mysql_error()) ;

?>

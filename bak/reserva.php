<?php
require 'conexion.php';
$table="reservas";

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$reserva_start = $_POST["start"];
$reserva_end = $_POST["end"];
$reserva_passport_number=$_POST["passport"];
$reserva_nationality=$_POST["nationality"];
$reserva_university=$_POST["university"];
$rooms_idroom=$_POST["room"];

if ( ! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png", "application/pdf");
    $limite_kb = 16384;
     
    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){

        $imagen_temporal  = $_FILES['imagen']['tmp_name']; 
        $tipo = $_FILES['imagen']['type'];
        $fp     = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        $data = mysql_escape_string($data);
	
$query ="INSERT INTO reservas(reserva_name,reserva_lastname,reserva_start,reserva_end,reserva_status,reserva_passport_number,reserva_nationality,reserva_university,rooms_idrooms,reserva_file,reserva_file_type) VALUES('$name','$lastname','$reserva_start','$reserva_end','no','$reserva_passport_number','$reserva_nationality','$reserva_university','$rooms_idroom','$data', '$tipo')";

	$resultado=mysql_query($query);
        if ($resultado){
           ?> 
		<script language="javascript"> 
		alert("Sus datos se ingresaron correctamente");
		window.location="http://192.168.2.114/yllika/formulario.php"; 
		</script> 
		<?php 
        } else {
            echo "ocurrido un error al guardar los datos";
        }
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
    }
}
?>

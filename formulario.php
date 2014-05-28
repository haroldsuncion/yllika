<?php
$room=$_GET["idroom"];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Formulario Reservas</title>	
<!--<LINK rel=stylesheet type="text/css" href="style.css">-->
	</head>
	<body>
<form action="reserva.php" method="POST" enctype="multipart/form-data">
    
	<h2>Reserva</h2><br>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" placeholder="Name" required />
		<br>
		
			<label for="lastname">Lastname:</label>
			<input type="text" name="lastname" id="lastname" placeholder="lastname" required />
		<br>
		
			<label for="start">Start:</label>
			<input type="date" name="start" id="start"required />
		<br>
		
			<label for="end">End:</label>
			<input type="date" name="end" id="end" required />
		<br>
		
			<label for="passport">Passport:</label>
			<input type="text" name="passport" id="passport" placeholder="Passport Number" required />
		<br>
		
			<label for="passport">Nationality:</label>
			<input type="text" name="nationality" id="nationality" placeholder="Nationality" required />
		<br>
		
			<label for="passport">University:</label>
			<input type="text" name="university" id="university" placeholder="University" required />
		<br>
		
			<label for="passport">Room:</label>
			<input OnFocus="this.blur()" type="number" name="room" id="room" <?php print('value="'.$room.'"');?>/>
		<br>
		
            <label for="passport">Passport(PDF):</label>
			<input type="file" name="imagen" id="imagen" />
		<br>          
	
          <button class="submit" type="submit">Enviar</button>
        <br>
        
</form>
	</body>
</html>

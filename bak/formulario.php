<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Formulario Reservas</title>	
<LINK rel=stylesheet type="text/css" href="style.css">
	</head>
	<body><!--
		<form action="reserva.php" method="POST" enctype="multipart/form-data class="contact_form"">
			<label>Name</label>
			<input type="text" name="name" id="name"></input><br>
			<label>Lastname</label>
			<input type="text" name="lastname" id="lastname"></input><br>
			<label>Start</label>
			<input type="date" name="start" id="start"></input><br>
			<label>End</label>
			<input type="date" name="end" id="end"></input><br>
			<label>Passport Number</label>
			<input type="text" name="passport" id="passport"></input><br>
			<label>Nationality</label>
			<input type="text" name="nationality" id="nationality"></input><br>
			<label>University</label>
			<input type="text" name="university" id="university"></input><br>
			<label>Room</label>
			<input type="text" name="room" id="room"></input><br>
			<label for="imagen">Passport(PDF):</label>
			<input type="file" name="imagen" id="imagen" /><br>
			<input type="submit" name="subir" value="Subir"/>
		</form>!-->
<form class="contact_form" action="reserva.php" method="POST" enctype="multipart/form-data">
    <ul>
	<li><h2>Contactanos</h2></li>
		<li>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" placeholder="Name" required />
		</li>
		<li>
			<label for="lastname">Lastname:</label>
			<input type="text" name="lastname" id="lastname" placeholder="lastname" required />
		</li>
		<li>
			<label for="start">Start:</label>
			<input type="date" name="start" id="start"required />
		</li>
		<li>
			<label for="end">End:</label>
			<input type="date" name="end" id="end" required />
		</li>
		<li>
			<label for="passport">Passport:</label>
			<input type="text" name="passport" id="passport" placeholder="Passport Number" required />
		</li>
		<li>
			<label for="passport">Nationality:</label>
			<input type="text" name="nationality" id="nationality" placeholder="Nationality" required />
		</li>
		<li>
			<label for="passport">University:</label>
			<input type="text" name="university" id="university" placeholder="University" required />
		</li>
		<li>
			<label for="passport">Room:</label>
			<input type="text" name="room" id="room" placeholder="Room" required />
		</li> 
		<li>
			<label for="passport">Passport(PDF):</label>
			<input type="file" name="imagen" id="imagen" />
		</li>          
	<li>
          <button class="submit" type="submit">Enviar</button>
        </li>
    </ul>
</form>
	</body>
</html>

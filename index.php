<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Casa Yllika</title>
	<meta name="description" content="Hospedaje" />
	<meta name="keywords" content="Hospedaje, Intercambio, Business, Estudiantes" />
	<meta name="author" content="Casa Yllika" />
	<link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">	
	<div id="bl-main" class="bl-main">
		<section>
		<div class="bl-box">
	<h2 class="bl-icon bl-icon-about">Casa Yllika</h2>
		</div>
		<div class="bl-content">
			<h2>Casa Yllika...</h2>
			<p>Casa Yllika empezó...</p>
		</div>
			<span class="bl-icon bl-icon-close"></span>
		</section>
		<section id="bl-work-section">
			<div class="bl-box">
	<h2 class="bl-icon bl-icon-works">Servicios</h2>
			</div>
			<div class="bl-content">
				<h2>Hospedaje</h2>
				<p>Casa Yllika ofrece...</p>
				<ul id="bl-work-items">
				<li data-panel="panel-1"><a href="#"><img src="images/1.jpg" /></a></li>
				<li data-panel="panel-2"><a href="#"><img src="images/2.jpg" /></a></li>
				<li data-panel="panel-3"><a href="#"><img src="images/3.jpg" /></a></li>
				<li data-panel="panel-4"><a href="#"><img src="images/4.jpg" /></a></li>
				</ul>
			</div>
			<span class="bl-icon bl-icon-close"></span>
		</section>

		<section>
			<div class="bl-box">
	<h2 class="bl-icon bl-icon-blog">Historias</h2>
			</div>
			     <div class="bl-content">
                    <?php
                        include 'stories.php';
                    ?>
				</div>
				<span class="bl-icon bl-icon-close"></span>
		</section>
		<section>
			<div class="bl-box">
	<h2 class="bl-icon bl-icon-contact">Reservas</h2>
			</div>
			<div class="bl-content">
                  <ul id="bl-work-items">
				<li data-panel="panel-1"><a href="#"><img src="images/1.jpg" /></a></li>
				<li data-panel="panel-2"><a href="#"><img src="images/2.jpg" /></a></li>
				<li data-panel="panel-3"><a href="#"><img src="images/3.jpg" /></a></li>
				<li data-panel="panel-4"><a href="#"><img src="images/4.jpg" /></a></li>
				</ul>
			</div>
				<span class="bl-icon bl-icon-close"></span>
		</section>
		<!-- Panel items for the works -->
			<div class="bl-panel-items" id="bl-panel-work-items">
				<div data-panel="panel-1">
					<div>
						<img src="images/1.jpg" />
						<h3>Hospedaje...</h3>
						<p>cdsvffdvdfvdf....</p>
					</div>
				</div>
				<div data-panel="panel-2">
					<div>
						<img src="images/2.jpg" />
						<h3>Servicios...</h3>
						<p>dvdsvcdfv...</p>
					</div>
				</div>
				<div data-panel="panel-3">
					<div>
						<img src="images/3.jpg" />
						<h3>bla bla bla...</h3>
						<p>dvdfcvds5...</p>
					</div>
				</div>
				<div data-panel="panel-4">
					<div>
						<img src="images/4.jpg" />
						<h3>bla bla bla...</h3>
						<p>dscvdscv...</p>
					</div>
				</div>
					<nav>
						<span class="bl-next-work">&gt; Siguiente</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="js/jquery.min.js"></script>		
		<script src="js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
		</script>
	</body>
</html>

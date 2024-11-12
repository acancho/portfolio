<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Somos una ebanistería especializada en la creación de muebles de madera a medida, desde elegantes mesas hasta intricados armarios. ¡Descubre la belleza de nuestros diseños artesanales!">
	<meta name="keywords" content="ebanistería, muebles de madera, diseño de muebles, carpintería, muebles a medida">
	<meta name="Adrian Cancho" content="Ebanisteria Ramirez y Adrian Cancho">
	<meta property="og:title" content="Descubre los Exquisitos Muebles de Madera Hechos a Mano en nuestra Ebanistería">
	<meta property="og:description" content="Explora nuestra colección de muebles únicos hechos a mano con madera de la más alta calidad. ¡Encuentra el complemento perfecto para tu hogar!">
	<meta name="robots" content="index, follow">


	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" />
	<title>Ebanisteria Ramirez</title>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- NAV -->
				<?php
				include 'includes/nav.php'
				?>
				<!-- FIN DE NAV -->
			</div>
		</div>
		<!-- FOTO principal -->
		<div class="container">
			<div class="row">
				<h1 class="text-center"> Bienvenido a Ebanisteria Ramirez</h1>
				<div class="col-12">

					<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/cocinaslider.jpeg" class="d-block w-100" alt="PUERTAS CORREDERAS">
								<div class="carousel-caption d-none d-md-block">
									<h5>PUERTAS CORREDERAS</h5>
									<p>COCINA ESPECIAL CON CERRAMIENTO DE PUERTAS CORREDERAS</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/armarioslider.jpeg" class="d-block w-100" alt="LIBRERIA">
								<div class="carousel-caption d-none d-md-block">
									<h5>LIBRERIA</h5>
									<p>LIBRERIA ESCRITORIO EN PINO BLANCO</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/puertaslider.jpeg" class="d-block w-100" alt="PUERTAS">
								<div class="carousel-caption d-none d-md-block">
									<h5>PUERTAS</h5>
									<p>PUERTAS DE PASO BLANCO LACADO 4 CANALES</p>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>


			</div>
			<!-- FIN FOTO principal -->
			<br><br>
			<div class="row">

				<div class="col-12 col-xl-4 ">
					<p class="fs-4">En Ebanistería Ramírez, creamos muebles únicos con la belleza natural de la madera. Nuestro equipo experto combina tradición y creatividad para dar vida a tus ideas. Confía en nosotros para transformar tu espacio con la calidez y el encanto de la carpintería artesanal.</p>
					<a href="contacto.php"><button type="button" class="btn btn-outline-info " style="margin-top: 50px;">Contacto</button></a>
				</div>
				<br><br><br><br><br><br><br><br><br>
				<div class="col-12 col-xl-8">
					<div class="d-flex flex-row">
						<div class="image-container">
							<img src="img/armario12.jpeg" class="rounded mx-auto d-block img-fluid" alt="armario12">
						</div>
						<div class="image-container">
							<img src="img/puerta6.jpeg" class="rounded mx-auto d-block img-fluid" alt="puerta6">
						</div>
						<div class="image-container">
							<img src="img/armario3.jpeg" class="rounded mx-auto d-block img-fluid" alt="armario3">
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<?php
		include 'includes/footer.php'
		?>
		<!-- FIN DE FOOTER -->

	</div>






<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>
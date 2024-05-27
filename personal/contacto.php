<?php

echo '
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Gestión||Corpoelec</title>
	<link rel="stylesheet" href="css\home.css">
	<link rel="shortcut icon" href="img\corpo.png" type="image/x-icon">
</head>
<body>
	<nav>
	
		<ul class="menu-horizontal">
			<div class="logo">
        <img src="img\logo.png" alt="" class="logo-img">
        </div>
			<li><a href="home.php">Inicio</a></li>
			<li>
				<a href="#">Facturación</a>
				<ul class="menu-vertical">
					<li><a href="formulario.php">Registro de Cliente</a></li>
					<li><a href="#">Registro de pago</a></li>
					<!--<li><a href="#">Formato de pago</a></li>-->
				</ul>
			</li>
			<li>
				<a href="#">consultar</a>
				<ul class="menu-vertical">
					<li><a href="consultacliente.php">Lista de cliente</a></li>
					<li><a href="consultapagos.php">Consultar pagos</a></li>
					<!--<li><a href="#">Consultar metodos de pagos</a></li>-->
				</ul>
			</li>
			<li><a href="contacto.php">Contacto</a></li>

			<li><a href="../cerrar_sesion.php?cerrar=yes">Salir</a></li>

		</ul>
	</nav>
	<section id="html">
		<h2>Contacto de ateción especializada</h2>
		<p>CORPOELEC, Empresa Eléctrica Nacional, adscrita al Ministerio del Poder Popular de Energía Eléctrica, .</p>
  
        <a href="mailto:grandesusuariosproceso@gmail.com?Subject=Interesado%20en%20informacion%20de%20los%20pagos">Contactar por correo</a>

	</section>
</body>
</html>

';
?>
<?php

echo '
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=2.0">
	<title>Sistema de Gestión||Corpoelec</title>
	<link rel="stylesheet" href="css\estilo.css">
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
					<li><a href="formulariocliente.php">Registro de pago</a></li>
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
            
             <li>
					<a href="#">administrador</a>
					<ul class="menu-vertical">
					<li><a href="registro.php">registro de Usuarios</a></li>
					<li><a href="admin_control.php">Consultar Usuarios</a></li>
				</ul>
             </li>
			<li><a href="contacto.php">Contacto</a></li>

			<li><a href="../cerrar_sesion.php?cerrar=yes">Salir</a></li>
		</ul>
	</nav>
	<section id="html">
		<h2>Coodirnacion de Ateción de Usuarios Coorporativo Corpoelec</h2>
		<p>CORPOELEC, Empresa Eléctrica Nacional, adscrita al Ministerio del Poder Popular de Energía Eléctrica, es una institución que nació con la visión de reorganizar y unificar el sector eléctrico venezolano a fin de garantizar la prestación de un servicio eléctrico confiable, no excluyente y con sentido social. Integración que permite fortalecer el sector eléctrico para brindar un servicio de calidad y eficiente al Soberano, dando respuestas como empresa socialista en todas las actividades y jornadas de contribución social que implante el Gobierno Revolucionario de Venezuela.</p>

	</section>
</body>
</html>

';
?>
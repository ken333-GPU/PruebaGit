<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="corpoelec";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>registro de usuario||Corpoelec</title>
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

	<div class="formulario">

    <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		
         <H1>Registro de Usuarios del sistema</H1>
           <tr>

			<div class="username">
				<input type="text" name="email">
                 <label>Correo</label>
                 </div>

                <div class="username">
				<input type="text" name="password">
                <label>Contraseña</label>
                 </div>

                <div class="sexo">

				<input type="radio" name="role" id="admin" value="admin">
				<label class="label-radio mujer" for="mujer">Admin</label>
    			<input type="radio" name="role" id="personal" value="personal">
				<label class="label-radio hombre" for="personal">Personal</label>

   <div class="sexo">
<H3>Confirmar role</H3>
           <tr>
				<input type="radio" name="sexo" id="admin" value="admin">
				<label class="label-radio mujer" for="mujer">Admin</label>
    			<input type="radio" name="sexo" id="personal" value="personal">
				<label class="label-radio hombre" for="personal">Personal</label>


            <div class="recordar">
			<input type="submit" name="registrarse" value="Registrar">
            </div>
</div>

				<ul class="error" id="error"></ul>
			</div>

		   </form>		
				
			</table>
		</div>
	</div>

   </div>
</div>
	<script src="js/formulario.js"></script>

<?php
	if(isset($_POST['registrarse'])){
		$email =$_POST["email"];
    $password=$_POST["password"];
		$role=$_POST["role"];
		$sexo=$_POST["sexo"];
		$id= rand(1,2500);

		$insertarDatos = "INSERT INTO usuarios (email,password,role,username,id) VALUES ('$email', '$password', '$role', '$sexo', '$id')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
     }

?>

	</section>
</body>
</html>


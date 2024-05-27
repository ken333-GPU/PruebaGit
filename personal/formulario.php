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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de registro de cliente||Corpoelec</title>
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
			<li><a href="contacto.php">Contacto</a></li>

			<li><a href="../cerrar_sesion.php?cerrar=yes">Salir</a></li>

		</ul>
	</nav>

	<div class="formulario">

    <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
		
         <H1>Registro de Clientes Usuarios Corporativo</H1>
           <tr>

			<div class="username">
				<input type="text" name="nombremp">
                 <label>Nombre de la empresa</label>
                 </div>

                <div class="username">
				<input type="text" name="cuenta">
                <label>Cuenta de contrato</label>
                 </div>



                <div class="username"> 
				<input type="text" name="nombre" >
                <label>Nombre del representante</label>
                 </div>

                <div class="username">
				<input type="text" name="rif">
                <label>Rif</label>
                 </div>

                <div class="username">
				<input type="text" name="correo">
                <label>Correo electronico</label>
                 </div>

                <div class="username">
                <input type="text" name="dirrecion" >
                <label>Dirreción</label>
                 </div>


                <div class="username">
                <input type="text" name="telefono">
                <label>Teléfono</label>
                 </div>

				<div class="sexo">

				<input type="radio" name="sexo" id="mujer" value="mujer">
				<label class="label-radio mujer" for="mujer">Mujer</label>
    			<input type="radio" name="sexo" id="hombre" value="hombre">
				<label class="label-radio hombre" for="hombre">Hombre</label>

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
		$nombre =$_POST["nombre"];
    $nombremp=$_POST["nombremp"];
		$correo=$_POST["correo"];
		$cuenta=$_POST["cuenta"];
		$dirrecion=$_POST["dirrecion"];
		$rif=$_POST["rif"];
		$sexo=$_POST["sexo"];
		$telefono=$_POST["telefono"];
		$id= rand(1,2500);

		$insertarDatos = "INSERT INTO Cliente (nombre,rif,cuenta,id,nombremp,correo, sexo,telefono,dirrecion) VALUES ('$nombre', '$rif', '$cuenta', '$id', '$nombremp', '$correo', '$sexo', '$telefono', '$dirrecion')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
     }

?>

	</section>
</body>
</html>



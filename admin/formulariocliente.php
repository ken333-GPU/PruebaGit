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
	<title>Formulario de pago ||Corpoelec</title>
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
		
         <H1>Registro de Pagos Clientes Corporativo</H1>
           <tr>

           	<div class="username">
				  <input type="text" name="search_cliente" id='search_cliente' 
            ondblclick="Doble_Clic(this.value)" value="">
                 <label>Cuenta de contrato</label>
                 </div>

                 <div class="username">
				<input id="dni" name="dni" class="element text medium" type="text" maxlength="255" value=""/>
                 <label>Rif</label>
                 </div>

               <div class="username">
         <input id="direccion" name="direccion" type="text" maxlength="255"value=""/> 
          <label>Nombre de la Empresa </label>
		  </div> 

			<div class="username">
				<input type="text" name="Num_factura">
                 <label>Numero de la factura</label>
                 </div>

                <div class="username">
				<input type="date" name="Periodo">
                <label>fecha de factura</label>
                 </div>



                <div class="username"> 
				<input type="text" name="monto_elec" >
                <label>Costo electrico</label>
                 </div>

                <div class="username">
				<input type="text" name="Iva_elec">
                <label>Iva electrico</label>
                 </div>

                <div class="username">
				<input type="text" name="mon_total">
                <label>Total a pagar</label>
                 </div>

				
            <div class="recordar">
			<input type="submit" name="registrarse" value="Registrar Pago">
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
		$Num_factura =$_POST["Num_factura"];
    $Periodo=$_POST["Periodo"];
		$monto_elec=$_POST["monto_elec"];
		$mon_total=$_POST ["monto_total"];
		$Iva_elec=$_POST["Iva_elec"];
		$Cuenta=$_POST["search_cliente"];
		$Rif=$_POST["dni"];
		$nombre=$_POST["direccion"];
		

		$insertarDatos = "INSERT INTO pago (Num_factura,Periodo,monto_elec,mon_total,Iva_elec,Cuenta,Rif,nombremp) VALUES ('$Num_factura', '$Periodo', '$monto_elec', '$mon_total', '$Iva_elec','$Cuenta','$Rif','$nombre')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}else{ ?>
  
    <script>alert('Los datos fueron registrado exitosamente');</script>

    <?php

    	}

     }

?>


<!-- ESTE SCRIPT GENERA LA LISTA DE COINCIDENCIAS DEL NOMBRE DE CLIENTE -->
      
<!-- jQuery -->      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  
  
<script type="text/javascript">
  $(function() {
     $( "#search_cliente" ).autocomplete({
       source: 'lista_cliente.php',
     });
  });
</script>       
   
  <!-- ESTE SCRIPT REALIZA EL AUTOLLENADO DEL DNI Y LA DIRECCION LUEGO DE HACER DOBLE CLIK -->
  <script>

		function Doble_Clic(str) {
			if (str.length == 0) {
				document.getElementById("dni").value = "";
				document.getElementById("direccion").value = "";
				return ;
			}
			else {

				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function ()
                {

					if (this.readyState == 4 && this.status == 200)
                    {
					var myObj = JSON.parse(this.responseText);
					document.getElementById
					("dni").value = myObj[0];
             		document.getElementById(
					"direccion").value = myObj[1];
					}
				};
				xmlhttp.open("GET", "busca_dni_dir.php?search_cliente=" + str, true);
				xmlhttp.send();
			}
		}
	</script>      
  

</div>
	</section>
</body>
</html>



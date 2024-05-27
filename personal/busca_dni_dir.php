<?php

// consigue el nombre desde el formulario
$search_cliente = $_REQUEST['search_cliente'];

// Coneccion a la base de datos

include("conectar.php"); 

if ($search_cliente !== "") {
	
	// Se busca el dni y la direccion correspondiente al nombre
	$query = mysqli_query($conn, "SELECT * FROM cliente WHERE cuenta='$search_cliente'");

	$row = mysqli_fetch_array($query);

	// consigue el dni
	$dni = $row["dni"];

	// consigue la direccion
	$direccion = $row["nombremp"];
}

// lo almacena un un arreglo
$result = array("$dni", "$direccion");

// lo envia al formulario
$myJSON = json_encode($result);
echo $myJSON;
?>
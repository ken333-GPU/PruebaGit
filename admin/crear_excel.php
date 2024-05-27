<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conectar.php';
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>Nombre de la empresa</th>
						<th>Rif</th>
						<th>Cuenta de contrato</th>
						<th>Nombre del representante</th>
						<th>Correo</th>
						<th>Telefono</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `cliente`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
			
						<td>".$fetch['nombremp']."</td>
						<td>".$fetch['dni']."</td>
						<td>".$fetch['cuenta']."</td>
						<td>".$fetch['nombre']."</td>
						<td>".$fetch['correo']."</td>
						<td>".$fetch['telefono']."</td>
						
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>
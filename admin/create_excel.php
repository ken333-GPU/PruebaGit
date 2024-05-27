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
						<th>cuenta de contrato</th>
						<th>Rif</th>
						<th>Nombre de la Empresa</th>
						<th>Numero de factura</th>
						<th>fecha de factura</th>
						<th>Costo electrico</th>
						<th>Iva electrico</th>
						<th>Total a Pagar</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `pago`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['Cuenta']."</td>
						<td>".$fetch['Rif']."</td>
						<td>".$fetch['nombremp']."</td>
						<td>".$fetch['Num_factura']."</td>
						<td>".$fetch['Periodo']."</td>
						<td>".$fetch['monto_elec']."</td>
						<td>".$fetch['Iva_elec']."</td>
						<td>".$fetch['mon_total']."</td>
						
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
<?php 
include("db.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Pagos||Corpoelec</title>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="css\estilo.css">
<link rel="shortcut icon" href="img\corpo.png" type="image/x-icon">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 <!-- ESTILO CURSOS DE PROGRAMACION -->
 <link rel="stylesheet" href="../css/style_cp.css">


<title>Consulta basica</title>
</head>
<body>






<!-- NAVBAR--> 
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
<!-- END NAVBAR -->







<!-- tabla de datos -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>




<!-- vista C -->
<div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Lista de Pagos</p>
        <div class="container-fluid p-5">
<table class="table" id="example">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Empresa</th>
<th scope="col">Cuenta de contrato</th>
<th scope="col">Rif</th>
<th scope="col">Numero de factura</th>
<th scope="col">Fecha de pago</th>
<th scope="col">Monto Elec.</th>
<th scope="col">Iva Elec.</th>
<th scope="col">Monto Total</th>
</tr>
</thead>
<tbody>
            <?php $busqueda=mysqli_query($conexion,"SELECT * FROM pago "); 
            $numero = mysqli_num_rows($busqueda); ?>
            <h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                    if(!empty($num)){ $num = $num++; }else{$num = ''; }
                  $num++;
                  ?>
<tr>
<th scope="row" style="vertical-align: middle;"><?php echo $num; ?></th>
<td style="vertical-align: middle;"><?php echo $resultado["nombremp"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Cuenta"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Rif"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Num_factura"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Periodo"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["monto_elec"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["Iva_elec"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["mon_total"]; ?></td>
</tr>    

                <?php } ?>

</tbody>
</table>
            
        </div>
    </div>
</div>
<!-- final de  vista C -->


<!-- cambiamos idioma -->
<script>
    $(document).ready(function() {
//   $.fn.DataTable.ext.pager.numbers_length = 5;
    $('#example').DataTable( {

// que aparezcan ultimo siguiente etc...
       "pagingType":"full_numbers",
// ordenamos
       "order": [[ 2, "ASC" ]],
    //    cambiamos idioma
       "language": {
    "decimal":        ".",
    "emptyTable":     "No hay datos para mostrar",
    "info":           "del _START_ al _END_ (_TOTAL_ total)",
    "infoEmpty":      "del 0 al 0 (0 total)",
    "infoFiltered":   "(filtrado de todas las _MAX_ entradas)",
    "infoPostFix":    "",
    "thousands":      "'",
    "lengthMenu":     "Mostrar _MENU_ entradas",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "No hay resultados",
    "paginate": {
      "first":      "Primero",
      "last":       "Último",
      "next":       "Siguiente",
      "previous":   "Anterior"
    },
    "aria": {
      "sortAscending":  ": ordenar de manera Ascendente",
      "sortDescending": ": ordenar de manera Descendente ",
    }
  }

    } );  
} );

</script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script> 


<div>
<form method="POST" action="create_excel.php">
                <button class="btn btn-success pull-right" name="export"><span class="glyphicon glyphicon-print"></span> Exportar a Excel</button>
            </form>

</div>

</body>
</html>









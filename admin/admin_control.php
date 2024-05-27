<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Niveles de Usuarios || corpoelec</title>
		
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="shortcut icon" href="img\corpo.png" type="image/x-icon">
<script src="../js/jquery-1.12.4-jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">

	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    
    body{
    	background-image: url(img/fondo.jpg);
    	font-family: 'Poppins', sans-serif;
    }
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
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


	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		 
			<center>
				<h1>Pagina Administrativa</h1>
				
				<h3>
				<?php
				session_start();

				if(!isset($_SESSION['admin_login']))	
				{
					header("location: ../index.php");  
				}

				if(isset($_SESSION['personal_login']))	
				{
					header("location: ../personal/personal_portada.php");	
				}

				if(isset($_SESSION['usuarios_login']))	
				{
					header("location: ../usuarios/usuarios_portada.php");
				}
				
				if(isset($_SESSION['admin_login']))
				{
				?>
					Bienvenido,
				<?php
						echo $_SESSION['admin_login'];
				}
				?>
				</h3>
					
			</center>
            <hr>
		</div>
		
		<br><br><br>
		<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Panel de usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="4%">ID</th>
                                            <th width="18%">Usuario</th>
                                            <th width="24%">Email</th>
                                            <th width="19%">Rol</th>
                                            <th width="24%">Password</th>
											<th colspan="2">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									require_once '../DBconect.php';
									$select_stmt=$db->prepare("SELECT id,username,email,role FROM usuarios");
									$select_stmt->execute();
									
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["username"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["role"]; ?></td>
                                            <td>*******</td>
											<td width="4%"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
											<td width="7%"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                                        </tr>
									<?php 
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
		
	</div>
			
	</div>
										
	</body>
</html>
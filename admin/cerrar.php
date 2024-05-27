<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['id'] = NULL;
  $_SESSION['usuario'] = NULL;
  unset($_SESSION['id']);
  unset($_SESSION['usuario']);

  //Redireccionamos a la pagina index.php
  header('Location: index.php');
}

?>
<?php

include("conexion.php");

//seasion usuario
session_start();
if (!isset($_SESSION['id_usuario'])) {
  header("Location: index.php");
}
$iduser = $_SESSION['id_usuario'];
$sql = "SELECT idusuarios, Nombre FROM usuarios WHERE idusuarios = '$iduser'";
$conexionuser = $conexion->query($sql);
$row = $conexionuser->fetch_assoc();

//consulta y seleccion mysql 
$sentencia = "SELECT * FROM autos";
$resultado = $conexion->query($sentencia);
//otra manera
//where = ""
//$sql = "SELECT * FROM profesores";
//$resultado = $mysqli->query($sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido a la Automotora</title>
  <script type="text/javascript" src="js/ajax.js"></script>
  <!--CSS MATERIALIZE-->
  <link href="css/estilos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>

  <div>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="admin.php">Home</a></li>
          <li><a href="autos.php">Automotora</a></li>
          <li><a href="salir.php" class="waves-effect waves-light btn">Salir</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="admin.php">Home</a></li>
      <li><a href="autos.php">Automora</a></li>
      <li><a href="salir.php" class="waves-effect waves-light btn">Salir</a></li>
    </ul>
  </div>
  <header>
    <h1>Bienvenido a la Automotora</h1>
  </header>
  <div class="container" center>
    </br>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <b>Nombre: </b><input type="text" id="campo1" name="campo1" />
      <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
    </form>
    </br>


    <div id="listado">

    <?php include('tabla.php')?>

    </div>
    </br>
   
    
    <?php require_once("piedepagina.php"); ?>
    
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
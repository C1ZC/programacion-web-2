<?php
	require 'conexion.php';
	//ingresa los valores por get, y los ingresa en value 
	$idautos = $_GET['idautos'];
	
	$sql = "SELECT * FROM autos WHERE idautos = '$idautos'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

    //modificar usuario este metodo evita inyecciones en tus campos de datos.
    if(isset($_POST["modificar"])){
	$idautos = mysqli_real_escape_string($conexion,$_POST['idautos']);
	$matricula = mysqli_real_escape_string($conexion,$_POST['matricula']);
	$serial_motor = mysqli_real_escape_string($conexion,$_POST['serial_motor']);
	$serial_carroceria = mysqli_real_escape_string($conexion,$_POST['serial_carroceria']);
    $marca = mysqli_real_escape_string($conexion,$_POST['marca']);
    $modelo = mysqli_real_escape_string($conexion,$_POST['modelo']);
    $anio = mysqli_real_escape_string($conexion,$_POST['anio']);
    $color = mysqli_real_escape_string($conexion,$_POST['color']);
    $precio = mysqli_real_escape_string($conexion,$_POST['precio']);
	
	//esto permite que no se agregue 2 autos con la misma ID 
	$sqluser = "SELECT idautos FROM autos WHERE idautos = '$idautos'; ";
	$resultadouser = $conexion->query($sqluser);
	$filas= $resultadouser->num_rows;
	if($filas > 0){
		echo " <script> alert('EL usuario ya existe');
		windows.location = 'modificar.php';</script>";
	}else{
		//insertar informacion del usuario + "password encriptada"
		$sqlusuario = "INSERT INTO autos(idautos,Matricula,Serial_motor,Serial_carroceria,Marca,Modelo,Anio,Color,Precio) VALUES ('$idautos', '$matricula', '$serial_motor', '$serial_carroceria', '$marca', '$modelo', '$anio', '$color', '$precio')";
		
		$resultadousuario = $conexion->query($sqlusuario);
		if($resultadousuario > 0) {
			echo " <script> alert('Modificado correctamente');
		windows.location = 'modificar.php';</script>";
		}else{
			echo " <script> alert('Error al Modificar');
		windows.location = 'modificar.php';</script>";
		}
	}

}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Bienvenido a la Facultad</title>
	<!--CSS MATERIALIZE-->
	<link href="css/estilos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--register -->
<header>

<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="admin.php">Home</a></li>
        <<li><a href="autos.php">Automotora</a></li>
		<li><a href="salir.php" class="waves-effect waves-light btn">Salir</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="admin.php">Home</a></li>
    <li><a href="autos.php">Automotora</a></li>
    <li><a href="salir.php" class="waves-effect waves-light btn">Salir</a></li>
  </ul>

      <h1>Modificar Automotora</h1>
    </header>
    <div class="container pt-60">
      <div class="row">
			<h4>Ingresa tu Información del automovil</h4>
        <form class="col s12" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input id="idautos" type="text" class="validate" name ="idautos" required="true" value="<?php echo $row['idautos']; ?>">
              <label for="idautos">ID Autos</label>
            </div>
            <div class="input-field col s6">
              <input id="matricula" type="text" class="validate" name = "matricula" required="true" value="<?php echo $row['Matricula']; ?>">
              <label for="matricula">Matricula</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="serial_motor" type="text" class="validate" name = "serial_motor" required="true" value="<?php echo $row['Serial_motor']; ?>">
              <label for="serial_motor">Serial Motor</label>
            </div>
            <div class="input-field col s6">
              <input id="serial_carroceria" type="text" class="validate" name="serial_carroceria" required="true" value="<?php echo $row['Serial_carroceria']; ?>">
              <label for="serial_carroceria">Serial carroceria</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="marca" type="text" class="validate" name="marca" required="true" value="<?php echo $row['Marca']; ?>">
              <label for="marca">Marca</label>
            </div>
            <div class="input-field col s6">
              <input id="modelo" type="text" class="validate" name="modelo" required="true" value="<?php echo $row['Modelo']; ?>">
              <label for="modelo">Modelo</label>
            </div>
          </div>
		  <div class="row">
            <div class="input-field col s6">
              <input id="anio" type="text" class="validate" name="anio" required="true" value="<?php echo $row['Anio']; ?>">
              <label for="anio">Año del Vehiculo</label>
            </div>
            <div class="input-field col s6">
              <input id="color" type="text" class="validate" name="color" required="true" value="<?php echo $row['Color']; ?>">
              <label for="color">Color del Vehiculo</label>
            </div>
          </div>
          <div class="row">
          <div class="input-field col s12">
              <input id="precio" type="tel" class="validate" name="precio" required="true" value="<?php echo $row['Precio']; ?>">
              <label for="precio">Precio</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12 mt-25"> 
              <button class="btn waves-effect waves-light pulse" type="submit" name="modificar">Modificar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    

    <div class="col s12 mt-25"> </div>

<!--register-->
  <div>
  	<?php require_once("piedepagina.php"); ?>
   </div>

</body>
</html>
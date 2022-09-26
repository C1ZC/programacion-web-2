<?php
include("conexion.php");
session_start();
if (isset($_SESSION['id_usuario'])){
	header("Location: admin.php");
}
// Login
//if(!empty($_POST)){
if(isset($_POST['ingresar'])){
	$usuario = mysqli_real_escape_string($conexion,$_POST['user']);
	$password = mysqli_real_escape_string($conexion,$_POST['pass']);
	//enviar encriptar contraceña a base de datos
	$password_encriptada = sha1($password);
	$sql = "SELECT idusuarios FROM usuarios WHERE usuario = '$usuario' AND password = '$password_encriptada' "; 
	$resultado = $conexion->query($sql);
	$rows = $resultado->num_rows;
	if($rows > 0){
		$row = $resultado->fetch_assoc();
		$_SESSION['id_usuario'] = $row ["idusuarios"];
		header("Location: admin.php");
	}else{
		echo " <script> alert('Usuario o Password Incorrecto');
		windows.location = 'index.php';</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Bienvenido a la Automotora</title>
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

<!-- LOGIN-->

<header>
      <h1>Ingresar</h1>
    </header>
    <div class="container pt-60">
      <div class="row">
			<h4>Ingresa tu Información</h4>
        <form class="col s12" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input  type="text" class="validate" name ="user" required="true">
              <label for="first_name">Username</label>
            </div>
            <div class="input-field col s6">
              <input id="pass" type="password" class="validate" name = "pass" required="true">
        <label for="pass">Password</label>
		</div>
		</div>

		<label>
          <input type="checkbox" />
          <span>Recordarme</span>
          </label>
          <div class="row">
            <div class="col s12 mt-25"> 
              <button class="btn waves-effect waves-light pulse" type="submit" name ="ingresar">Ingresar
              </button>
			  
            </div>
          </div>
        </form>
      </div>
    </div>
	

	<div class="toolbar center">
				<a href="registrar.php" class="waves-effect waves-light btn">
						REGISTRARSE
				</a>
				</div>
			

			
<!-- LOGIN-->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
          <!--CSS MATERIALIZE-->
  <link href="css/estilos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mi retail automotor LTDA</title>


</head>
<body>
      <div>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="galeria.php">Galeria</a></li>
        
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.php">Home</a></li>
      <li><a href="galeria.php">Galeria</a></li>
    </ul>
  </div>

    <div>
            <h1> Formulario</h1>
    </div>

    <div class="container pt-60">
        <div class="row">
              <h4>Ingresa tu Información Vehicular</h4>
          <form onsubmit="return validar()" class="col s12" action="formulario.php" method="POST">
              <div class="input-field col s6">
                <input id="matricula" type="text" class="validate" name = "matricula" required="true">
                <label for="matricula">Matricula</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="serial" type="text" class="validate" name = "serial" required="true">
                <label for="serial">Serial de Carroseria</label>
              </div>
              <div class="input-field col s6">
                <input id="marca" type="text" class="validate" name ="marca" required="true">
                <label for="marca">Marca del vehiculo</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="modelo" type="text" class="validate" name="modelo" required="true">
                <label for="modelo">Modelo</label>
              </div>
                <div class="input-field col s6">
                  <input id="año" type="text" class="validate" name="año" required="true">
                  <label for="año">Año</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="color" type="text" class="validate" name="color" required="true">
                  <label for="color">Color</label>
                </div>
                  <div class="input-field col s6">
                    <input id="precio" type="text" class="validate" name="precio" required="true">
                    <label for="precio">Precio</label>
                  </div>
                </div>
            <div class="row">
              <div class="col s12 mt-25"> 
                <button class="btn waves-effect waves-light pulse" type="submit" name="registrar">Registrar
                </button>
                <button class="btn waves-effect waves-light pulse" type="reset" name="reset">Limpiar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/variables.js"></script>
</body>
</html>
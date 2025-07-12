<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Obtiene el ID del usuario desde la URL (GET). Si no existe, asigna 0.
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$usuario = null;

// Si el ID es válido (mayor a 0), realiza la consulta para obtener los datos del usuario
if ($id > 0) {
    $sql = "SELECT * FROM user WHERE id = $id";
    $res = $conexion->query($sql);

    // Si la consulta fue exitosa y encontró un usuario, guarda sus datos en $usuario
    if ($res && $res->num_rows > 0) {
        $usuario = $res->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="recursos/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="recursos/hojasEstilo/estilos-TerceraPagina.css">
    <link rel="shortcut icon" href="recursos/Media/logo-removebg-preview.png" type="image/x-icon">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ACTUALIZAR</title>
  </head>

  <body>
<!-- aqui inica el navbar -->

  <nav >
          <div class="nav-wrapper">
           <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li><a href="verUsuarios.php">Regresar</a></li>
            </ul>
            <div class="titulo_principal"><b>Editar</b></div>
          </div>
    </nav>

 <!--aqui inicia el formilario  -->
<form action="./updateUsuario.php" method="post" >

<!-- Campo oculto para el ID -->
<input type="hidden" name="actualizar" value="<?php echo $usuario ? htmlspecialchars($usuario['id']) : ''; ?>">

<div class="row">
<div class="col s12 m4 l2"><p></p></div>
<div class="col s12 m4 l8 form-formato"><p>
  <h3 style="text-align: center;">Edita o elimina el registro</h3>
  <div class="card-panel hoverable"> 

<!-- Primer campo nombre -->
<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="nombre" type="text" class="validate" style="text-align: center;" name="nombre" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['nombre']) : ''; ?>">
      <label for="nombre" style="text-align: center;" class="active">Nombre*</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="apaterno" type="text" class="validate" style="text-align: center;" name="apaterno" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['apaterno']) : ''; ?>">
      <label for="apaterno" style="text-align: center;" class="active">Apellido Paterno*</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="amaterno" type="text" class="validate" style="text-align: center;" name="amaterno"
        value="<?php echo $usuario ? htmlspecialchars($usuario['amaterno']) : ''; ?>">
      <label for="amaterno" style="text-align: center;" class="active">Apellido Materno</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="calle" type="text" class="validate" style="text-align: center;" name="calle" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['calle']) : ''; ?>">
      <label for="calle" style="text-align: center;" class="active">Calle*</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="numero" type="text" class="validate" style="text-align: center;" name="numero" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['numero']) : ''; ?>">
      <label for="numero" style="text-align: center;" class="active">Número*</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="cp" type="text" class="validate" style="text-align: center;" name="cp" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['cp']) : ''; ?>">
      <label for="cp" style="text-align: center;" class="active">Codigo Postal*</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="municipio" type="text" class="validate" style="text-align: center;" name="municipio" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['municipio']) : ''; ?>">
      <label for="municipio" style="text-align: center;" class="active">Municipio*</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="estado" type="text" class="validate" style="text-align: center;" name="estado" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['estado']) : ''; ?>">
      <label for="estado" style="text-align: center;" class="active">Estado*</label>
    </div>
  </div>
</section>

<!-- Segundo campo email -->
<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="email" type="email" class="validate" style="text-align: center;" name="email" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['email']) : ''; ?>">
      <label for="email" style="text-align: center;" class="active">Email*</label>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="input-field col s12">
      <input id="contrasena" type="text" class="validate" style="text-align: center;" name="contrasena" required
        value="<?php echo $usuario ? htmlspecialchars($usuario['contrasena']) : ''; ?>">
      <label for="contrasena" style="text-align: center;" class="active">Contraseña*</label>
    </div>
  </div>
</section>

          </div>
        </p></div>
        <div class="col s12 m4 l2"><p></p></div>
      </div>

      <center>
        

        <!-- Botón para actualizar usuario -->
<button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
  <i class="material-icons right">send</i>
</button>
</center>
</form>

<!-- Formulario para eliminar usuario -->
<center style="margin-top: 20px;">
<form action="deleteUsuario.php" method="post" style="display:inline;">
  <input type="hidden" name="eliminar" value="<?php echo $usuario ? htmlspecialchars($usuario['id']) : ''; ?>">
  <button class="btn red waves-effect waves-light" type="submit" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">
    Eliminar usuario
    <i class="material-icons right">delete</i>
  </button>
</form>
</center>
  </div>
</p></div>
<div class="col s12 m4 l2"><p></p></div>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="recursos/js/materialize.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        M.updateTextFields();
      });
    </script>
  </body>
</html>
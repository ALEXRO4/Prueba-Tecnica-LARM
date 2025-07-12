<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="recursos/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="recursos/hojasEstilo/estilos-vertabla.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="recursos/Media/logo-removebg-preview.png" type="image/x-icon">
    <title>FORMULARIO</title>
  </head>

  <body>

    <!-- aqui va la nav bar -->
    <section>
      <nav >
          <div class="nav-wrapper">
            
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li><a href="index.php">Log in</a></li>
            </ul>
            <div class="titulo_principal"><b>Registros</b></div>
            
          </div>
        </nav>
  </section>


  </table>

<div class="listas">
   <h1>Usuarios</h1>
   
</div>
<div class="centrar">
 <table class="tablas">
 <tbody class="centrar">
   <?php include 'showUsuario.php';?>
 </tbody>
</table>
</div>
     
<br><br>

<center>
       <a href="formulario.php"><button class="btn waves-effect waves-light" type="submit" name="action">Registrar
          <i class="material-icons right">border_color</i></a>
     </center>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="recursos/js/materialize.min.js"></script>
  </body>
</html>

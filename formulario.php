<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="recursos/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="recursos/hojasEstilo/estilos-SegundaPagina.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="recursos/Media/logo-removebg-preview.png" type="image/x-icon">
  <title>FORMULARIO</title>
</head>

<body>

  <!-- aqui va la nav bar -->
  <section>
    <nav>
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="verUsuarios.php">Regresar</a></li>
        </ul>
        <div class="titulo_principal"><b>Registro</b></div>

      </div>
    </nav>
  </section>


  <!--aqui inicia el formulario  -->
  <form action="./enviarRegistro.php" method="post">

    <!-- Aqui va el formulario -->

    <div class="row">
      <div class="col s12 m4 l2">
        <p></p>
      </div>
      <div class="col s12 m4 l8 form-formato">
        <p>

        <h3 style="text-align: center;">Registrar Usuario</h3>

        <div class="card-panel hoverable">


          <!-- Primer campo nombre -->

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="nombre" type="text" class="validate" style="text-align: center;" name="nombre" required>
                <label for="nombre" style="text-align: center;">Nombre*</label>
              </div>
            </div>
          </section>


          <!-- Segundo y tercer campo apellidos -->

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="apaterno" type="text" class="validate" style="text-align: center;" name="apaterno" required>
                <label for="apaterno" style="text-align: center;">Apellido Paterno*</label>
              </div>
            </div>
          </section>

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="amaterno" type="text" class="validate" style="text-align: center;" name="amaterno">
                <label for="amaterno" style="text-align: center;">Apellido Materno</label>
              </div>
            </div>
          </section>



          <!-- cuarto a noveno campo de direccion -->

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="calle" type="text" class="validate" style="text-align: center;" name="calle" required>
                <label for="calle" style="text-align: center;">Calle*</label>
              </div>
            </div>
          </section>

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="numero" type="text" class="validate" style="text-align: center;" name="numero" required>
                <label for="numero" style="text-align: center;">Número*</label>
              </div>
            </div>
          </section>

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="cp" type="text" class="validate" style="text-align: center;" name="cp" required>
                <label for="cp" style="text-align: center;">Codigo Postal*</label>
              </div>
            </div>
          </section>

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="municipio" type="text" class="validate" style="text-align: center;" name="municipio"
                  required>
                <label for="municipio" style="text-align: center;">Municipio*</label>
              </div>
            </div>
          </section>

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="estado" type="text" class="validate" style="text-align: center;" name="estado" required>
                <label for="estado" style="text-align: center;">Estado*</label>
              </div>
            </div>
          </section>



          <!-- Decimo campo email -->

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" style="text-align: center;" name="email" required>
                <label for="email" style="text-align: center;">Email*</label>
              </div>
            </div>
          </section>



          <!-- Onceavo campo contraseña -->

          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="contrasena" type="text" class="validate" style="text-align: center;" name="contrasena"
                  required>
                <label for="contrasena" style="text-align: center;">Contraseña*</label>
              </div>
            </div>
          </section>

        </div>
        </p>
      </div>
      <div class="col s12 m4 l2">
        <p></p>
      </div>
    </div>


    <center>

      <button  class="btn waves-effect waves-light" type="submit" name="action">Crear
        <i class="material-icons right">send</i>
      </button>
    </center>
  </form>



  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="recursos/js/materialize.min.js"></script>
  <script>
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('error') === 'correo') {
  const div = document.createElement('div');
  div.style.color = 'red';
  div.style.textAlign = 'center';
  div.style.marginBottom = '15px';
  div.textContent = 'Este correo ya fue registrado.';
  document.querySelector('form').prepend(div);
}
</script>
</body>

</html>
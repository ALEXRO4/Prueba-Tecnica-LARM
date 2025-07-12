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
  <title>registro</title>
</head>

<body>

  <!-- aqui va la nav bar -->
  <section>
    <nav>
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li>Prueba Tecnica LARM</li>
        </ul>
        <div class="titulo_principal"><b>Log In</b></div>

      </div>
    </nav>
  </section>


  <!--aqui inicia el formilario  -->
  <form action="validar.php" method="post">

    <!-- Aqui va el formulario -->

    <div class="row">
      <div class="col s12 m4 l2">
        <p></p>
      </div>
      <div class="col s12 m4 l8 form-formato">
        <p>

        <h3 style="text-align: center;">Inicia sesion:</h3>

        <div class="card-panel hoverable">


          <!-- Primer campo email -->
          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" style="text-align: center;" name="email" required>
                <label for="email" style="text-align: center;">Email</label>
              </div>
            </div>
          </section>


          <!-- Segundo campo contraseña -->


          <section>
            <div class="row">
              <div class="input-field col s12">
                <input id="contrasena" type="password" class="validate" style="text-align: center;" name="contrasena"
                  required>
                <label for="contrasena" style="text-align: center;">Contraseña</label>
              </div>
            </div>
          </section>




          <center>
             <button class="btn waves-effect waves-light" type="submit" name="action">Log In
              <i class="material-icons right">send</i>
            </button>
          </center>

        </div>


        </p>
      </div>
      <div class="col s12 m4 l2">
        <p></p>
      </div>
    </div>



  </form>



  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="recursos/js/materialize.min.js"></script>
  <script>
    // Obtiene los parámetros de la URL (por ejemplo, ?error=empty)
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error'); // Obtiene el valor del parámetro 'error'

    // Si existe un parámetro de error, determina el mensaje a mostrar
    if (error) {
      let message = '';
      if (error === 'empty') {
        message = 'Por favor completa todos los campos.'; // Si falta algún campo
      } else if (error === 'wrongpass') {
        message = 'Contraseña incorrecta.'; // Si la contraseña es incorrecta
      } else if (error === 'nouser') {
        message = 'Usuario no encontrado.'; // Si el usuario no existe
      }
      // Si hay un mensaje para mostrar, crea un div y lo coloca al inicio del formulario
      if (message) {
        const div = document.createElement('div');
        div.style.color = 'red';
        div.style.textAlign = 'center';
        div.style.marginBottom = '15px';
        div.textContent = message;
        document.querySelector('form').prepend(div);
      }
    }
  </script>

</body>

</html>
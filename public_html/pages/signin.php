
<?php
require_once "../autoloader.php";
$logeo = new GestionUsuarios();
$registrate= $logeo->doRegister();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>log in</title>
  <link rel="stylesheet" href="./../assets/bulma/css/bulma.css">
  <link rel="stylesheet" href="./../assets/bulma/css/Syle.css">
  <link rel="icon" sizes="48x48" href="./img/android-icon-48x48.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;0,800;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body class="m-5">
  <header class="gea_header">
    <div class="gea_container gea_logo-nav-container">
        <a href="index.html">
            <img class="gea_logo" src="./../img/logo/log_def_nonefondo.png" alt="main_logo">
        </a>
        <nav class="gea_navigation">
            <ul class="gea_menu">
              <li><a href="../index.php">home</a></li>
              <li><a href="formulario.php">find your pc</a></li>
              <li><a href="offers.php">offers</a></li>
              <li><a href="forum.php">forum</a></li>
              <li><a href="login.php">login</a></li>
              <li><a class="gea_selected" href="signin.php">register</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="gea_cuerpo">
        <div class="gea_encabezado-register">
            <h1 class="gea_login-title gea_margin-0-auto">Bienvenido</h1>
            <div class="gea_login-subtitle gea_registro_subtitle gea_margin-0-auto">A NUESTRA COMUNIDAD</div>
            <div class="gea_texto-corrido-claro gea_margin-0-auto">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            </div> 
          </div>
            <div class="gea_form-contenedor gea_encabezado-register">
              <div class="">
                <form action="" method="post">
                  <div class="gea_formCampo">
                      <input required type="text" name="nick">
                      <span></span>
                      <label>Nick</label>
                  </div>
                  <div class="gea_formCampo">
                    <input required type="email" name="email">
                    <span></span>
                    <label>Email</label>
                  </div>
                  <div class="gea_formCampo">
                    <input required type="password" name="passwd">
                    <span></span>
                    <label>Contraseña</label>
                  </div>
                  <div class="gea_formCampo">
                    <input required type="password" name="passwd2">
                    <span></span>
                    <label>Repite Contraseña</label>
                  </div>
                  <div class="gea_login-submit">
                    <input class='gea_call-to-action' type='submit' value='Regístrate'>
                  </div>
                </form>
              </div>
            </div>
        </div>
  <footer>
    <div class="columns">
      <div class="column is-1"></div>
      <div class="column is-2">
          <div class="gea_contenedorFooter">
              <h2>CONTACT</h2>
              <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</span>
          </div>
          <div class="gea_contenedorFooter">
              <h2>PLACE HOLDER</h2>
              <span>Consetetur sadipscing elitr sed diam voluptua.
              </span>
          </div>
     
      </div>
      <div class="column is-2"></div>
      <div class="column is-2">
          <div class="gea_contenedorFooter">
              <h2>REQUIRMENTS</h2>
              <span>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</span>
          </div>
          <div class="gea_contenedorFooter">
              <h2>SHOPPING SETTINGS</h2>
              <span>Elitr onsetetur sadipscing .
              </span>
          </div>
      </div>
      <div class="column is-2"></div>
      <div class="column is-2">
          <div class="gea_contenedorFooter">
              <h2>FAQ</h2>
              <div>Consetetur sadipscing
              </div>
              <div>Consetetur sadipscing
              </div>
              <div>Consetetur sadipscing
              </div>
              <div>Consetetur sadipscing
              </div>
              <div>Consetetur sadipscing
              </div>
              <div>Consetetur sadipscing
              </div>
          </div>
      </div>
      <div class="column is-1"></div>
  </div>

  </footer>
</body>

</html>
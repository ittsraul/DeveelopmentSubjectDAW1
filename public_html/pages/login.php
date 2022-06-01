
<?php
require_once "../autoloader.php";
$logeo = new Security();
$mensaje= $logeo->doLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bulma/css/Syle.css">
    <link rel="stylesheet" href="../assets/bulma/css/bulma.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;0,800;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../Medios Audiovisuales/log_definitivo.png">
    <title>Loggeo Papi</title>
</head>
<body>
    <header class="gea_header">
        <div class="gea_container gea_logo-nav-container">
            <a href="index.html">
                <img class="gea_logo" src="../img/logo/log_def_nonefondo.png" alt="main_logo">
            </a>
            <nav class="gea_navigation">
                <ul class="gea_menu">
                    <li><a href="../index.php">home</a></li>
                    <li><a href="./formulario.php">find your pc</a></li>
                    <li><a href="offers.php">offers</a></li>
                    <li><a href="./forum.php">forum</a></li>
                    <li><a class="gea_selected" href="">login</a></li>
                    <li><a href="signin.php">register</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="gea_cuerpo">
      <div class="gea_saludo">
        <h1 class="gea_login-title">¡HOLA!</h1>
        <div class="gea_login-subtitle">Nos alegramos de verte de nuevo</div>
      </div>
      <div class="gea_form-contenedor gea_encabezado-register">
          <form action="" method="post">
            <div class="gea_formCampo">
                <?=$mensaje; ?>
                <input required type="text" name="nick">
                <span></span>
                <label>Nick</label>
            </div>
            <div class="gea_formCampo">
              <input required type="password" name="passwd">
              <span></span>
              <label>Contraseña</label>
            </div>
            <div class="gea_mensaje-pass">
              <span>¿Has olvidado la contraseña?</span>    
            </div>
            <div class="gea_login-submit">
              <input class='gea_call-to-action' type='submit'>
            </div>
          </form>
          <!-- <button class='gea_border-button'><a href="signin.php">Crear una cuenta</a></button> -->
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
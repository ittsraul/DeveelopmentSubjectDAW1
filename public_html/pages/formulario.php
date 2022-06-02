<?php
require_once "../autoloader.php";
$logeo = new Security();
$logeo->checkLoggedIn();
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
  <title>tienda</title>
</head>

<body>
  <header class="gea_header">
    <div class="gea_container gea_logo-nav-container">
      <a href="./../index.html">
        <img class="gea_logo" src="../img/logo/log_def_nonefondo.png" alt="main_logo">
      </a>
      <nav class="gea_navigation">
        <ul class="gea_menu">
          <li><a href="../index.html">home</a></li>
          <li><a href="formulario.html">find your pc</a></li>
          <li><a class="gea_selected" href="./offers.php">offers</a></li>
          <li><a href="./forum.html">forum</a></li>
          <li><a href="login.html">login / register</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="gea_cuerpo">
    <div class="gea_saludo">
      <h1 class="gea_login-title">¡HOLA!</h1>
      <div class="gea_login-subtitle">Vamos a hacerte un par de encuestas para saber tu nivel de perfil</div>
    </div>
    <div class="gea_form-contenedor">
        <form action="" method="post">
          <div class="columns">
            <div class="column is-1"></div>
            <div class="column is-2 radio">
              <h1>TIPOS DE USO</H1>
              <br>
              <label>
              <input type="radio" name="" value="">PC Multimedia
              <br>
              <input type="radio" name="" value="">PC Gaming
              <br>
              <input type="radio" name="" value="">PC Edicion
              <br>
              <input type="radio" name="" value="">PC Streaming</label>
              <hr>
            </div>
            <div class="column is-2">
              <h1>TIPOS DE PRESUPUESTO</h1>
              <br>
              <input type="radio" name="" value="">Lo más economico
              <br>
              <input type="radio" name="" value="">Equilibrado
              <br>
              <input type="radio" name="" value="">Lo mejor
            </div>
            <div class="column is-2">
              <h1>DISEÑO</h1>
              <br>
              <input type="radio" name="" value="">Básico
              <br>
              <input type="radio" name="" value="">RGB
              <br>
              <input type="radio" name="" value="">Minimal
              <br>
              <input type="radio" name="" value="">De Diseño
            </div>
            <div class="column is-2"><h1>TIPOS DE REFRIGERACION</h1>
            <br>
              <input type="radio" name="" value="">Stock
              <br>
              <input type="radio" name="" value="">Aire
              <br>
              <input type="radio" name="" value="">Líquida
              <br>
              <input type="radio" name="" value="">Líquida Custom
            </div>
            <div class="column is-2"> <h1>TAMAÑO DEL PC</h1>
            <br>
              <input type="radio" name="" value="">Mini (ITX)
              <br>
              <input type="radio" name="" value="">Pequeño (Micro ATX)
              <br>
              <input type="radio" name="" value="">Estandar (ATX)
              <br>
              <input type="radio" name="" value="">Gigante (ATX y EATX)
            </div>
            <div class="column is-1"></div>
 </form>
      </div>
      <div class="gea_login-submit">
        <input class='gea_call-to-action' type='submit'>
      </div>
     
    </div>
  </div>
  </div>
  </div>



  <label for="file">File progress:</label>

  <progress id="file" max="100" value="18"></progress> 18% </progress>

  <form method="POST" id=""></form>

  <button type="button" form="">Enviar</button> </td>
  </table>
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
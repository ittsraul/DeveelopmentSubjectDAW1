<?php
require_once "autoloader.php";

$security = new Security();
//Security llama a getUserdata que devuelve lo que le has pasado , sino pone login/register
//Si estas logeado que aparezca el enlace a listuser.php
$username = $security->getUserData();
//var_dump($username);
if ($username) {
    		$mostrarenlace .= "<a href='pages/listuser.php'>".$username['nick']."</a>";
  			//$mostrarenlace .= "<a href='pages'"
}
else {
    $mostrarenlace = "<a href='pages/login.php'>login</a></li><li><a href='pages/signin.php'>register</a>";
}
//$username = ($security->getUserData()) ? $security->getUserData() : "login / register";
//var_dump($username);
//$link = ($security->getUserData()) ? 'listuser.php' : 'login.php';
?>
<a href="./pages/listuser.php"></a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bulma/css/Syle.css">
    <link rel="stylesheet" href="./assets/bulma/css/bulma.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;0,800;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./../Medios Audiovisuales/log_definitivo.png">
    <title>homepage</title>
</head>
<body>
    <header class="gea_header">
        <div class="gea_container gea_logo-nav-container">
            <a href="./pages/Quienessomos.html">
                <img class="gea_logo" src="img/logo/log_def_nonefondo.png" alt="main_logo">
            </a>
            <nav class="gea_navigation">
                <ul class="gea_menu">
                    <li><a class="gea_selected" href="./index.php">home</a></li>
                    <li><a href="pages/formulario.php">find your pc</a></li>
                    <li><a href="pages/offers.php">offers</a></li>
                    <li><a href="pages/forum.php">forum</a></li>
                    <li><?= $mostrarenlace?></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="gea_cuerpo">
    <div class="gea_section1">
        <div class="columns">
            <div class="column is-7 gea_index-part1-left">
                <h1 class="gea_h1">Configura tu</h1>
                <h1 class="gea_subtitulo">NUEVO PC</h1>
                <span class="gea_texto-corrido-claro">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                </span>
                <div class="gea_contenedor-boton-left">
                    <button class="gea_call-to-action">Configura tu pc</button>
                </div>
            </div>
            <div class="column is-5 gea_img-container">
                <img class="gea_main-image" src="img/index/main-img.png" alt="main-image" >
            </div>
                
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